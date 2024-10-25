<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Locales extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("categorias_model");
		$this->load->model("etiquetas_model");
		$this->load->model("locales_model");
		$this->load->model("locales_imagenes_model");
		$this->load->model("relacion_locales_categorias_model");
		$this->load->model("locales_horarios_model");
	}

	public function index($local = null)
	{
		if ($this->input->post()) {
			$local = $this->input->post('local');
		}

		if (!$local) {
			$this->session->set_flashdata('MENSAJE_INFO', '¡Oops! Al parecer ha ocurrido un error, por favor intentelo más tarde. (1)');
			redirect('directorio');
		}

		$local_row = $this->locales_model->get_local_por_url($local)->row();

		$data['pagina_menu_inicio'] = true;
		$data['pagina_titulo'] = ucfirst(mb_strtolower($local_row->nombre));

		$data['controlador'] = 'locales/' . $local;
		$data['regresar_a'] = 'directorio';
		$controlador_js = "locales/index";

		$data['styles'] = array(
			array('es_rel' => true, 'href' => 'locales/index.css'),
		);

		$data['scripts'] = array(
			array('es_rel' => true, 'src' => '' . $controlador_js . '.js'),
		);

		if (!$local_row) {
			$this->session->set_flashdata('MENSAJE_ERROR', '¡Oops! Al parecer ha ocurrido un error, por favor intentelo más tarde. (1)');
			redirect($data['regresar_a']);
		}

		if ($local_row->estatus == "suspendido") {
			$this->session->set_flashdata('MENSAJE_INFO', 'Lo sentimos. A no ser que tengas una máquina del tiempo, ese contenido no está disponible.');
			redirect($data['regresar_a']);
		}

		$categorias_list = $this->categorias_model->get_categorias_por_local($local_row->id)->result();
		$imagen_banner_principal = $this->locales_imagenes_model->get_banner_principal_por_local_id($local_row->id)->row();
		$imagen_banner_principal_movil = $this->locales_imagenes_model->get_banner_principal_movil_por_local_id($local_row->id)->row();
		$imagen_logotipo = $this->locales_imagenes_model->get_logotipo_por_local_id($local_row->id)->row();
		$imagenes_galeria_list = $this->locales_imagenes_model->get_galeria_por_local_id($local_row->id)->result();
		$imagen_pickup = $this->locales_imagenes_model->get_pickup_por_local_id($local_row->id)->row();
		$imagenes_promociones_list = $this->locales_imagenes_model->get_promociones_por_local_id($local_row->id)->result();
		$imagenes_eventos_list = $this->locales_imagenes_model->get_eventos_por_local_id($local_row->id)->result();
		$etiquetas_list = $this->etiquetas_model->get_etiqueta_por_local_id($local_row->id)->result();
		$horarios_list = $this->locales_horarios_model->get_horario_de_local_por_local_id($local_row->id)->result();

		$data['local_row'] = $local_row;
		$data['categorias_list'] = $categorias_list;
		$data['imagen_banner_principal'] = $imagen_banner_principal;
		$data['imagen_banner_principal_movil'] = $imagen_banner_principal_movil;
		$data['imagen_logotipo'] = $imagen_logotipo;
		$data['imagenes_galeria_list'] = $imagenes_galeria_list;
		$data['imagen_pickup'] = $imagen_pickup;
		$data['imagenes_promociones_list'] = $imagenes_promociones_list;
		$data['imagenes_eventos_list'] = $imagenes_eventos_list;
		$data['etiquetas_list'] = $etiquetas_list;
		$data['horarios_list'] = $horarios_list;

		$this->construir_public_ui('locales/index', $data);
	}
}
