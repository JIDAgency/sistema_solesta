<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mapa extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['nav_mapa'] = true;
		$data['pagina_titulo'] = 'Mapa';

		$data['controlador'] = 'index';
		$data['regresar_a'] = 'mapa';
		$controlador_js = "mapa/index";

		$data['styles'] = array();
		$data['scripts'] = array(
			array('es_rel' => true, 'src' => '' . $controlador_js . '.js'),
		);

		$this->construir_public_ui('mapa/index', $data);
	}
}
