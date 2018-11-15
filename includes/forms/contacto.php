<?php

include_once('forms/core/Formulario.php');

$form_contacto = new Formulario(
	array(
		'destinatarios' => array(
			Empresa::$email
		),
		'asunto' 	=> 'Contacto - '.Empresa::$nombre,
		'remitente' => array(
			'nombre' => 'Web '.Empresa::$nombre,
			'email' => 'web@medivac.com'
		),
		'responder_a' => array(
			'nombre' => 'nombre',
			'email' => 'email'
		),
		'opciones' => array(
			'debug' => false,
			'guardar_contacto' => true,
			'guardar_form' => true
		)
	)
);

$form_contacto->agregarCampos(
	array(

		array(
			'name' 		=> 'nombre',
			'label' 	=> 'Nombre',
			'tipo' 		=> 'text',
			'validar' 	=> array('requerido'),
		),

		array(
			'name' 		=> 'direccion',
			'label' 	=> 'Direccion',
			'tipo' 		=> 'text',
			'validar' 	=> array('requerido'),
		),

		array(
			'name' 		=> 'telefono',
			'label' 	=> 'Teléfono',
			'tipo' 		=> 'tel',
		),

		array(
			'name' 		=> 'email',
			'label' 	=> 'Email',
			'tipo' 		=> 'email',
			'validar' 	=> array('requerido','formato'),
		),

		array(
			'name' 		=> 'pais',
			'label' 	=> 'Pais',
			'tipo' 		=> 'text',
			'validar' 	=> array('requerido'),
		),

		array(
			'name' 		=> 'curso',
			'label' 	=> 'curso',
			'tipo' 		=> 'select',
		),

		array(
			'name' 		=> 'mensaje',
			'label' 	=> 'Mensaje',
			'tipo' 		=> 'textarea',
		),

		array(
			'name' 		=> 'captcha',
			'label' 	=> 'Captcha',
			'tipo' 		=> 'Captcha',
			 'validar' 	=> array('requerido'),
		),
	)
);

$form_contacto->agregarMensajeEstado(
	array(
		'incompleto'       => 'Todos los campos son requeridos.',
		'error'            => 'Hubo un problema al enviar el mensaje. Por favor, vuelva a intentarlo.',
		'mail_invalido'    => 'El email ingresado es inválido. Por favor, vuelva a ingresarlo.',
		'captcha_invalido' => 'El captcha no fue completado correctamente. Vuelva a intentarlo.',
		'ok'               => 'Su mensaje ha sido enviado, muchas gracias por comunicarse con nosotros.<br />	En breve nos pondremos en contacto con Ud.',
	)

);

if( isset($_POST['enviar_contacto']) ){
	$form_contacto->enviar();
}


