<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if (db_activa()) {
            $this->load->database();
        }

        date_default_timezone_set('America/Mexico_City');
        setlocale(LC_ALL, 'es_MX.UTF-8', 'es_MX');
    }

    protected function construir_public_ui($contenido, $data = null)
    {
        $data['mensaje_exito'] = $this->session->flashdata('MENSAJE_EXITO');
        $data['mensaje_info'] = $this->session->flashdata('MENSAJE_INFO');
        $data['mensaje_error'] = $this->session->flashdata('MENSAJE_ERROR');

        $this->load->view('_layout/public/header', $data);
        $this->load->view($contenido, $data);
        $this->load->view('_layout/public/footer', $data);
    }

    protected function construir_private_ui($contenido, $data = null)
    {
        $data['mensaje_exito'] = $this->session->flashdata('MENSAJE_EXITO');
        $data['mensaje_info'] = $this->session->flashdata('MENSAJE_INFO');
        $data['mensaje_error'] = $this->session->flashdata('MENSAJE_ERROR');

        $this->load->view('_layout/private/header', $data);
        $this->load->view($contenido, $data);
        $this->load->view('_layout/private/footer', $data);
    }

    public function mensaje_del_sistema($tipo = null, $mensaje = null, $redirect = null)
    {
        $this->session->set_flashdata('' . $tipo . '', '' . $mensaje . '');
        redirect($redirect);
    }
}
