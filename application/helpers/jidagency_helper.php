<?php
defined('BASEPATH') or exit('No direct script access allowed');
if (!function_exists('es_superadministrador')) {

    if (!function_exists('titulo')) {
    
        function titulo()
        {
            return get_instance()->config->item('sistema_nombre');
        }

    }

    if (!function_exists('base_url_categorias')) {
    
        function base_url_categorias()
        {
            return base_url().get_instance()->config->item('base_url_categorias');
        }

    }
}
