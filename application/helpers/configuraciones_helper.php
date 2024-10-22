<?php defined('BASEPATH') or exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Funciones de Configuración del Sistema
|--------------------------------------------------------------------------
*/

/* Base de Datos */
if (!function_exists('db_activa')) {
    function db_activa()
    {
        return get_instance()->config->item('db_activa');
    }
}

/* Identificadores del Sistema */
if (!function_exists('sistema_id')) {
    function sistema_id()
    {
        return get_instance()->config->item('sistema_id');
    }
}

if (!function_exists('titulo')) {
    function titulo()
    {
        return get_instance()->config->item('titulo');
    }
}

if (!function_exists('nombre_comercial')) {
    function nombre_comercial()
    {
        return get_instance()->config->item('nombre_comercial');
    }
}

if (!function_exists('nombre_fiscal')) {
    function nombre_fiscal()
    {
        return get_instance()->config->item('nombre_fiscal');
    }
}

if (!function_exists('descripcion')) {
    function descripcion()
    {
        return get_instance()->config->item('descripcion');
    }
}

if (!function_exists('palabras_clave')) {
    function palabras_clave()
    {
        return get_instance()->config->item('palabras_clave');
    }
}

if (!function_exists('autor')) {
    function autor()
    {
        return get_instance()->config->item('autor');
    }
}

/*
|--------------------------------------------------------------------------
| Funciones de Redes Sociales
|--------------------------------------------------------------------------
*/

if (!function_exists('whatsapp')) {
    function whatsapp()
    {
        return get_instance()->config->item('whatsapp');
    }
}

if (!function_exists('facebook')) {
    function facebook()
    {
        return get_instance()->config->item('facebook');
    }
}

if (!function_exists('instagram')) {
    function instagram()
    {
        return get_instance()->config->item('instagram');
    }
}

if (!function_exists('linkedin')) {
    function linkedin()
    {
        return get_instance()->config->item('linkedin');
    }
}

if (!function_exists('twitter')) {
    function twitter()
    {
        return get_instance()->config->item('twitter');
    }
}

/*
|--------------------------------------------------------------------------
| Funciones de Open Graph y Twitter
|--------------------------------------------------------------------------
*/

/* Open Graph */
if (!function_exists('og_title')) {
    function og_title()
    {
        return get_instance()->config->item('titulo');
    }
}

if (!function_exists('og_description')) {
    function og_description()
    {
        return get_instance()->config->item('descripcion');
    }
}

if (!function_exists('og_image')) {
    function og_image()
    {
        return base_url('assets/images/og-image.png');
    }
}

if (!function_exists('og_url')) {
    function og_url()
    {
        return base_url();
    }
}

/* Twitter */
if (!function_exists('twitter_title')) {
    function twitter_title()
    {
        return og_title(); // Reusar el mismo título de Open Graph
    }
}

if (!function_exists('twitter_description')) {
    function twitter_description()
    {
        return og_description(); // Reusar la misma descripción de Open Graph
    }
}

if (!function_exists('twitter_image')) {
    function twitter_image()
    {
        return og_image(); // Reusar la misma imagen de Open Graph
    }
}

if (!function_exists('twitter_site')) {
    function twitter_site()
    {
        return get_instance()->config->item('twitter_site');
    }
}






if (!function_exists('email_envio')) {

    function email_envio()
    {
        return get_instance()->config->item('email_envio');
    }
}

if (!function_exists('email_contacto')) {

    function email_contacto()
    {
        return get_instance()->config->item('email_contacto');
    }
}

if (!function_exists('base_url_categorias')) {

    function base_url_categorias()
    {
        return base_url() . get_instance()->config->item('base_url_categorias');
    }
}

if (!function_exists('base_url_locales')) {

    function base_url_locales()
    {
        return base_url() . get_instance()->config->item('base_url_locales');
    }
}
