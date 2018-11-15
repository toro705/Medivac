<?php

// Idiomas
define('IDIOMA_DEFAULT', 'es');
define('IDIOMA_ENABLED', json_encode( array('es')));


// Carpetas
define('CARPETA_CMS', 'cms');
define('CARPETA_RECURSOS', 'resources');
define('CARPETA_INCLUDES', 'includes');

// Rutas
define('BASE_URL', 'http://medivac.com.ar/nueva/');
define('BASE_PATH', '/home/medivac/domains/medivac.com.ar/public_html/nueva/');

define('CMS_URL',  BASE_URL.CARPETA_CMS.'/');
define('CMS_PATH', BASE_PATH.CARPETA_CMS.'/');

define('RESOURCES_URL',  CMS_URL.CARPETA_RECURSOS.'/');
define('RESOURCES_PATH', CMS_PATH.CARPETA_RECURSOS.'/');

define('INCLUDE_PATH', BASE_PATH.CARPETA_INCLUDES.'/');


// Configuraciones PHP
set_include_path(INCLUDE_PATH);

date_default_timezone_set('America/Argentina/Buenos_Aires');

error_reporting(-1);
ini_set('display_errors', -1);
