<?php

 	include_once('includes/config/inicio.php');

	$modelo  = isset($_GET['m']) ? ucfirst($_GET['m']) : false;
	$filtros = isset($_GET['f']) ? $_GET['f'] : false;
	$propiedad = isset($_GET['p']) ? $_GET['p'] : '';
	$profile = isset($_GET['profile']) ? true : false;

	if(! $modelo){
		die('Tenés que indicar algún modelo.');
	}

	if(! is_callable($modelo.'::obtener')){
		header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
		die('El modelo "'.$modelo.'" no existe.');
	}

	if($profile){
		$bench = new Ubench;
		$bench->start();
	}

	if( $filtros ){
		$resultado =  call_user_func( $modelo.'::obtener', $filtros);
	}else{
		$resultado = call_user_func($modelo.'::obtener');
	}

	if($propiedad){
		if(method_exists($resultado, $propiedad)){
			$resultado = $resultado->$propiedad();
		}else{
			header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
			die('Esta propiedad no existe.');
		}
		
	}

	if($profile){
		$bench->end();
		echo '<pre style="font-size: 18px;">';
		echo 'Tiempo: '.$bench->getTime(false, '%d%s')."\n"; // 156ms or 1s
		echo 'Memoria max: '.$bench->getMemoryPeak()."\n";  // 152B or 90.00Kb or 15.23Mb
		echo 'Memoria uso: '.$bench->getMemoryUsage()."\n"; // 152B or 90.00Kb or 15.23Mb
		echo '</pre>';
	}

	$formato = isset($_GET['formato']) ? $_GET['formato'] : 'default';
	switch($formato){
		case 'html' :
			echo '<pre>';
			print_r($resultado);
			echo '</pre>';

		default :
			if($resultado !== null){
				header('Content-type: application/json');
				echo json_encode($resultado);
			}else{
				header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
			}
			break;
	}

	if(isset($_GET['debug'])){
		echo '<pre>';
		print_r($_GET);
		echo '</pre>';
	}

 	exit;