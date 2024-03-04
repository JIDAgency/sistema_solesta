<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Locales extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("categorias_model");
		$this->load->model("etiquetas_model");
		$this->load->model("locales_model");
		$this->load->model("locales_imagenes_model");
		$this->load->model("relacion_locales_categorias_model");
		$this->load->model("locales_horarios_model");
	}


	public function index()
	{
		$data['pagina_menu_inicio'] = true;
		$data['pagina_titulo'] = 'Locales';

		//revisar
		$data['controlador'] = 'locales/locales';
		$data['regresar_a'] = 'inicio';
		$controlador_js = "locales/index";

		$data['mensaje_exito'] = $this->session->flashdata('MENSAJE_EXITO');
		$data['mensaje_info'] = $this->session->flashdata('MENSAJE_INFO');
		$data['mensaje_error'] = $this->session->flashdata('MENSAJE_ERROR');

		$data['styles'] = array();
		$data['scripts'] = array(
			array('es_rel' => true, 'src' => '' . $controlador_js . '.js'),
		);

		$categorias_list = $this->categorias_model->get_lista_de_categorias_activas()->result();
		$locales_list = $this->locales_model->get_locales_con_detalles_ordenados_por_categoria()->result();
		$switch = true;

		$data['categorias_list'] = $categorias_list;
		$data['locales_list'] = $locales_list;
		$data['switch'] = $switch;

		$this->construir_public_ui('locales/index', $data);
	}

	public function disponibles()
	{
		$data['pagina_menu_inicio'] = true;
		$data['pagina_titulo'] = 'Locales Disponibles';

		//revisar
		$data['controlador'] = 'locales/disponibles';
		$data['regresar_a'] = 'inicio';
		$controlador_js = "locales/disponibles";

		$data['mensaje_exito'] = $this->session->flashdata('MENSAJE_EXITO');
		$data['mensaje_info'] = $this->session->flashdata('MENSAJE_INFO');
		$data['mensaje_error'] = $this->session->flashdata('MENSAJE_ERROR');

		$data['styles'] = array();
		$data['scripts'] = array(
			array('es_rel' => true, 'src' => '' . $controlador_js . '.js'),
		);


		$this->construir_public_ui('locales/disponibles', $data);
	}

	public function ver($local = null)
	{
		if ($this->input->post()) {
			$local = $this->input->post('local');
		}

		$local_row = $this->locales_model->get_local_por_url($local)->row();

		$data['pagina_menu_inicio'] = true;
		$data['pagina_titulo'] = ucfirst(mb_strtolower($local_row->nombre));

		$data['controlador'] = 'locales/ver/' . $local . '';
		$data['regresar_a'] = 'locales';
		$controlador_js = "locales/ver";

		$data['mensaje_exito'] = $this->session->flashdata('MENSAJE_EXITO');
		$data['mensaje_info'] = $this->session->flashdata('MENSAJE_INFO');
		$data['mensaje_error'] = $this->session->flashdata('MENSAJE_ERROR');

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
			array('es_rel' => true, 'src' => '' . $controlador_js . '.js'),
		);

		if (!$local_row) {
			$this->session->set_flashdata('MENSAJE_ERROR', '¡Oops! Al parecer ha ocurrido un error, por favor intentelo más tarde. (1)');
			redirect($data['regresar_a']);
		}

		if ($local_row->estatus == "suspendido") {
			$this->session->set_flashdata('MENSAJE_INFO', 'Lo sentimos. A no ser que tengas una máquina del tiempo, ese contenido no está disponible.');
			redirect($data['regresar_a']);
		}

		$categorias_list = $this->categorias_model->get_categorias_por_local($local_row->id)->result();
		$imagen_banner_principal = $this->locales_imagenes_model->get_banner_principal_por_local_id($local_row->id)->row();
		$imagen_banner_principal_movil = $this->locales_imagenes_model->get_banner_principal_movil_por_local_id($local_row->id)->row();
		$imagen_logotipo = $this->locales_imagenes_model->get_logotipo_por_local_id($local_row->id)->row();
		$imagenes_galeria_list = $this->locales_imagenes_model->get_galeria_por_local_id($local_row->id)->result();
		$imagen_pickup = $this->locales_imagenes_model->get_pickup_por_local_id($local_row->id)->row();
		$imagenes_promociones_list = $this->locales_imagenes_model->get_promociones_por_local_id($local_row->id)->result();
		$imagenes_eventos_list = $this->locales_imagenes_model->get_eventos_por_local_id($local_row->id)->result();
		$etiquetas_list = $this->etiquetas_model->get_etiqueta_por_local_id($local_row->id)->result();
		$horarios_list = $this->locales_horarios_model->get_horario_de_local_por_local_id($local_row->id)->result();

		$data['local_row'] = $local_row;
		$data['categorias_list'] = $categorias_list;
		$data['imagen_banner_principal'] = $imagen_banner_principal;
		$data['imagen_banner_principal_movil'] = $imagen_banner_principal_movil;
		$data['imagen_logotipo'] = $imagen_logotipo;
		$data['imagenes_galeria_list'] = $imagenes_galeria_list;
		$data['imagen_pickup'] = $imagen_pickup;
		$data['imagenes_promociones_list'] = $imagenes_promociones_list;
		$data['imagenes_eventos_list'] = $imagenes_eventos_list;
		$data['etiquetas_list'] = $etiquetas_list;
		$data['horarios_list'] = $horarios_list;

		$this->construir_public_ui('locales/ver', $data);
	}

	public function todos()
	{
		$data['pagina_menu_inicio'] = true;
		$data['pagina_titulo'] = 'Locales';

		//revisar
		$data['controlador'] = 'locales/locales/todos';
		$data['regresar_a'] = 'inicio';
		$controlador_js = "locales/index";

		$data['mensaje_exito'] = $this->session->flashdata('MENSAJE_EXITO');
		$data['mensaje_info'] = $this->session->flashdata('MENSAJE_INFO');
		$data['mensaje_error'] = $this->session->flashdata('MENSAJE_ERROR');

		$data['styles'] = array();
		$data['scripts'] = array(
			array('es_rel' => true, 'src' => '' . $controlador_js . '.js'),
		);

		$categorias_list = $this->categorias_model->get_lista_de_categorias_activas()->result();
		$locales_list = $this->locales_model->get_locales_con_detalles_ordenados_por_nombre()->result();
		$switch = true;

		$data['categorias_list'] = $categorias_list;
		$data['locales_list'] = $locales_list;
		$data['switch'] = $switch;

		$this->construir_public_ui('locales/todos', $data);
	}

	public function resultados()
	{
		if ($this->input->post()) {
			$resultados_buscador = $this->input->post('resultados_buscador');
		}

		$data['pagina_menu_inicio'] = true;
		$data['pagina_titulo'] = 'Resultados';

		$data['controlador'] = 'locales/resultados';
		$data['regresar_a'] = 'inicio';
		$controlador_js = "locales/resultados";

		$data['mensaje_exito'] = $this->session->flashdata('MENSAJE_EXITO');
		$data['mensaje_info'] = $this->session->flashdata('MENSAJE_INFO');
		$data['mensaje_error'] = $this->session->flashdata('MENSAJE_ERROR');

		$data['styles'] = array();
		$data['scripts'] = array(
			array('es_rel' => true, 'src' => '' . $controlador_js . '.js'),
		);

		$this->construir_public_ui('locales/resultados', $data);
	}

	public function buscar($busqueda = null)
	{
		$categoria = null;

		$data = $this->locales_model->buscador_locales($busqueda, $categoria)->result();

		/*if ($locales_list->num_rows() > 0) {
			foreach($locales_list->result() as $local_row)
			{
				$output .= '
					<a href="'.site_url('/locales/ver/'.$local_row->url).'" class="list-group-item list-group-item-action">'.$local_row->nombre.'</a>

					<div class="col-md-3 col-6">
						<a href="'.site_url("locales/ver/".$local_row->url).'" itemprop="" data-size="480x360">
							<div class="card">
								<div class="card-content">
									<img class="img-fluid rounded" src="'.base_url_locales().$local_row->url.'/logotipo.jpg" itemprop="" alt="Imagen de '.strtolower($local_row->nombre).'" />
								</div>
							</div>
						</a>
					</div>
				';
			}
		} else {
			$output .= '
				No se ha encontrado ningún resultado...
			';
		}*/

		echo json_encode($data);

		//$output .= '</table>';

		//echo $output;
	}

	public function dar_de_alta_horarios()
	{
		$local_id = 128;

		$locales_list = $this->locales_model->get_local_por_id($local_id)->result();

		$cont = 1;
		$data_horarios = array();

		foreach ($locales_list as $local_row) {

			/** Horario de restaurantes */
			/*
			$data_horarios[] = array(
                'local_id' => $local_row->id,
                'dia_inicio' => "Lun",
                'dia_fin' => "Jue",
                'hora_inicio' => "13:00",
                'hora_fin' => "21:00",
				'estatus' => "activo",
            );
			*/
			/** Horario de restaurantes */
			/*
			$data_horarios[] = array(
                'local_id' => $local_row->id,
                'dia_inicio' => "Vie",
                'dia_fin' => "Dom",
                'hora_inicio' => "13:00",
                'hora_fin' => "22:00",
				'estatus' => "activo",
            );
			*/
			/** Horario de tiendas */
			$data_horarios[] = array(
				'local_id' => $local_row->id,
				'dia_inicio' => "Lun",
				'dia_fin' => "Jue",
				'hora_inicio' => "11:00",
				'hora_fin' => "20:00",
				'estatus' => "activo",
			);
			/** Horario de tiendas */
			$data_horarios[] = array(
				'local_id' => $local_row->id,
				'dia_inicio' => "Vie",
				'dia_fin' => "Sab",
				'hora_inicio' => "11:00",
				'hora_fin' => "21:00",
				'estatus' => "activo",
			);
			/** Horario de tiendas */
			$data_horarios[] = array(
				'local_id' => $local_row->id,
				'dia_inicio' => "Dom",
				'dia_fin' => "Dom",
				'hora_inicio' => "11:00",
				'hora_fin' => "20:00",
				'estatus' => "activo",
			);

			echo $cont;
			echo " ";
			echo $local_row->nombre;
			echo "<br>";

			$cont++;
		}
		echo "<br>";
		print_r($data_horarios);

		//$this->locales_horarios_model->insert_matriz_horarios_de_locales($data_horarios);
	}

	public function dar_de_alta_imagenes_por_local_id()
	{
		$local_id = 128;

		$local_row = $this->locales_model->get_local_por_id($local_id)->row();

		$data_imagen = array();

		/** Logotipo */
		$data_imagen[] = array(
			'local_id' => $local_row->id,
			'url' => 'logotipo.jpg',
			'alt' => ucwords(mb_strtolower(trim('Logotipo de ' . $local_row->nombre))),
			'tipo' => 'logotipo',
			'caduca' => 'no',
			'estatus' => 'activo',
		);

		/** Logotipo PNG */
		$data_imagen[] = array(
			'local_id' => $local_row->id,
			'url' => 'logotipo.png',
			'alt' => ucwords(mb_strtolower(trim('Logotipo de ' . $local_row->nombre))),
			'tipo' => 'logotipo_png',
			'caduca' => 'no',
			'estatus' => 'activo',
		);

		/** Banner principal */
		$data_imagen[] = array(
			'local_id' => $local_row->id,
			'url' => 'banner-principal.jpg',
			'alt' => ucwords(mb_strtolower(trim('Banner principal de ' . $local_row->nombre))),
			'tipo' => 'banner_principal',
			'caduca' => 'no',
			'estatus' => 'activo',
		);

		/** Banner principal movil */
		$data_imagen[] = array(
			'local_id' => $local_row->id,
			'url' => 'banner-principal-movil.jpg',
			'alt' => ucwords(mb_strtolower(trim('Banner principal de móvil de ' . $local_row->nombre))),
			'tipo' => 'banner_principal_movil',
			'caduca' => 'no',
			'estatus' => 'activo',
		);

		/** Galería 1 */
		$data_imagen[] = array(
			'local_id' => $local_row->id,
			'url' => 'galeria-1.jpg',
			'alt' => ucwords(mb_strtolower(trim('Galería 1 de ' . $local_row->nombre))),
			'tipo' => 'galeria',
			'caduca' => 'no',
			'estatus' => 'activo',
		);

		/** Galería 2 */
		$data_imagen[] = array(
			'local_id' => $local_row->id,
			'url' => 'galeria-2.jpg',
			'alt' => ucwords(mb_strtolower(trim('Galería 2 de ' . $local_row->nombre))),
			'tipo' => 'galeria',
			'caduca' => 'no',
			'estatus' => 'activo',
		);

		/** Galería 3 */
		$data_imagen[] = array(
			'local_id' => $local_row->id,
			'url' => 'galeria-3.jpg',
			'alt' => ucwords(mb_strtolower(trim('Galería 3 de ' . $local_row->nombre))),
			'tipo' => 'galeria',
			'caduca' => 'no',
			'estatus' => 'activo',
		);

		/** Galería 4 */
		$data_imagen[] = array(
			'local_id' => $local_row->id,
			'url' => 'galeria-4.jpg',
			'alt' => ucwords(mb_strtolower(trim('Galería 4 de ' . $local_row->nombre))),
			'tipo' => 'galeria',
			'caduca' => 'no',
			'estatus' => 'activo',
		);

		/** Galería 5 */
		$data_imagen[] = array(
			'local_id' => $local_row->id,
			'url' => 'galeria-5.jpg',
			'alt' => ucwords(mb_strtolower(trim('Galería 5 de ' . $local_row->nombre))),
			'tipo' => 'galeria',
			'caduca' => 'no',
			'estatus' => 'activo',
		);

		print_r($data_imagen);

		echo "<br>";
		echo "<br>";

		// if ($this->locales_model->insert_matriz_locales_imagenes($data_imagen)) {
		// 	echo "OK <br>";
		// } else {
		// 	echo "BAD <br>";
		// }
	}

	/** funciones de desarrollador */
	public function dar_de_alta_imagenes()
	{
		$locales_list = $this->locales_model->get_locales()->result();
		$data_imagen = array();

		foreach ($locales_list as $local_row) {
			echo $local_row->nombre;
			echo "<br>";
			echo "<br>";

			/** Logotipo */
			$data_imagen[] = array(
				'local_id' => $local_row->id,
				'url' => 'logotipo.jpg',
				'alt' => ucwords(mb_strtolower(trim('Logotipo de ' . $local_row->nombre))),
				'tipo' => 'logotipo',
				'caduca' => 'no',
				'estatus' => 'activo',
			);

			/** Logotipo PNG */
			$data_imagen[] = array(
				'local_id' => $local_row->id,
				'url' => 'logotipo.png',
				'alt' => ucwords(mb_strtolower(trim('Logotipo de ' . $local_row->nombre))),
				'tipo' => 'logotipo_png',
				'caduca' => 'no',
				'estatus' => 'activo',
			);

			/** Banner principal */
			$data_imagen[] = array(
				'local_id' => $local_row->id,
				'url' => 'banner-principal.jpg',
				'alt' => ucwords(mb_strtolower(trim('Banner principal de ' . $local_row->nombre))),
				'tipo' => 'banner_principal',
				'caduca' => 'no',
				'estatus' => 'activo',
			);

			/** Banner principal movil */
			$data_imagen[] = array(
				'local_id' => $local_row->id,
				'url' => 'banner-principal-movil.jpg',
				'alt' => ucwords(mb_strtolower(trim('Banner principal de móvil de ' . $local_row->nombre))),
				'tipo' => 'banner_principal_movil',
				'caduca' => 'no',
				'estatus' => 'activo',
			);

			/** Galería 1 */
			$data_imagen[] = array(
				'local_id' => $local_row->id,
				'url' => 'galeria-1.jpg',
				'alt' => ucwords(mb_strtolower(trim('Galería 1 de ' . $local_row->nombre))),
				'tipo' => 'galeria',
				'caduca' => 'no',
				'estatus' => 'activo',
			);

			/** Galería 2 */
			$data_imagen[] = array(
				'local_id' => $local_row->id,
				'url' => 'galeria-2.jpg',
				'alt' => ucwords(mb_strtolower(trim('Galería 2 de ' . $local_row->nombre))),
				'tipo' => 'galeria',
				'caduca' => 'no',
				'estatus' => 'activo',
			);

			/** Galería 3 */
			$data_imagen[] = array(
				'local_id' => $local_row->id,
				'url' => 'galeria-3.jpg',
				'alt' => ucwords(mb_strtolower(trim('Galería 3 de ' . $local_row->nombre))),
				'tipo' => 'galeria',
				'caduca' => 'no',
				'estatus' => 'activo',
			);

			/** Galería 4 */
			$data_imagen[] = array(
				'local_id' => $local_row->id,
				'url' => 'galeria-4.jpg',
				'alt' => ucwords(mb_strtolower(trim('Galería 4 de ' . $local_row->nombre))),
				'tipo' => 'galeria',
				'caduca' => 'no',
				'estatus' => 'activo',
			);

			/** Galería 5 */
			$data_imagen[] = array(
				'local_id' => $local_row->id,
				'url' => 'galeria-5.jpg',
				'alt' => ucwords(mb_strtolower(trim('Galería 5 de ' . $local_row->nombre))),
				'tipo' => 'galeria',
				'caduca' => 'no',
				'estatus' => 'suspendido',
			);

			/** Promoción 1 */
			$data_imagen[] = array(
				'local_id' => $local_row->id,
				'url' => 'promocion-1.jpg',
				'alt' => ucwords(mb_strtolower(trim('Promoción 1 de ' . $local_row->nombre))),
				'tipo' => 'promocion',
				'caduca' => 'no',
				'estatus' => 'activo',
			);

			/** Evento 1 */
			$data_imagen[] = array(
				'local_id' => $local_row->id,
				'url' => 'evento-1.jpg',
				'alt' => ucwords(mb_strtolower(trim('Evento 1 de ' . $local_row->nombre))),
				'tipo' => 'evento',
				'caduca' => 'no',
				'estatus' => 'activo',
			);

			/** Evento 1 */
			$data_imagen[] = array(
				'local_id' => $local_row->id,
				'url' => 'pick-up-1.jpg',
				'alt' => ucwords(mb_strtolower(trim('Pick Up de ' . $local_row->nombre))),
				'tipo' => 'pickup',
				'caduca' => 'no',
				'estatus' => 'activo',
			);
		}

		echo "<br>";
		echo "<br>";

		print_r($data_imagen);

		echo "<br>";
		echo "<br>";

		/*if ($this->locales_model->insert_matriz_locales_imagenes($data_imagen)) {
			echo "OK <br>";
		} else {
			echo "BAD <br>";
		}*/
	}

	public function dar_de_alta_pick_ups()
	{
		/*
		$locales_list = $this->locales_model->get_locales()->result();
		$data_imagen = array();

		foreach ($locales_list as $local_row) {
			echo $local_row->nombre;
			echo "<br>";
			echo "<br>";
			echo $local_row->id;
			echo "<br>";
			echo 'pick-up-1.jpg';
			echo "<br>";
			echo ucwords(mb_strtolower(trim('Pick Up de '.$local_row->nombre)));
			echo "<br>";
			echo 'pickup';
			echo "<br>";
			echo 'no';
			echo "<br>";
			echo 'activo';
			echo "<br>";
			echo "<br>";
			echo "<br>";

			$data_imagen[] = array(
				'local_id' => $local_row->id,
				'url' => 'pick-up-1.jpg',
				'alt' => ucwords(mb_strtolower(trim('Pick Up de '.$local_row->nombre))),
				'tipo' => 'pickup',
				'caduca' => 'no',
				'estatus' => 'suspendido',
			);
		}

		print_r($data_imagen);
		echo "<br>";
		echo "<br>";

		if ($this->locales_model->insert_matriz_locales_imagenes($data_imagen)) {
			echo "OK <br>";
		} else {
			echo "BAD <br>";
		}
		*/
	}

	public function dar_de_alta_locales()
	{
		$data = array(
			// array(
			// 	'nombre' => NULL,
			// 	'planta' => 'panta baja',
			// 	'numero_local' => '0',
			// 	'descripcion' => NULL,
			// 	'telefono_1' => NULL,
			// 	'telefono_2' => NULL,
			// 	'whatsapp' => NULL,
			// 	'telefono_atencion_clientes' => NULL,
			// 	'correo_electronico' => NULL,
			// 	'ubicacion' => NULL,
			// 	'url_ubicacion' => NULL,
			// 	'url_pagina' => NULL,
			// 	'url_facebook' => NULL,
			// 	'url_instagram' => NULL,
			// 	'url_twitter' => NULL,
			// 	'url' => NULL,
			// 	'estatus' => 'activo',
			// ),
			array(
				'nombre' => 'MAESTRO OSO TACOS & BEER',
				'planta' => 'panta baja',
				'numero_local' => '0',
				'descripcion' => 'Restaurante con servicio de alimentos y bebidas y tacos',
				'telefono_1' => '2229843126',
				'telefono_2' => '2222257520',
				'whatsapp' => '2222257520',
				'telefono_atencion_clientes' => '2222257520',
				'correo_electronico' => 'elosotacos.beer@gmail.com',
				'ubicacion' => NULL,
				'url_ubicacion' => 'https://maps.app.goo.gl/q48TPbToX1omNWoN6',
				'url_pagina' => NULL,
				'url_facebook' => 'https://www.facebook.com/maestro.osopuebla',
				'url_instagram' => 'https://www.instagram.com/maestro.oso',
				'url_twitter' => NULL,
				'url' => 'maestro_oso',
				'estatus' => 'activo',
			),
			array(
				'nombre' => 'MILANO',
				'planta' => 'panta baja',
				'numero_local' => '6',
				'descripcion' => 'Centro de entrenamiento de replicas de aire.',
				'telefono_1' => '2216346242',
				'telefono_2' => '2223923405',
				'whatsapp' => '2216346242',
				'telefono_atencion_clientes' => '2216346242',
				'correo_electronico' => NULL,
				'ubicacion' => NULL,
				'url_ubicacion' => NULL,
				'url_pagina' => NULL,
				'url_facebook' => NULL,
				'url_instagram' => 'https://www.instagram.com/milanopuebla',
				'url_twitter' => NULL,
				'url' => 'milano',
				'estatus' => 'activo',
			),
			array(
				'nombre' => 'SINSOMBRERO',
				'planta' => 'panta alta',
				'numero_local' => '52',
				'descripcion' => 'Cocina de Autor',
				'telefono_1' => '2222253584',
				'telefono_2' => NULL,
				'whatsapp' => NULL,
				'telefono_atencion_clientes' => '2211167457',
				'correo_electronico' => 'contacto@gruposeratta.mx',
				'ubicacion' => NULL,
				'url_ubicacion' => 'https://maps.app.goo.gl/cWNbDZoC6gKDJaXM6',
				'url_pagina' => 'gruposeratta.mx',
				'url_facebook' => 'https://www.facebook.com/profile.php?id=100094527766738',
				'url_instagram' => 'https://www.instagram.com/sinsombrero.mx',
				'url_twitter' => NULL,
				'url' => 'sinsombrero',
				'estatus' => 'activo',
			),
			array(
				'nombre' => 'NORDAY',
				'planta' => 'panta baja',
				'numero_local' => '7',
				'descripcion' => 'Venta de Termos de acero, marca mexicana, se personalizan al momento.',
				'telefono_1' => '2211093778',
				'telefono_2' => '2211013396',
				'whatsapp' => '2211093778',
				'telefono_atencion_clientes' => '2211093778',
				'correo_electronico' => 'ventas@nordaypuebla.com',
				'ubicacion' => NULL,
				'url_ubicacion' => 'https://maps.app.goo.gl/YMcdSbfBHuUkhYL16',
				'url_pagina' => 'nordaypuebla.com',
				'url_facebook' => 'https://www.facebook.com/nordaypuebla',
				'url_instagram' => 'https://www.instagram.com/nordayshop_puebla',
				'url_twitter' => NULL,
				'url' => 'norday',
				'estatus' => 'activo',
			),
			array(
				'nombre' => 'VRACE',
				'planta' => 'panta baja',
				'numero_local' => '8',
				'descripcion' => 'Simuladores de Carreras F1 y Realidad Virtual',
				'telefono_1' => '2215753107',
				'telefono_2' => NULL,
				'whatsapp' => '2215753107',
				'telefono_atencion_clientes' => '2215753107',
				'correo_electronico' => 'vracemx@gmail.com',
				'ubicacion' => NULL,
				'url_ubicacion' => 'https://maps.app.goo.gl/zcpWCrrXGinS5N4F7',
				'url_pagina' => NULL,
				'url_facebook' => 'https://www.facebook.com/vracemx',
				'url_instagram' => 'https://www.instagram.com/vrace.mx',
				'url_twitter' => NULL,
				'url' => 'vrace',
				'estatus' => 'activo',
			),
		);

		print_r($data);
		echo "<br>";

		// $resultado = $this->locales_model->insert_matriz_locales($data);
		// print_r($resultado);

		// redirect("locales");
	}

	public function dar_de_alta_relaciones_locales_categorias()
	{
		$data = array(
			array(
				"local_id" => 124,
				"categoria_id" => 5,
				"estatus" => "activo",
			),
			array(
				"local_id" => 125,
				"categoria_id" => 2,
				"estatus" => "activo",
			),
			array(
				"local_id" => 126,
				"categoria_id" => 5,
				"estatus" => "activo",
			),
			array(
				"local_id" => 127,
				"categoria_id" => 7,
				"estatus" => "activo",
			),
			array(
				"local_id" => 128,
				"categoria_id" => 2,
				"estatus" => "activo",
			),
		);

		print_r($data);
		echo "<br>";

		// $resultado = $this->relacion_locales_categorias_model->insert_matriz_relacion_locales_categorias($data);
		// print_r($resultado);

		// redirect("locales");
	}
}
