<?php

	include_once('includes/config/inicio.php');

	// Configuración de la página
 	define('SECCION', 'contacto');

 	$metas = array(
		'titulo' 		=> 'Contacto',
		'descripcion' 	=> 'Contactenos',
		'img' 			=> '',
		'slider' 		=> '<h1>CONTACTO</h1>'
	);

	include('header.php');

?>

	<article>

		<section id="contacto" class="banda blanca">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-center">
						<h3 class="color-1"><b>COMUNÍQUESE CON NOSOTROS	</b></h3>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-7 col-lg-8 col-md-offset-1">
						<?php include('forms/contacto.php'); ?>
						<?php echo $form_contacto->mensaje_estado ?>
						<?php if ($form_contacto->estado != 'ok') { ?>
							<form class="formulario" role="form" method="post">
								<div class="row">
									<div class="col-xs-12">
										<p class="color-4 paragraph-3">*Campos Obligatorios</p>
									</div>
								</div>
								<div class="row">	
			                		<div class="col-xs-12">
					                	<div class="form-group">
					                    	<input class="form-control" type="text" id="nombre" name="nombre" placeholder="Nombre y Apellido*" value="<?php echo (isset($_POST['nombre'])) ? $_POST['nombre'] : ''; ?>" />
					                    </div>
					                </div>
				                	<div class="col-xs-12">
				                		<div class="form-group">
					                    	<input class="form-control" type="text" id="direccion" name="direccion" placeholder="Dirección*" value="<?php echo (isset($_POST['direccion'])) ? $_POST['direccion'] : ''; ?>" />
					                    </div>
					                </div>
					                <div class="col-xs-12 col-md-5">
					                	<div class="form-group">
					                    	<input class="form-control" type="tel" id="telefono" name="telefono" placeholder="Teléfono" value="<?php echo (isset($_POST['telefono'])) ? $_POST['telefono'] : ''; ?>" />
					                    </div>
					                </div>
					                <div class="col-xs-12 col-md-7">
					                	<div class="form-group">
					                    	<input class="form-control" type="email" id="email" name="email" placeholder="E-mail*" value="<?php echo (isset($_POST['email'])) ? $_POST['email'] : ''; ?>" />
					                    </div>
					                </div>
					                <div class="col-xs-12">
					                	<div class="form-group">
					                    	<input class="form-control" type="text" id="pais" name="pais" placeholder="País*" value="<?php echo (isset($_POST['pais'])) ? $_POST['pais'] : ''; ?>" />
					                    </div>
					                </div>
					                <div class="col-xs-12">
										<div class="form-group">
										 	<select name="curso" id="curso" class="form-control">
										 		<option selected disabled>Seleccione el curso de interés</option>
										 		<option value="empresas">Empresas</option>
										 		<option value="pg">Publico General</option>
										 		<option value="p-de-salud">Personal de la Salud</option>
										 	</select>
										</div>
									</div>
				                	<div class="col-xs-12">
										<div class="form-group">
					                		<textarea class="form-control" id="mensaje" name="mensaje" placeholder="Comentario" ><?php echo (isset($_POST['mensaje'])) ? $_POST['mensaje'] : ''; ?></textarea>
					                	</div>
					                </div>
					                <div class="col-xs-12 col-md-7 col-lg-6">
										<div class="form-group">
					                		<div class="form-captcha">
												<?= $form_contacto->campos['captcha']->html() ?>
											</div>
										</div>
									</div>
					                <div class="col-xs-12 col-md-5 col-lg-6 text-left form__desclaim">
					                		<p>» Los datos que ingrese guardarán la confidencialidad y no se utilizarán con otros fines.</p>
					                		<p>» Atención: Sus consultas serán respondidas dentro de las 48hs enviado el mensaje.</p>
					                </div>
					                <div class="col-xs-12 text-left">
					                    <button class="btn-red" type="submit" name="enviar_contacto">ENVIAR <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></button>
					                </div>
								</div>

							</form>
						<?php } ?>
					</div>		
					<div class="clearfix visible-xs visible-sm"></div>
	            	<div class="col-md-4 col-lg-3 sidebar-container">
	            		<div class="contact__sidebar azul">
	            			<img src="images/logo_nav-principal-pie.png" alt="" class="img-responsive">
	            			<hr>
	            			<div class="contact__sidebar__element direccion">
	            				<div><i class="icn icn-footer-marker-small"></i></div>
	            				<div><p><?=Empresa::$contacto['direccion']?> <?=Empresa::$contacto['piso']?> <?=Empresa::$contacto['oficina']?> <br><?=Empresa::$contacto['localidad']?></p></div>
	            			</div>
							
	            			<div class="contact__sidebar__element telefono">
	            				<div><i class="icn icn-footer-mobile-small"></i></div>
	            				<div><p>(011) <b><a class="color-1" href="tel:<?=Empresa::$contacto['telefono_enlace']?>"><?=Empresa::$contacto['telefono']?></a></b></b></p></div>
	            			</div>

	            			<div class="contact__sidebar__element">
	            				<div><i class="icn icn-footer-envelope-small"></i></div>
	            				<div><p><a class="color-1" href="mailto:<?=Empresa::$contacto['mail']?>"><?=Empresa::$contacto['mail']?></a></p></div>
	            			</div>

	            		</div>
	            	</div>
	            </div>
			</div>
		</section>
		<section id="contacto-mapa" class="">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9288.583181181977!2d-58.401828356306844!3d-34.60390667950502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccaeaa699ec1d%3A0xcd8552d2d370353b!2sTucum%C3%A1n+1946%2C+C1050AAN+CABA!5e0!3m2!1ses-419!2sar!4v1485190127260" width="100%" height="476" frameborder="0" style="border:0" allowfullscreen></iframe>
		</section>
	</article>

<?php include('footer.php'); ?>