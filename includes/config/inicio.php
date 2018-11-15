<?php

	// Configuración
	require_once('config.php');
	include_once('Empresa.php');

	// Autoload
	require_once('helpers/autoload.php');

	// Helpers
	$helpers = array(
		'url',
		// 'idioma',
		'fecha',
		'text2array',
		'recortarCadena',
		'ocultarEmail',
		'breadcrumb',
		'Plugins',
		'error_404'
	);
	foreach($helpers as $h){
		$helper = INCLUDE_PATH.'helpers/'.$h.'.php';
	    if (file_exists($helper)) {
	        require $helper;
	    }
	}

	// Cambio de idioma
	if(count(json_decode(IDIOMA_ENABLED)) > 1){
		idioma();
		require_once("idioma/".IDIOMA.".php");

	}else{
		define('IDIOMA', IDIOMA_DEFAULT);
	}

	// Minificar CSS y JS
	//https://github.com/bennettstone/magic-min
	$minified = new Minifier(
	    array(
	        'gzip' => true,
	        'closure' => true,
	        'hashed_filenames' => false,
	        'output_log' => false,
	        'echo' => false
	    )
	);