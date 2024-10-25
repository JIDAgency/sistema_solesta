<?php defined('BASEPATH') or exit('No direct script access allowed');

class Aviso_privacidad extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['nav_aviso_privacidad'] = true;
        $data['pagina_titulo'] = 'Aviso de privacidad';

        $data['controlador'] = 'aviso_privacidad';
        $data['regresar_a'] = 'inicio';
        // $controlador_js = "aviso_privacidad/index";

        $data['styles'] = array();
        $data['scripts'] = array(
            // array('es_rel' => true, 'src' => '' . $controlador_js . '.js'),
        );

        $this->construir_public_ui('aviso_privacidad/index', $data);
    }
}
