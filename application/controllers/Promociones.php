<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promociones extends MY_Controller {

	public function __construct()
    {
		parent::__construct();

		$this->load->model("locales_imagenes_model");
    }

	public function index()
	{
		$data['pagina_menu_inicio'] = true;
		$data['pagina_titulo'] = 'Promociones';

		$data['controlador'] = 'index';
		$data['regresar_a'] = 'promociones';
		$controlador_js = "promociones/index";

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

		$promociones_list = $this->locales_imagenes_model->get_promociones()->result();
		
		$data["promociones_list"] = $promociones_list;

		$this->construir_public_ui('promociones/index' ,$data);
    }
    
}
