<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias extends MY_Controller {

	public function __construct()
    {
		parent::__construct();

		$this->load->model("categorias_model");
    }

	public function index()
	{
		$data['pagina_menu_inicio'] = true;
		$data['pagina_titulo'] = 'Categorias';

		$data['controlador'] = 'index';
		$data['regresar_a'] = 'inicio';
		$controlador_js = "categorias/index";

		$data['styles'] = array(
			array('es_rel' => false, 'href' => base_url() . 'app-assets/css/pages/gallery.css'),
		);
		$data['scripts'] = array(
			array('es_rel' => false, 'src' => base_url() . 'app-assets/vendors/js/ui/jquery.sticky.js'),
			array('es_rel' => true, 'src' => ''.$controlador_js.'.js'),
		);
		
		$categorias_list = $this->categorias_model->get_lista_de_categorias_activas()->result();
		
		if (!$categorias_list) {
			redirect($data['regresar_a']);
		}

		$data["categorias_list"] = $categorias_list;
		
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
	
	public function dar_de_alta_categorias()
	{
		$data = array(
			array(
				'nombre' => 'ACCESORIOS' ,
				'tipo' => 'categoria' ,
				'subcategoria_de' => NULL,
				'url' => 'accesorios',
				'url_imagen' => 'accesorios.jpg',
				'estatus' => 'activo',
			),
			array(
				'nombre' => 'FUN' ,
				'tipo' => 'categoria' ,
				'subcategoria_de' => NULL,
				'url' => 'fun',
				'url_imagen' => 'fun.jpg',
				'estatus' => 'activo',
			),
			array(
				'nombre' => 'HOGAR' ,
				'tipo' => 'categoria' ,
				'subcategoria_de' => NULL,
				'url' => 'hogar',
				'url_imagen' => 'hogar.jpg',
				'estatus' => 'activo',
			),
			array(
				'nombre' => 'MERCADO SOLESTA' ,
				'tipo' => 'categoria' ,
				'subcategoria_de' => NULL,
				'url' => 'mercado_solesta',
				'url_imagen' => 'mercado_solesta.jpg',
				'estatus' => 'activo',
			),
			array(
				'nombre' => 'RESTAURANTES' ,
				'tipo' => 'categoria' ,
				'subcategoria_de' => NULL,
				'url' => 'restaurantes',
				'url_imagen' => 'restaurantes.jpg',
				'estatus' => 'activo',
			),
			array(
				'nombre' => 'SERVICIOS' ,
				'tipo' => 'categoria' ,
				'subcategoria_de' => NULL,
				'url' => 'servicios',
				'url_imagen' => 'servicios.jpg',
				'estatus' => 'activo',
			),
			array(
				'nombre' => 'SHOPPING' ,
				'tipo' => 'categoria' ,
				'subcategoria_de' => NULL,
				'url' => 'shopping',
				'url_imagen' => 'shopping.jpg',
				'estatus' => 'activo',
			),
			array(
				'nombre' => 'TECNOLOGÍA' ,
				'tipo' => 'categoria' ,
				'subcategoria_de' => NULL,
				'url' => 'tecnologia',
				'url_imagen' => 'tecnologia.jpg',
				'estatus' => 'activo',
			),
			array(
				'nombre' => 'WELLNESS' ,
				'tipo' => 'categoria' ,
				'subcategoria_de' => NULL,
				'url' => 'wellness',
				'url_imagen' => 'wellness.jpg',
				'estatus' => 'activo',
			),
		);
		
		//$resultado = $this->categorias_model->insert_matriz_categorias($data); 
		redirect("categorias");
	}
}
