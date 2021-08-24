<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eventos extends MY_Controller {

	public function __construct()
    {
		parent::__construct();
    }

	public function index()
	{
		$data['pagina_menu_inicio'] = true;
		$data['pagina_titulo'] = 'Eventos';

		$data['controlador'] = 'index';
		$data['regresar_a'] = 'eventos';
		$controlador_js = "eventos/index";

		$data['styles'] = array(
			array('es_rel' => false, 'href' => base_url() . 'app-assets/vendors/js/gallery/photo-swipe/photoswipe.css'),
			array('es_rel' => false, 'href' => base_url() . 'app-assets/vendors/js/gallery/photo-swipe/default-skin/default-skin.css'),
			array('es_rel' => false, 'href' => base_url() . 'app-assets/css/pages/gallery.css'),
		);

		$data['scripts'] = array(
			array('es_rel' => false, 'src' => base_url() . 'app-assets/vendors/js/ui/jquery.sticky.js'),
			array('es_rel' => false, 'src' => base_url() . 'app-assets/vendors/js/gallery/masonry/masonry.pkgd.min.js'),
			array('es_rel' => false, 'src' => base_url() . 'app-assets/vendors/js/gallery/photo-swipe/photoswipe.min.js'),
			array('es_rel' => false, 'src' => base_url() . 'app-assets/vendors/js/gallery/photo-swipe/photoswipe-ui-default.min.js'),
			array('es_rel' => false, 'src' => base_url() . 'app-assets/js/scripts/gallery/photo-swipe/photoswipe-script.js'),
			array('es_rel' => true, 'src' => ''.$controlador_js.'.js'),
		);
		
		$this->construir_public_ui('eventos/index' ,$data);
    }
    
}
