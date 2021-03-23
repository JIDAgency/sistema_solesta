<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Locales extends MY_Controller {

	public function __construct()
    {
		parent::__construct();
		$this->load->model("categorias_model");
		$this->load->model("locales_model");
		$this->load->model("locales_imagenes_model");
		$this->load->model("relacion_locales_categorias_model");
    }

	public function index()
	{
		$data['pagina_menu_inicio'] = true;
		$data['pagina_titulo'] = 'Locales';

		//revisar
		$data['controlador'] = 'backoffice/locales';
		$data['regresar_a'] = 'inicio';
		$controlador_js = "backoffice/locales/index";

		$data['mensaje_exito'] = $this->session->flashdata('MENSAJE_EXITO');
        $data['mensaje_info'] = $this->session->flashdata('MENSAJE_INFO');
		$data['mensaje_error'] = $this->session->flashdata('MENSAJE_ERROR');
		
		$data['styles'] = array(
			array('es_rel' => false, 'href' => base_url() . 'app-assets/vendors/css/tables/datatable/datatables.min.css'),
		);
		$data['scripts'] = array(
			array('es_rel' => false, 'src' => base_url() . 'app-assets/vendors/js/tables/datatable/datatables.min.js'),
			array('es_rel' => true, 'src' => ''.$controlador_js.'.js'),
		);

		$locales_list = $this->locales_model->get_locales()->result();
		
		$data['locales_list'] = $locales_list;

		$this->construir_private_ui('backoffice/locales/index' ,$data);
	}

	public function editar($local_url = null)
	{
		if ($this->input->post()) {
			$local_url = $this->input->post('local_url');
		}

		$data['pagina_menu_inicio'] = true;
		$data['pagina_titulo'] = 'Editar local';

		//revisar
		$data['controlador'] = 'backoffice/locales/editar/'.$local_url;
		$data['regresar_a'] = 'backoffice/locales';
		$controlador_js = "backoffice/locales/editar";

		$data['mensaje_exito'] = $this->session->flashdata('MENSAJE_EXITO');
        $data['mensaje_info'] = $this->session->flashdata('MENSAJE_INFO');
		$data['mensaje_error'] = $this->session->flashdata('MENSAJE_ERROR');
		
		$data['styles'] = array(
		);
		$data['scripts'] = array(
			array('es_rel' => true, 'src' => ''.$controlador_js.'.js'),
		);

		$this->form_validation->set_rules('nombre', 'Nombre del local', 'trim|required|min_length[1]|max_length[150]');
		$this->form_validation->set_rules('planta', 'Planta', 'trim|required|min_length[1]|max_length[150]');
		$this->form_validation->set_rules('numero_local', 'Número de local', 'trim|required|min_length[1]|max_length[150]');
		$this->form_validation->set_rules('descripcion', 'Descripción', 'trim|required|min_length[1]|max_length[150]');
		$this->form_validation->set_rules('telefono_1', 'Teléfono del local', 'trim|required|min_length[1]|max_length[150]');
		$this->form_validation->set_rules('telefono_2', 'Teléfono del local 2', 'trim|required|min_length[1]|max_length[150]');
		$this->form_validation->set_rules('whatsapp', 'Whatsapp', 'trim|required|min_length[1]|max_length[150]');
		$this->form_validation->set_rules('telefono_atencion_clientes', 'Teléfono de atención a clientes', 'trim|required|min_length[1]|max_length[150]');
		$this->form_validation->set_rules('correo_electronico', 'Correo electrónico de contacto', 'trim|required|min_length[1]|max_length[150]');
		$this->form_validation->set_rules('ubicacion', 'Ubicación', 'trim|required|min_length[1]|max_length[150]');
		$this->form_validation->set_rules('url_ubicacion', 'Ubicación de Google Maps', 'trim|required|min_length[1]|max_length[150]');
		$this->form_validation->set_rules('url_pagina', 'Página Web', 'trim|required|min_length[1]|max_length[150]');
		$this->form_validation->set_rules('url_facebook', 'Página de Facebook', 'trim|required|min_length[1]|max_length[150]');
		$this->form_validation->set_rules('url_instagram', 'Página de Instagram', 'trim|required|min_length[1]|max_length[150]');
		$this->form_validation->set_rules('url_twitter', 'Página de Twitter', 'trim|required|min_length[1]|max_length[150]');
		$this->form_validation->set_rules('url', 'Carpeta de imágenes', 'trim|required|min_length[1]|max_length[150]');
		$this->form_validation->set_rules('estatus', 'Estatus', 'trim|required|min_length[1]|max_length[150]');

		$local_row = $this->locales_model->get_local_por_url($local_url)->row();

		$data['local_row'] = $local_row;

		if ($this->form_validation->run() == false) {
			$this->construir_private_ui('backoffice/locales/editar' ,$data);
        } else {

			if ($this->input->post()) {
				$nombre = $this->input->post('nombre');
				$planta = $this->input->post('planta');
				$numero_local = $this->input->post('numero_local');
				$descripcion = $this->input->post('descripcion');
				$telefono_1 = $this->input->post('telefono_1');
				$telefono_2 = $this->input->post('telefono_2');
				$whatsapp = $this->input->post('whatsapp');
				$telefono_atencion_clientes = $this->input->post('telefono_atencion_clientes');
				$correo_electronico = $this->input->post('correo_electronico');
				$ubicacion = $this->input->post('ubicacion');
				$url_ubicacion = $this->input->post('url_ubicacion');
				$url_pagina = $this->input->post('url_pagina');
				$url_facebook = $this->input->post('url_facebook');
				$url_instagram = $this->input->post('url_instagram');
				$url_twitter = $this->input->post('url_twitter');
				$url = $this->input->post('url');
				$estatus = $this->input->post('estatus');
            }

			$data_local = array(
                'nombre' => $nombre,
				'planta' =>$planta,
				'numero_local' =>$numero_local,
				'descripcion' =>$descripcion,
				'telefono_1' =>$telefono_1,
				'telefono_2' =>$telefono_2,
				'whatsapp' =>$whatsapp,
				'telefono_atencion_clientes' =>$telefono_atencion_clientes,
				'correo_electronico' =>$correo_electronico,
				'ubicacion' =>$ubicacion,
				'url_ubicacion' =>$url_ubicacion,
				'url_pagina' =>$url_pagina,
				'url_facebook' =>$url_facebook,
				'url_instagram' =>$url_instagram,
				'url_twitter' =>$url_twitter,
				'url' =>$url,
				'estatus' =>$estatus,
            );

			if ($data_local) {
                
                if ($this->locales_model->update_local_por_url($url, $data_local)) {
                    $this->session->set_flashdata('MENSAJE_EXITO', 'Se ha actualizado la información del local '.$nombre.' correctamente.');
                    redirect(site_url($data['regresar_a']));
                } else {
                    $mensaje_sistema_tipo = "MENSAJE_ERROR";
                    $mensaje_sistema = "¡Oops! Al parecer ha ocurrido un error, por favor intentelo más tarde. (2)";
                }

            } else {
                $mensaje_sistema_tipo = "MENSAJE_ERROR";
                $mensaje_sistema = "¡Oops! Al parecer ha ocurrido un error, por favor intentelo más tarde. (1)";
            }

			$this->session->set_flashdata(''.$mensaje_sistema_tipo.'', ''.$mensaje_sistema.'');
			redirect(site_url($data['controlador']));

			$this->construir_private_ui('backoffice/locales/editar' ,$data);
		}
	}
}
