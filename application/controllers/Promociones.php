<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promociones extends MY_Controller {

	public function __construct()
    {
		parent::__construct();
    }

	public function index()
	{
		$data['pagina_menu_inicio'] = true;
		$data['pagina_titulo'] = 'Promociones';

		$data['controlador'] = 'index';
		$data['regresar_a'] = 'promociones';
		$controlador_js = "promociones/index";

		$data['styles'] = array(
		);
		$data['scripts'] = array(
			array('es_rel' => true, 'src' => ''.$controlador_js.'.js'),
		);
		
		$this->construir_public_ui('promociones/index' ,$data);
    }
    
}
