<?php

function idiomaNavegador() {

	$languages = preg_replace('/(;q=\d+.\d+)/i', '', getenv('HTTP_ACCEPT_LANGUAGE'));

	$bol_language_detected = false;

	//Comprobamos si el navegador usa alguno de los idiomas que hemos predefinido.
	foreach (json_decode(IDIOMA_ENABLED) as $tmp_arr_language) {
		if (preg_match('/' . $tmp_arr_language . '/i', $languages)) {
			$tmp_str_language_detected = $tmp_arr_language;
			$bol_language_detected = true;
			break;
		}
	}

	// Si el navegador usa uno de los idiomas seleccionados, se devuelve el path del fichero de idioma
	// En caso contrario, se devuelve el path del idioma original
	if ($bol_language_detected) {
		return $tmp_str_language_detected;
	} else {
		return $conf['idioma']['default'];
	}
}
