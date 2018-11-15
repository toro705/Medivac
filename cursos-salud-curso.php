<?php

	include_once('includes/config/inicio.php');

	// Configuración de la página
 	define('SECCION', 'cursos-salud-curso');

 	$metas = array(
		'titulo' 		=> 'Cursos Personal de la Salud',
		'descripcion' 	=> 'Capacitarte es un beneficio para todos.',
		'img' 			=> '',
		'slider' 		=> '<i class="icn icn-heart-big"></i><h1><small>Cursos</small>
							<br>PERSONAL DE LA SALUD</h1>',
	);

	include('header.php');

?>
	
	<article>
			<section id="curso-detalle" class="salud gris-2 banda">
				<div class="container">
					<div class="row">
						<a class="volver-listado" href="<?=url('cursos-salud')?>">volver al listado <i class="fa fa-th" aria-hidden="true"></i></a>
					</div>
					<div class="row">
						<div class="col-sm-5 curso-detalle__left">
							<div class="curso-detalle__left__img" style="background: url('images/temp/cursos.jpg');"></div>
							<div class="curso-detalle__left__detalle">
								<div class="curso__detalle-container">
									<div class="curso__detalle-container__vacantes">
										<p><b>Vacantes del curso:</b> 10 personas</p>
									</div>
								</div>
								<div class="curso__info">
									<div class="wrapper-dropdowncustom curso__info__fecha" tabindex="1">
										<span>Miercoles 7/09/2016</span>
										<ul class="dropdowncustom">
											<li><i class="fa fa-check"></i> Miercoles 7/09/2016</li>
											<li><i class="fa fa-check"></i> Miercoles 8/09/2016</li>
											<li><i class="fa fa-check"></i> Miercoles 9/09/2016</li>
											<li><i class="fa fa-check"></i> Miercoles 10/09/2016</li>											
										</ul>
									</div>				
									<div class="clearfix visible-xs"></div>				
									<div class="curso__info__horario">
										<i class="fa fa-clock-o"></i>
										<p>9:00 hs a 17:00 hs</p>

									</div>
									<div class="clearfix"></div>
								</div>								
							</div>
							<div class="curso-detalle__left__promo">
								<div class="curso-detalle__left__promo__img-container"><img src="images/promo-icon-1.png" alt=""></div>
								<div class="curso-detalle__left__promo__text">
									<p><b>INSCRIBIÉNDOTE 5 DÍAS</b>
										<br>antes del curso, tenés un precio promocional
									</p>
								</div>
							</div>
						</div>
						<div class="col-sm-7 curso-detalle__right">
							<div class="curso-detalle__right__content">
								<h4 class="color-1">PRIMEROS AUXILIOS - CUIDADOS DEL RECIÉN NACIDO Y NIÑOS</h4>
								<p><b>Destinado a:</b>
								   <br>Público en general, Padres primerizos, Embarazadas, Babysitters, Maestras Jardineras, Docentes.
								</p>
								<hr>
								<p><b>Temario:</b>
								   <br>Activación Servicio de Emergencia, Traumatismos, Intoxicaciones (medicamentos / químicos), Asma, Asfixia, Quemaduras, Heridas corto-punzantes, Picaduras y Mordeduras, Vómitos / Diarreas, Síndrome febril, Calendario de vacunación, Muerte Súbita/RCP/DEA, Convulsiones /Ausencias, Niños y objetos Extraños, Electrocución, Medidas de prevención.
								</p>
								<hr>
								<p><b>Incluye:</b>
								   Material de estudios y Certificación
								</p>
								<p><b>Lugar:</b>
								   Av. Corrientes 2962 - 8vo piso, Oficina "A" (CABA).
								</p>
								<p><b>Duración:</b>
								   1 día
								</p>
								<hr>
							</div>
							<div class="curso-detalle__right__price">
								<div>
									<p><b>Precio:</b></p>
								</div>
								<div class="price">
										<p><b>AR $380</b></p>						
										<p><b>AR $350</b></p>						
										<p><small><i>*precio promocional por persona</i></small></p>
								</div>
								<div>
									<a href="javascript:;" class="btn-1">INSCRIBIRME</a>
								</div>
							</div>

							
						</div>
					</div>
				</div>
				<?php Plugins::activar('dropdowncustom'); ?>
				<div class="dialogCursoWrapper form">
					<div class="dialogCurso">
						<div class="dialog__head">
							<div class="col-xs-12">
								<div class="row">
									<a href="javascript:;"><img src="images/close2.png" alt=""></a>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
						<div class="dialog__top">
							<div class="col-xs-12">
								<span><h3 class="color-2 text-left"><b>PRIMEROS AUXILIOS - CUIDADOS DEL RECIÉN NACIDO Y NIÑOS</b></h3> <div class="clerafix"></div></span>
								<span><h2>AR $350</h2></span>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="dialog__detalles">
							<div class="col-xs-12">
								<p><i class="fa fa-calendar-check-o"></i> Miércoles 7/09/2016</p>
								<p><i class="fa fa-clock-o"></i> 9:00 hs a 17:00 hs</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="dialog__form">
							<div class="col-xs-12">
								<p class="text-right">*Campos Obligatorios</p>
							</div>
							<?php include('forms/contactocurso.php'); ?>
							<?php echo $form_contacto->mensaje_estado ?>
							<?php if ($form_contacto->estado != 'ok') { ?>
							<form class="formulario" role="form" method="post">
		                		<div class="col-xs-12">
				                	<div class="form-group">
				                    	<input class="form-control" type="text" id="nombre" name="nombre" placeholder="Nombre y Apellido" value="<?php echo (isset($_POST['nombre'])) ? $_POST['nombre'] : ''; ?>" />
				                    </div>
				                </div>
		                		<div class="col-xs-12 col-sm-6">
				                	<div class="form-group">
				                    	<input class="form-control" type="number" id="dni" name="dni" placeholder="DNI" value="<?php echo (isset($_POST['dni'])) ? $_POST['dni'] : ''; ?>" />
				                    </div>
				                </div>
				                <div class="col-xs-12 col-sm-6">
				                	<div class="form-group">
				                    	<input class="form-control" type="number" id="telefono" name="telefono" placeholder="Tel. de contacto" value="<?php echo (isset($_POST['telefono'])) ? $_POST['telefono'] : ''; ?>" />
				                    </div>
				                </div>
				                <div class="col-xs-12 col-sm-6">
				                	<div class="form-group">
				                    	<input class="form-control" type="email" id="email" name="email" placeholder="E-mail" value="<?php echo (isset($_POST['email'])) ? $_POST['email'] : ''; ?>" />
				                    </div>
				                </div>
				                <div class="col-xs-12 col-sm-6 cant-lugares">
									<div class="form-group form-inline">
										<label for="lugares">Cantidad de lugares</label>
									 	<select name="lugares" id="lugares" class="form-control">
									 		<option selected disabled>0</option>
									 		<option value="1">1</option>
									 		<option value="2">2</option>
									 		<option value="3">3</option>
									 	</select>
									</div>
								</div>
				                <div class="col-xs-6 text-left">
				                    <button class="btn-1" type="submit" name="enviar_contactocurso">PAGAR INSCRIPCIÓN</button>
				                </div>
				                <div class=" col-xs-6 text-right">
				                    <img src="images/mercadopago.jpg" alt="" class="img-responsive">
				                </div>
				                <div class="clearfix"></div>
							</form>
							<?php } ?>	
							<div class="clearfix"></div>						
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<?php 	Plugins::activar('dialogCurso'); ?>
			</section>
	
		<?php include('templates/novedades-listado.php'); ?>
		<?php include('templates/slider-empresas.php'); ?>
	</article>
	<?php include('footer.php'); ?>
</main>
</body>