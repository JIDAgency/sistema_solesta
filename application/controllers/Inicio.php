<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends MY_Controller {

	public function __construct()
    {
		parent::__construct();
		$this->load->model('locales_model');
		$this->load->model('categorias_model');
		$this->load->model('locales_imagenes_model');
    }

	public function index()
	{
		$data['pagina_menu_inicio'] = true;
		$data['pagina_titulo'] = 'Inicio';

		$data['controlador'] = 'index';
		$data['regresar_a'] = 'inicio';
		$controlador_js = "inicio/index";

		$data['styles'] = array(
			array('es_rel' => false, 'href' => base_url() . 'assets/css/inicio/index.css'),
			array('es_rel' => false, 'href' => base_url() . 'app-assets/vendors/css/forms/selects/select2.min.css'),
		);
		$data['scripts'] = array(
			array('es_rel' => false, 'src' => base_url() . 'app-assets/vendors/js/forms/select/select2.full.min.js'),
			array('es_rel' => false, 'src' => base_url() . 'app-assets/js/scripts/forms/select/form-select2.js'),
			array('es_rel' => true, 'src' => ''.$controlador_js.'.js'),
		);
		
		$locales_list = $this->locales_model->get_lista_de_locales_con_detalles()->result();
		$categorias_list = $this->categorias_model->get_lista_de_categorias_activas()->result();
		$subcategorias_list = $this->categorias_model->get_lista_de_subcategorias_activas()->result();
		$buscador_list = $this->locales_model->buscador_locales()->result();
		$pickups_list = $this->locales_imagenes_model->get_random_pickups()->result();

		$data['locales_list'] = $locales_list;
		$data['categorias_list'] = $categorias_list;
		$data['subcategorias_list'] = $subcategorias_list;
		$data['buscador_list'] = $buscador_list;
		$data['pickups_list'] = $pickups_list;

		$this->construir_public_ui('inicio/index' ,$data);
	}

	public function fetch()
	{
		$output = '';
		$busqueda = '';
		$categoria = '';
		
		if($this->input->post())
		{
			$busqueda = $this->input->post('busqueda');
			$categoria = $this->input->post('categoria');
		}

		$data = $this->locales_model->buscador_locales($busqueda, $categoria);

		if ($data->num_rows() > 0) {
			foreach($data->result() as $row)
			{
				$output .= '
					<a href="'.site_url('/locales/ver/'.$row->url).'" class="list-group-item list-group-item-action">'.$row->nombre.'</a>
				';
			}
		} else {
			$output .= '
				<a href="'.base_url().'" class="list-group-item list-group-item-action">No se encontraron coincidencias...</a>
			';
		}

		//$output .= '</table>';

		echo $output;
	}
}
