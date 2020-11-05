<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias extends MY_Controller {

	public function __construct()
    {
		parent::__construct();
    }

	public function index()
	{
		$data['pagina_menu_inicio'] = true;
		$data['pagina_titulo'] = 'Categorias';

		$data['controlador'] = 'index';
		$data['regresar_a'] = 'categorias';
		$controlador_js = "categorias/index";

		$data['styles'] = array(
			array('es_rel' => false, 'href' => base_url() . 'app-assets/css/pages/gallery.css'),
		);
		$data['scripts'] = array(
			array('es_rel' => false, 'src' => base_url() . 'app-assets/vendors/js/ui/jquery.sticky.js'),
			array('es_rel' => true, 'src' => ''.$controlador_js.'.js'),
		);
		
		$this->construir_public_ui('categorias/index' ,$data);
    }

    public function ver($categoria = null)
	{
		$data['pagina_menu_inicio'] = true;
		$data['pagina_titulo'] = '';

		$data['controlador'] = 'ver';
		$data['regresar_a'] = 'categorias';
		$controlador_js = "categorias/ver";

		$data['styles'] = array(
		);
		$data['scripts'] = array(
			array('es_rel' => true, 'src' => ''.$controlador_js.'.js'),
		);
		
		$this->construir_public_ui('categorias/ver' ,$data);
    }
    
}
