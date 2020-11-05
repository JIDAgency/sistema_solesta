<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapa extends MY_Controller {

	public function __construct()
    {
		parent::__construct();
    }

	public function index()
	{
		$data['pagina_menu_inicio'] = true;
		$data['pagina_titulo'] = 'Mapa';

		$data['controlador'] = 'index';
		$data['regresar_a'] = 'mapa';
		$controlador_js = "mapa/index";

		$data['styles'] = array(
		);
		$data['scripts'] = array(
			array('es_rel' => true, 'src' => ''.$controlador_js.'.js'),
		);
		
		$this->construir_public_ui('mapa/index' ,$data);
    }

    public function planta_alta()
	{
		$data['pagina_menu_inicio'] = true;
		$data['pagina_titulo'] = 'Planta alta';

		$data['controlador'] = 'planta_alta';
		$data['regresar_a'] = 'mapa';
		$controlador_js = "mapa/planta_alta";

		$data['styles'] = array(
		);
		$data['scripts'] = array(
			array('es_rel' => true, 'src' => ''.$controlador_js.'.js'),
		);
		
		$this->construir_public_ui('mapa/planta_alta' ,$data);
    }

    public function planta_baja()
	{
		$data['pagina_menu_inicio'] = true;
		$data['pagina_titulo'] = 'Planta baja';

		$data['controlador'] = 'planta_baja';
		$data['regresar_a'] = 'mapa';
		$controlador_js = "mapa/planta_baja";

		$data['styles'] = array(
		);
		$data['scripts'] = array(
			array('es_rel' => true, 'src' => ''.$controlador_js.'.js'),
		);
		
		$this->construir_public_ui('mapa/planta_baja' ,$data);
    }
    
    public function estacionamiento()
	{
		$data['pagina_menu_inicio'] = true;
		$data['pagina_titulo'] = 'Estacionamiento';

		$data['controlador'] = 'estacionamiento';
		$data['regresar_a'] = 'mapa';
		$controlador_js = "mapa/estacionamiento";

		$data['styles'] = array(
		);
		$data['scripts'] = array(
			array('es_rel' => true, 'src' => ''.$controlador_js.'.js'),
		);
		
		$this->construir_public_ui('mapa/estacionamiento' ,$data);
    }
    
}
