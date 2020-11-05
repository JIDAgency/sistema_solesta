<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Directorio extends MY_Controller {

	public function __construct()
    {
		parent::__construct();
    }

	public function index()
	{
		$data['pagina_menu_inicio'] = true;
		$data['pagina_titulo'] = 'Directorio';

		$data['controlador'] = 'index';
		$data['regresar_a'] = 'directorio';
		$controlador_js = "directorio/index";

		$data['styles'] = array(
		);
		$data['scripts'] = array(
			array('es_rel' => true, 'src' => ''.$controlador_js.'.js'),
		);
		
		$this->construir_public_ui('directorio/index' ,$data);
    }
    
}
