<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Configuraciones generales para el sistema SOLESTA
|--------------------------------------------------------------------------
| En este archivo se van a definir algunas configuraciones generales y
| específicas en algunos casos, para el sistema SOLESTA; esto para no
| modificar el archivo config.php que trae configuraciones específicase de CI
|
*/

/*
|--------------------------------------------------------------------------
| Configuracion del sistema
|--------------------------------------------------------------------------
|
*/
$config['sistema_id'] = 'sistema_solesta';
$config['sistema_nombre'] = 'SOLESTA';
$config['sistema_nombre_cliente'] = 'SOLESTA';

/*
|--------------------------------------------------------------------------
| Cuentas del sistema
|--------------------------------------------------------------------------
|
*/
$config['email_envio'] = 'contacto@jid.agency';
$config['email_contacto'] = 'contacto@jid.agency';

/*
|--------------------------------------------------------------------------
| URL's del sistema
|--------------------------------------------------------------------------
|
*/
$config['base_url_categorias'] = 'almacenamiento/categorias/';
$config['base_url_locales'] = 'almacenamiento/locales/';