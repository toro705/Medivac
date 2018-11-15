<?php

function idioma(){

	//Le damos prioridad al idioma pasado por url
	if( isset($_GET['idioma']) AND in_array($_GET['idioma'],json_decode(IDIOMA_ENABLED)) ){
		define('IDIOMA', $_GET['idioma']);
	}else{

		//Si no al idioma de una cookie
		if( isset($_COOKIE['idioma']) AND  in_array($_COOKIE['idioma'],json_decode(IDIOMA_ENABLED)) ){
			define('IDIOMA', $_COOKIE['idioma']);
		}else{

			//Sino al idioma del navegador
			require_once(INCLUDE_PATH.'helpers/idiomaNavegador.php');
			$idioma_navegador = idiomaNavegador();
			if( in_array($idioma_navegador, json_decode(IDIOMA_ENABLED)) ){
				define('IDIOMA', $idioma_navegador);

			//O, si nos quedamos sin opciones, usamos el idioma por defecto
			}else{
				define('IDIOMA', IDIOMA_DEFAULT);
			}
		}
	}

	//Guardamos los datos en una cookie
	setcookie("idioma", IDIOMA, time()+3600,"/", "");
}
