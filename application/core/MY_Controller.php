<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }
    
    protected function construir_public_ui($contenido, $data = null)
    {
		$this->load->view('_layout/public/header', $data);
        $this->load->view($contenido, $data);
        $this->load->view('_layout/public/footer', $data);
    }

    protected function construir_private_ui($contenido, $data = null)
    {
		$this->load->view('_layout/private/header', $data);
        $this->load->view($contenido, $data);
        $this->load->view('_layout/private/footer', $data);
    }
}
