<?php defined('BASEPATH') or exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Configuraciones generales para el sistema de Solesta
|--------------------------------------------------------------------------
| Configuración para centralizar información sin modificar el archivo config.php de CodeIgniter.
*/

/** v3.1.13 */

/*
|--------------------------------------------------------------------------
| Configuración del Sistema
|--------------------------------------------------------------------------
|
*/

/* Base de Datos */
$config['db_activa'] = true;

/* Identificadores del Sistema y Branding */
$config['sistema_id'] = 'sistema_solesta';
$config['titulo'] = 'Solesta - Centro Comercial';
$config['nombre_comercial'] = 'Solesta';
$config['nombre_fiscal'] = 'Solesta';
$config['descripcion'] = 'Centro comercial líder en Puebla con una amplia gama de tiendas, restaurantes y entretenimiento.';
$config['palabras_clave'] = 'Centro comercial, Solesta, tiendas, entretenimiento, Puebla';
$config['autor'] = 'solesta.mx';

/*
|--------------------------------------------------------------------------
| Cuentas del sistema
|--------------------------------------------------------------------------
|
*/
$config['email_envio'] = 'contacto@solesta.mx';
$config['email_contacto'] = 'contacto@solesta.mx';

/*
|--------------------------------------------------------------------------
| Redes Sociales
|--------------------------------------------------------------------------
| Links externos de las redes sociales de Solesta.
*/

$config['whatsapp'] = 'https://wa.me/522211234567';
$config['facebook'] = 'https://facebook.com/SolestaPuebla';
$config['instagram'] = 'https://instagram.com/solestapuebla';
$config['linkedin'] = 'https://linkedin.com/company/solesta';
$config['twitter'] = 'https://twitter.com/solesta';
$config['tiktok'] = 'https://www.tiktok.com/@solestapuebla';
$config['twitter_site'] = '@solesta'; // Nombre de usuario de Twitter

/*
|--------------------------------------------------------------------------
| API de Google Maps
|--------------------------------------------------------------------------
|
*/
$config['google_maps'] = 'https://maps.app.goo.gl/2wprgfckPPSRnsqc9';
$config['google_maps_api_key'] = 'TU_CLAVE_API_GOOGLE_MAPS';

/*
|--------------------------------------------------------------------------
| URL's del sistema
|--------------------------------------------------------------------------
|
*/
$config['base_url_categorias'] = 'almacenamiento/categorias/';
$config['base_url_locales'] = 'almacenamiento/locales/';
