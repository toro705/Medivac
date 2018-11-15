<?php

/** Campo de captcha
* Genera y valida el captcha
*
*/
Class Input_captcha extends Campo{

	public $site_key	= '6Lfj8g8UAAAAAGjY82mYVLbehtaUuKSMi1usuI5J';
	public $secret_key 	= '6Lfj8g8UAAAAAI1NIR3hVMWrfn_nzm5m43ZQsfMD';

	function __construct( $datos ){

		parent::__construct( $datos );

		$this->site_key 	= $this->site_key==''   ?  '6Lfj8g8UAAAAAGjY82mYVLbehtaUuKSMi1usuI5J' : $this->site_key;
		$this->secret_key 	= $this->secret_key=='' ?  '6Lfj8g8UAAAAAI1NIR3hVMWrfn_nzm5m43ZQsfMD' : $this->secret_key;
	}

	public function mostrar(){
		return false;
	}

	public function validar(){

		$resultado = array(
			'estado' => 'ok',
			'valida' => true
		);

		foreach($this->validar as $regla){
			switch($regla){
				case 'requerido':
				    require('forms/libs/ReCaptcha/ReCaptcha.php');
	    			require('forms/libs/ReCaptcha/RequestMethod.php');
	    			require('forms/libs/ReCaptcha/RequestParameters.php');
	    			require('forms/libs/ReCaptcha/Response.php');
	    			require('forms/libs/ReCaptcha/RequestMethod/Post.php');

	    			if(isset($_POST['g-recaptcha-response'])){
	    		    	$recaptcha = new ReCaptcha( $this->secret_key );

	    			    $resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
	    			    if ( ! $resp->isSuccess()) {
	    			    	//https://developers.google.com/recaptcha/docs/verify#error-code-reference
	    			    	$mensaje_error = '';
	    			    	foreach ($resp->getErrorCodes() as $code) {
	    		                $mensaje_error .= $code;
	    		            }
	    		            return array(
								'estado' => 'captcha_invalido',
								'valida' => false
							);
	    			    }
	    			}
					break;
			}
		}

		return $resultado;

	}

	/** Genera el HTML del campo
	*
	*/
	public function html(){
		return '<div class="grecaptcha" data-sitekey="'.$this->site_key.'" data-theme="light" data-size="normal" style="overflow: hidden; border-radius: 5px;">
					<noscript>
					  	<div style="width: 100%; height: 500px;">
							<iframe src="https://www.google.com/recaptcha/api/fallback?k='.$this->site_key.'&hl='.IDIOMA.'"
							        frameborder="0" scrolling="no"
							        style="width: 100%; height:422px; border-style: none;">
							</iframe>
							<textarea style="width:285px; height:60px;" id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response"></textarea>
					  </div>
					</noscript>
                </div>
                <script type="text/javascript">
                 var cargarReCaptcha = function() {
                  	var captchas = document.querySelectorAll(".grecaptcha");
                  	for (var i = 0; i < captchas.length; i++) {

                  		//Quito el <noscript>
                  		captchas[i].innerHTML = "";
                  		captchas[i].setAttribute( "id", "recaptcha-" + i);
                  		grecaptcha.render( "recaptcha-" + i, {
                	      "sitekey" : "'.$this->site_key.'",
                	      "theme" : captchas[i].getAttribute("data-theme"),
                	      "size" : captchas[i].getAttribute("data-size")
                	    });
                  	}
                };
                </script>
                <script type="text/javascript" src="https://www.google.com/recaptcha/api.js?onload=cargarReCaptcha&render=explicit&hl='.IDIOMA.'" sync defer></script>';
	}
}

