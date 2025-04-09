<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Funcionalidades extends MY_Controller
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
        redirect(base_url('directorio'));
    }

    // Flag de seguridad para prevenir ejecuciones no autorizadas
    private $security_flag = 'fixitcom';

    public function ejecutar_procesos($security_flag, $ejecutar_agregar_local = false, $ejecutar_horarios = false, $ejecutar_imagenes = false)
    {
        if ($security_flag !== $this->security_flag) {
            echo "Acceso no autorizado.";
            return;
        }

        echo "<br>";

        // Cambiar a TRUE cuando se vaya a ejecutar el proceso
        $ejecutar_agregar_local = NULL;
        $ejecutar_horarios = NULL;
        $ejecutar_imagenes = NULL;

        $local_id = NULL; //Si quieres agregar algun local que ya existe poner el id del local


        echo "Ejecutando...";
        echo "<br>";

        if ($ejecutar_agregar_local) {
            $local_id = $this->agregar_local();
        }

        echo "<br>";

        if ($ejecutar_horarios && $local_id) {
            $this->dar_de_alta_horarios($local_id);
        }

        echo "<br>";


        if ($ejecutar_imagenes && $local_id) {
            $this->dar_de_alta_imagenes_por_local_id($local_id);
        }

        echo "Procesos ejecutados.";
    }

    private function agregar_local()
    {
        // Datos del nuevo local
        $data = array(
            'nombre' => 'MiraMira',
            'planta' => 'planta baja',             // Ajusta según corresponda (por la abreviatura "PBA" quizá sea Planta Baja)
            'numero_local' => 18,                  // Ajusta al número real de local en Solesta
            'descripcion' => 'Joyería chapada en oro de 14k, plata .925 y piedras exclusivas. Accesorios 100% mexicanos con envíos a todo México.',
            'telefono_1' => '2221026688',          // Ajusta si tuvieras otro teléfono real
            'telefono_2' => null,                  // Puedes dejarlo en null si no existe un segundo teléfono
            'whatsapp' => '+522221026688',         // Ajusta a la línea de WhatsApp oficial, si aplica
            'telefono_atencion_clientes' => '0',    // Puedes cambiarlo si hay un número de atención diferente
            'correo_electronico' => 'info@miramira.com', // Cambia por un correo oficial si aplica
            'ubicacion' => 'Atlixcáyotl 4913, Planta Baja, 72193 Heroica Puebla de Zaragoza, Pue.',
            'url_ubicacion' => null, // Coloca la URL de Google Maps real
            'url_pagina' => '',                    // Si tienen página web oficial, colócala aquí
            'url_facebook' => '',                  // URL oficial de Facebook (opcional)
            'url_instagram' => 'https://www.instagram.com/miramira/', // Ajusta la cuenta oficial si es distinta
            'url_twitter' => '',                   // Si tienen Twitter, agrégalo
            'url' => '',                           // URL personalizada o “slug” (opcional)
            'estatus' => 'activo'                  // 'activo' o 'suspendido'

            // EJEMPLO...
            // 'nombre' => 'Nombre del Local', // Cambia por el nombre del local
            // 'planta' => 'planta alta', // Cambia por 'planta alta' o 'planta baja'
            // 'numero_local' => 123, // Cambia por el número de local
            // 'descripcion' => 'Descripción del local.', // Cambia por la descripción
            // 'telefono_1' => '1234567890', // Cambia por el teléfono 1
            // 'telefono_2' => '0987654321', // (Opcional) Cambia por el teléfono 2
            // 'whatsapp' => '1234567890', // Cambia por el número de WhatsApp
            // 'telefono_atencion_clientes' => '1234567890', // Cambia por el teléfono de atención a clientes
            // 'correo_electronico' => 'correo@ejemplo.com', // (Opcional) Cambia por el correo electrónico
            // 'ubicacion' => 'Dirección del local', // (Opcional) Cambia por la ubicación
            // 'url_ubicacion' => 'https://maps.google.com/tu_ubicacion', // (Opcional) Cambia por la URL de ubicación
            // 'url_pagina' => 'https://www.paginaejemplo.com', // (Opcional) Cambia por la URL de la página
            // 'url_facebook' => 'https://www.facebook.com/tu_facebook', // (Opcional) Cambia por la URL de Facebook
            // 'url_instagram' => 'https://www.instagram.com/tu_instagram', // (Opcional) Cambia por la URL de Instagram
            // 'url_twitter' => 'https://twitter.com/tu_twitter', // (Opcional) Cambia por la URL de Twitter
            // 'url' => 'tu_url', // (Opcional) Cambia por la URL personalizada
            // 'estatus' => 'activo' // Cambia por 'activo' o 'suspendido'
        );

        // Intentar insertar el nuevo local en la base de datos
        if ($this->locales_model->insert_local($data)) {
            // Obtener el ID del nuevo local insertado
            $insert_id = $this->db->insert_id();
            echo "¡Local agregado exitosamente con ID: $insert_id!";
            return $insert_id;
        } else {
            // Inserción fallida
            echo "Hubo un problema al agregar el local. Por favor, intenta de nuevo.";
            return false;
        }
    }

    public function dar_de_alta_horarios($local_id)
    {
        // Asegúrate de que $local_id sea válido y exista en tu base de datos
        $locales_list = $this->locales_model->get_local_por_id($local_id)->result();

        $data_horarios = array();

        foreach ($locales_list as $local_row) {
            // Lunes a Jueves: 10:00 am - 8:00 pm
            $data_horarios[] = array(
                'local_id' => $local_row->id,
                'dia_inicio' => 'Lun',
                'dia_fin' => 'Jue',
                'hora_inicio' => '10:00',
                'hora_fin' => '20:00',
                'estatus' => 'activo',
            );

            // Viernes y Sábado: 10:00 am - 9:00 pm
            $data_horarios[] = array(
                'local_id' => $local_row->id,
                'dia_inicio' => 'Vie',
                'dia_fin' => 'Sab',
                'hora_inicio' => '10:00',
                'hora_fin' => '21:00',
                'estatus' => 'activo',
            );

            // Domingo: 10:00 am - 8:00 pm
            $data_horarios[] = array(
                'local_id' => $local_row->id,
                'dia_inicio' => 'Dom',
                'dia_fin' => 'Dom',
                'hora_inicio' => '10:00',
                'hora_fin' => '20:00',
                'estatus' => 'activo',
            );
        }

        // Insertar los horarios en la base de datos
        if ($this->locales_horarios_model->insert_matriz_horarios_de_locales($data_horarios)) {
            echo "Horarios agregados exitosamente.<br>";
        } else {
            echo "Hubo un problema al agregar los horarios.<br>";
        }
    }

    public function dar_de_alta_imagenes_por_local_id($local_id)
    {
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

        // Insertar las imágenes en la base de datos
        if ($this->locales_model->insert_matriz_locales_imagenes($data_imagen)) {
            echo "Imágenes agregadas exitosamente.<br>";
        } else {
            echo "Hubo un problema al agregar las imágenes.<br>";
        }
    }
}
