<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pickup extends MY_Controller {

	public function __construct()
    {
		parent::__construct();

		$this->load->model('pickup_model');
    }

	public function index()
	{
		$data['pagina_menu_inicio'] = true;
		$data['pagina_titulo'] = 'PickUp';

		$data['controlador'] = 'index';
		$data['regresar_a'] = 'pickup';
		$controlador_js = "pickup/index";

		$data['styles'] = array(
		);
		$data['scripts'] = array(
			array('es_rel' => true, 'src' => ''.$controlador_js.'.js'),
		);
		
		$pickups_restautantes_list = $this->pickup_model->get_pickups_de_restaurantes()->result();
		$data['pickups_restautantes_list'] = $pickups_restautantes_list;

		$pickups_shopping_list = $this->pickup_model->get_pickups_de_shopping()->result();
		$data['pickups_shopping_list'] = $pickups_shopping_list;

		$this->construir_public_ui('pickup/index' ,$data);
    }
    
}
