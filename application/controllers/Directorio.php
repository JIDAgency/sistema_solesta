<?php defined('BASEPATH') or exit('No direct script access allowed');

class Directorio extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("categorias_model");
		$this->load->model("locales_model");
		$this->load->helper(['url', 'text']);
	}

	public function index()
	{
		$categoria_slug = $this->input->get('categoria');
		$letra = $this->input->get('letra');

		// Variables de configuración
		$data['nav_directorio'] = true;
		$data['pagina_titulo'] = 'Directorio';

		$data['controlador'] = 'index';
		$data['regresar_a'] = 'directorio';
		$controlador_js = "directorio/index";

		// Incluir estilos y scripts
		$data['styles'] = array(
			array('es_rel' => true, 'href' => 'directorio/index.css'),
		);

		$data['scripts'] = array(
			array('es_rel' => true, 'src' => '' . $controlador_js . '.js'),
		);

		// Obtener listas de categorías y locales desde los modelos
		$categorias_list = $this->categorias_model->get_lista_de_categorias_activas()->result();
		$locales_list = $this->locales_model->get_locales_con_detalles_ordenados_por_categoria()->result();

		// Generar slugs para las categorías y asignar a cada local
		foreach ($categorias_list as &$categoria) {
			$categoria->slug = url_title(convert_accented_characters($categoria->nombre), '-', TRUE);
		}
		unset($categoria);

		foreach ($locales_list as &$local) {
			// Asignar slug de categoría al local
			$categoria_nombre = $local->categorias_nombre ?? '';
			$local->categoria_slug = url_title(convert_accented_characters($categoria_nombre), '-', TRUE);
		}
		unset($local);

		// Agrupar locales por letra inicial
		$locales_por_letra = [];
		foreach ($locales_list as $local_row) {
			$nombre_sin_acento = convert_accented_characters($local_row->nombre);
			$letra_inicial = strtoupper(mb_substr($nombre_sin_acento, 0, 1, 'UTF-8'));
			if (!isset($locales_por_letra[$letra_inicial])) {
				$locales_por_letra[$letra_inicial] = [];
			}
			$locales_por_letra[$letra_inicial][] = $local_row;
		}

		// Ordenar las letras
		ksort($locales_por_letra, SORT_STRING);

		// Ordenar locales dentro de cada letra
		foreach ($locales_por_letra as &$locales) {
			usort($locales, function ($a, $b) {
				return strcmp($a->nombre, $b->nombre);
			});
		}
		unset($locales);

		// Obtener las letras que tienen locales
		$letras_con_locales = array_keys($locales_por_letra);

		// Asignar datos para pasar a la vista
		$data['categorias_list'] = $categorias_list;
		$data['locales_por_letra'] = $locales_por_letra;
		$data['letras_con_locales'] = $letras_con_locales;

		// **Agregar estas líneas para pasar los parámetros a la vista**
		$data['categoria_slug'] = $categoria_slug;
		$data['letra'] = $letra;

		$switch = true;
		$data['switch'] = $switch;

		$colores = ['#FF9687', '#967FA7', '#A6D7DE', '#EDD98B', '#91AFDC', '#69A399'];
		$color_index = 0;
		$data['colores'] = $colores;
		$data['color_index'] = $color_index;

		// Cargar la vista
		$this->construir_public_ui('directorio/index', $data);
	}
}
