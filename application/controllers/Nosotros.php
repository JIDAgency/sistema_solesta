<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nosotros extends MY_Controller {

	public function __construct()
    {
		parent::__construct();
    }

	public function index()
	{
		$data['nav_nosotros'] = true;
		$data['pagina_titulo'] = 'Nosotros';

		$data['controlador'] = 'index';
		$data['regresar_a'] = 'nosotros';
		$controlador_js = "nosotros/index";

		$data['styles'] = array(
		);
		$data['scripts'] = array(
			array('es_rel' => true, 'src' => ''.$controlador_js.'.js'),
		);
		
		$this->construir_public_ui('nosotros/index' ,$data);
    }
    
}
