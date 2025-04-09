<?php defined('BASEPATH') or exit('No direct script access allowed');

class Islas extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("locales_model");
        $this->load->helper(['url', 'text']);
    }

    public function index()
    {
        $data['nav_islas'] = true;
        $data['pagina_titulo'] = 'Islas';
        $data['pagina_subtitulo'] = 'Islas';
        $data['controlador'] = 'islas';
        $data['regresar_a'] = 'directorio';
        $controlador_js = "islas/index";

        $data['styles'] = array();

        $data['scripts'] = array(
            array('es_rel' => true, 'src' => '' . $controlador_js . '.js'),
        );

        $islas_list = $this->locales_model->obtener_islas()->result();

        $data['islas_list'] = $islas_list;

        $this->construir_public_ui('islas/index', $data);
    }
}
