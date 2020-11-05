<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Locales extends MY_Controller {

	public function __construct()
    {
		parent::__construct();
    }

	public function index()
	{
		$data['pagina_menu_inicio'] = true;
		$data['pagina_titulo'] = 'Locales';

		$data['controlador'] = 'index';
		$data['regresar_a'] = 'locales';
		$controlador_js = "locales/index";

		$data['styles'] = array(
		);
		$data['scripts'] = array(
			array('es_rel' => true, 'src' => ''.$controlador_js.'.js'),
		);
		
		$this->construir_public_ui('locales/index' ,$data);
    }

    public function dar_de_alta_locales(Type $var = null)
    {
        # code...
    }
}
