<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends MY_Controller {

	public function __construct()
    {
		parent::__construct();
    }

	public function index()
	{
		$data['nav_contacto'] = true;
		$data['pagina_titulo'] = 'Contacto';

		$data['controlador'] = 'index';
		$data['regresar_a'] = 'contacto';
		$controlador_js = "contacto/index";

		$data['styles'] = array(
		);
		$data['scripts'] = array(
			array('es_rel' => true, 'src' => ''.$controlador_js.'.js'),
		);
		
		$this->construir_public_ui('contacto/index' ,$data);
    }
    
}
