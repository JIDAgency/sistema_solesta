<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends MY_Controller {

	public function __construct()
    {
		parent::__construct();
    }

	public function index()
	{
		redirect("info/acerca");
	}

	public function acerca()
	{
		$data['pagina_menu_inicio'] = true;
		$data['pagina_titulo'] = 'Info';

		$data['controlador'] = 'index';
		$data['regresar_a'] = 'info';
		$controlador_js = "info/index";

		$data['styles'] = array(
		);
		$data['scripts'] = array(
			array('es_rel' => true, 'src' => ''.$controlador_js.'.js'),
		);
		
		$this->construir_public_ui('info/acerca' ,$data);
	}
	
	public function contacto()
	{
		$data['pagina_menu_inicio'] = true;
		$data['pagina_titulo'] = 'Contacto';

		$data['controlador'] = 'index';
		$data['regresar_a'] = 'info';
		$controlador_js = "info/contacto";

		$data['styles'] = array(
		);
		$data['scripts'] = array(
			array('es_rel' => true, 'src' => ''.$controlador_js.'.js'),
		);
		
		$this->construir_public_ui('info/contacto' ,$data);
	}
	
	public function aviso_privacidad()
	{
		$data['pagina_menu_inicio'] = true;
		$data['pagina_titulo'] = 'Aviso de privacidad';

		$data['controlador'] = 'index';
		$data['regresar_a'] = 'info';
		$controlador_js = "info/aviso_privacidad";

		$data['styles'] = array(
		);
		$data['scripts'] = array(
			array('es_rel' => true, 'src' => ''.$controlador_js.'.js'),
		);
		
		$this->construir_public_ui('info/aviso_privacidad' ,$data);
    }
    
}
