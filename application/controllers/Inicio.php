<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends MY_Controller {

	public function __construct()
    {
		parent::__construct();
		$this->load->model('locales_model');
		$this->load->model('categorias_model');
    }

	public function index()
	{
		$data['pagina_menu_inicio'] = true;
		$data['pagina_titulo'] = 'Inicio';

		$data['controlador'] = 'index';
		$data['regresar_a'] = 'inicio';
		$controlador_js = "inicio/index";

		$data['styles'] = array(
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

		$data['locales_list'] = $locales_list;
		$data['categorias_list'] = $categorias_list;
		$data['subcategorias_list'] = $subcategorias_list;
		$data['buscador_list'] = $buscador_list;

		$this->construir_public_ui('inicio' ,$data);
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
		
		$output .= '
			<div class="table-responsive">
				<table class="table table-bordered table-striped">
				<tr>
					<th>Nombre</th>
				</tr>
		';

		/**
		$output .= '
			<tr>
				<td>'.$busqueda.' '.$categoria.'</td>
			</tr>
		';
		*/

		if($data->num_rows() > 0)
		{
			foreach($data->result() as $row)
			{
				$output .= '
					<tr>
						<td>'.$row->nombre.'</td>
					</tr>
				';
			}
		}
		else
		{
			$output .= '
				<tr>
					<td colspan="5">No Data Found</td>
				</tr>
			';
		}

		$output .= '</table>';

		echo $output;
	}
}
