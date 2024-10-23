<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Directorio extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("categorias_model");
		$this->load->model("locales_model");
	}

	public function index()
	{
		$data['nav_directorio'] = true;
		$data['pagina_titulo'] = 'Directorio';

		$data['controlador'] = 'index';
		$data['regresar_a'] = 'directorio';
		$controlador_js = "directorio/index";

		$data['styles'] = array();
		$data['scripts'] = array(
			array('es_rel' => true, 'src' => '' . $controlador_js . '.js'),
		);

		$categorias_list = $this->categorias_model->get_lista_de_categorias_activas()->result();
		$locales_list = $this->locales_model->get_locales_con_detalles_ordenados_por_categoria()->result();
		$switch = true;

		$data['categorias_list'] = $categorias_list;
		$data['locales_list'] = $locales_list;
		$data['switch'] = $switch;

		$this->construir_public_ui('directorio/index', $data);
	}
}
