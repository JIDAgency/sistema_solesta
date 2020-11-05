<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portada extends MY_Controller {

	public function __construct()
    {
		parent::__construct();
    }

	public function index()
	{
		$data['pagina_menu_inicio'] = true;
		$data['pagina_titulo'] = 'Portada';

		$data['controlador'] = 'index';
		$data['regresar_a'] = 'portada';
		$controlador_js = "portada/index";

		$data['styles'] = array(
		);
		$data['scripts'] = array(
			array('es_rel' => true, 'src' => ''.$controlador_js.'.js'),
		);
		
		$this->construir_public_ui('portada/index' ,$data);
    }
    
}
