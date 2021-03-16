<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Locales extends MY_Controller {

	public function __construct()
    {
		parent::__construct();
		$this->load->model("categorias_model");
		$this->load->model("locales_model");
		$this->load->model("locales_imagenes_model");
		$this->load->model("relacion_locales_categorias_model");
    }

	public function index()
	{
		$data['pagina_menu_inicio'] = true;
		$data['pagina_titulo'] = 'Locales';

		//revisar
		$data['controlador'] = 'backoffice/locales';
		$data['regresar_a'] = 'inicio';
		$controlador_js = "backoffice/locales/index";

		$data['mensaje_exito'] = $this->session->flashdata('MENSAJE_EXITO');
        $data['mensaje_info'] = $this->session->flashdata('MENSAJE_INFO');
		$data['mensaje_error'] = $this->session->flashdata('MENSAJE_ERROR');
		
		$data['styles'] = array(
			array('es_rel' => false, 'href' => base_url() . 'app-assets/vendors/css/tables/datatable/datatables.min.css'),
		);
		$data['scripts'] = array(
			array('es_rel' => false, 'src' => base_url() . 'app-assets/vendors/js/tables/datatable/datatables.min.js'),
			array('es_rel' => true, 'src' => ''.$controlador_js.'.js'),
		);

		$locales_list = $this->locales_model->get_locales()->result();
		
		$data['locales_list'] = $locales_list;

		$this->construir_private_ui('backoffice/locales/index' ,$data);
	}

	public function editar($local_url = null)
	{
		if ($this->input->post()) {
			$local_url = $this->input->post('local_url');
		}

		$data['pagina_menu_inicio'] = true;
		$data['pagina_titulo'] = 'Editar local';

		//revisar
		$data['controlador'] = 'backoffice/locales/editar/'.$local_url;
		$data['regresar_a'] = 'inicio';
		$controlador_js = "backoffice/locales/editar";

		$data['mensaje_exito'] = $this->session->flashdata('MENSAJE_EXITO');
        $data['mensaje_info'] = $this->session->flashdata('MENSAJE_INFO');
		$data['mensaje_error'] = $this->session->flashdata('MENSAJE_ERROR');
		
		$data['styles'] = array(
		);
		$data['scripts'] = array(
			array('es_rel' => true, 'src' => ''.$controlador_js.'.js'),
		);

		$this->form_validation->set_rules('nombre', 'Nombre del local', 'trim|required|min_length[1]|max_length[150]');

		$local_row = $this->locales_model->get_local_por_url($local_url)->row();

		$data['local_row'] = $local_row;

		if ($this->form_validation->run() == false) {
			$this->construir_private_ui('backoffice/locales/editar' ,$data);
        } else {
			redirect($data['controlador']);
			$this->construir_private_ui('backoffice/locales/editar' ,$data);
		}
	}
}
