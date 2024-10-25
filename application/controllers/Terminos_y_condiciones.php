<?php defined('BASEPATH') or exit('No direct script access allowed');

class Terminos_y_condiciones extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['nav_terminos_y_condiciones'] = true;
        $data['pagina_titulo'] = 'Términos y condiciones del servicio';

        $data['controlador'] = 'terminos_y_condiciones';
        $data['regresar_a'] = 'inicio';
        // $controlador_js = "terminos_y_condiciones/index";

        $data['styles'] = array();
        $data['scripts'] = array(
            // array('es_rel' => true, 'src' => '' . $controlador_js . '.js'),
        );

        $this->construir_public_ui('terminos_y_condiciones/index', $data);
    }
}
