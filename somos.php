<?php

	include_once('includes/config/inicio.php');

	// Configuración de la página
 	define('SECCION', 'somos');

 	$metas = array(
		'titulo' 		=> 'Nosotros',
		'descripcion' 	=> 'Contamos con 10 años de experiencia en la formación de Reanimación Cardiopulmonar (RCP) y los Primeros Auxilios.',
		'img' 			=> '',
		'slider' 		=> '<h1>MEDIVAC		
							<br><small>CENTRO DE CAPACITACIÓN</small></h1>',
	);

	include('header.php');

?>
	
	<article>
		<?php include('templates/filtro-cursos.php'); ?>
		<section id="somos" class="banda">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h3 class="color-1"><b>CONTAMOS CON 10 AÑOS DE EXPERIENCIA</b> EN LA FORMACIÓN DE REANIMACIÓN <br class="visible-lg">CARDIOPULMONAR (RCP) Y LOS PRIMEROS AUXILIOS</h3>
						<p>MEDIVAC ha cambiado su imagen, ha renovado sus actividades y servicios. A partir del 2013 en su aniversario 10° hemos diseñado el 
						<br class="visible-lg">siguiente portal donde podrá encontrar novedades de Emergencias y Medicina Crítica como así también información general de Salud 
						<br class="visible-lg">para la población en general.
						<br><br>
						Nuestra principal misión es difundir las técnicas actualizadas de Reanimación Cardiopulmonar (RCP) y Primeros Auxilios según la nueva 
						<br class="visible-lg">Ley N° 4077. Para ello disponemos de una amplia gama de Cursos con certificación internacional.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 text-center">
						<div class="somos-icn-container celeste">
							<div class="somos-icn-container__cont">
								<i class="icn icn-experiencia hidden-xs hidden-sm"></i>
								<i class="icn icn-experiencia-sm visible-xs visible-sm"></i>
								<div class="clearfix"></div>
								<span>Experiencia</span>
							</div>
						</div>
						<div class="somos-icn-container azul">
							<div class="somos-icn-container__cont">
								<i class="icn icn-calidad hidden-xs hidden-sm"></i>
								<i class="icn icn-calidad-sm visible-xs visible-sm"></i>
								<div class="clearfix"></div>
								<span>Calidad</span>
							</div>
						</div>
						<div class="somos-icn-container rojo">
							<div class="somos-icn-container__cont">
								<i class="icn icn-compromiso hidden-xs hidden-sm"></i>
								<i class="icn icn-compromiso-sm visible-xs visible-sm"></i>
								<div class="clearfix"></div>
								<span>Compromiso</span>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</section>
		<section id="staff" class="gris banda">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-center">
						<h4 class="color-1">NUESTRO STAFF</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget diam lacus. Aliquam consectetur, ipsum quis finibus sollicitudin, 
						<br class="visible-lg">metus ex rutrum nisi, eget commodo sapien nisl vel justo. Duis sapien tortor, dapibus sit amet vulputate tristique, efficitur in ligula. Ut 
						<br class="visible-lg">interdum sapien dignissim risus vestibulum feugiat. </p>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 text-center">
						<div class="staff">
							<a href="javascript:;" data-member="1" class="staff__img" style="background: url('images/staff-1.jpg');">
								<div class="staff__img__hover">
									<i class="icn icn-plus-thin"></i>
								</div>
							</a>
							<div class="staff__detalle">
								<div class="staff__detalle__titulo">
									<p class="color-3"><b>Dr. Diego Rodrigo Pereyra</b></p>
									<p>Director General</p>
								</div>
								<div class="staff__detalle__detalle">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam cursus enim vitae sem semper, ut efficitur enim tempus.</p>
									<a href="mailto:<?=Empresa::$contacto['mail']?>" class="icn icn-envelope-red"> </a>
								</div>
							</div>
						</div>
						<div class="staff">
							<a href="javascript:;" data-member="2" class="staff__img" style="background: url('images/staff-2.jpg');">
								<div class="staff__img__hover">
									<i class="icn icn-plus-thin"></i>
								</div>
							</a>
							<div class="staff__detalle">
								<div class="staff__detalle__titulo">
									<p class="color-3"><b>Dr. Guillermo Daniel Feldman</b></p>
									<p>Instructor</p>
								</div>
								<div class="staff__detalle__detalle">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam cursus enim vitae sem semper, ut efficitur enim tempus.</p>
									<a href="mailto:<?=Empresa::$contacto['mail']?>" class="icn icn-envelope-red"></a>
								</div>
							</div>
						</div>
						<div class="staff">
							<a href="javascript:;" data-member="3" class="staff__img" style="background: url('images/staff-3.jpg');">
								<div class="staff__img__hover">
									<i class="icn icn-plus-thin"></i>
								</div>
							</a>
							<div class="staff__detalle">
								<div class="staff__detalle__titulo">
									<p class="color-3"><b>Diego Hernán Bao</b></p>
									<p>Instructor</p>
								</div>
								<div class="staff__detalle__detalle">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam cursus enim vitae sem semper, ut efficitur enim tempus.</p>
									<a href="mailto:<?=Empresa::$contacto['mail']?>" class="icn icn-envelope-red"> </a>
								</div>
							</div>
						</div>
						<div href="javascript:;" class="staff">
							<a href="javascript:;" data-member="4" class="staff__img" style="background: url('images/staff-4.jpg');">
								<div class="staff__img__hover">
									<i class="icn icn-plus-thin"></i>
								</div>
							</a>
							<div class="staff__detalle">
								<div class="staff__detalle__titulo">
									<p class="color-3"><b>Guillermina de la Mata</b></p>
									<p>Instructora</p>
								</div>
								<div class="staff__detalle__detalle">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam cursus enim vitae sem semper, ut efficitur enim tempus.</p>
									<a href="mailto:<?=Empresa::$contacto['mail']?>" class="icn icn-envelope-red"> </a>
								</div>
							</div>
						</div>
						<div class="dialog-wrapper 1">
							<div class="dialog">
								<div class="dialog__head"><a href="javascript:;"><img src="images/close.png" alt=""></a></div>
								<div class="dialog__left col-sm-4">
									<div class="dialog__left__img">
											<img src="images/staff-1.jpg" alt="" class="img-responsive">
									</div>
									<a href="javascript:;" class="dialog__left__cv"><i class="fa fa-file-text-o" aria-hidden="true"></i> <span>Descargar CV</span></a>
									<a href="mailto:<?=Empresa::$contacto['mail']?>" class="dialog__left__mailto"><i class="icn icn-envelope-red"></i></a>
								</div>
								<div class="dialog__right col-sm-8 text-left">
									<h5 class="color-1"><b>Dr. Diego Rodrigo Pereyra</b>
										<br>Director General
									</h5>
									<ul class="list-caret">
										<li>Médico Especialista en Terapia Intensiva y Medicina Crítica (SATI – UBA).</li>
										<li>Residencia completa en Terapia Intensiva (Sanatorio Otamendi & Miroli).</li>
										<li>Especialización en Docencia Universitaria (En curso).</li>
										<li>Coordinador de Terapia Intensiva Adultos – OSPERYH – Maternidad.</li>
										<li>Médico de Planta de Terapia Intensiva – Hospital Universitario UAI.</li>
										<li>Faculty del Centro Internacional de Entrenamiento de la American Heartttt</li>
										<li>Association – Hospital Universitario UAI.</li>
										<li>Docente de Interpretación ECG en Medicina Interna – Universidad Abierta Interamericana.</li>
										<li>Docente de Medicina Interna – Hospital Universitario UAI.</li>
										<li>Docente de Medicina de Emergencias – Universidad Abierta Interamericana.</li>
										<li>Instructor ACLS/SVCA y BLS/SVB. American Heart Association.</li>
									</ul>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="dialog-wrapper 2">
							<div class="dialog">
								<div class="dialog__head"><a href="javascript:;"><img src="images/close.png" alt=""></a></div>
								<div class="dialog__left col-sm-4">
									<div class="dialog__left__img">
											<img src="images/staff-2.jpg" alt="" class="img-responsive">
									</div>
									<a href="javascript:;" class="dialog__left__cv"><i class="fa fa-file-text-o" aria-hidden="true"></i> <span>Descargar CV</span></a>
									<a href="mailto:<?=Empresa::$contacto['mail']?>" class="dialog__left__mailto"><i class="icn icn-envelope-red"></i></a>
								</div>
								<div class="dialog__right col-sm-8 text-left">
									<h5 class="color-1"><b>Dr. Guillermo Daniel Feldman</b>
										<br>Instructor
									</h5>
									<ul class="list-caret">
										<li>Médico Especialista en Terapia Intensiva y Medicina Crítica (SATI – UBA).</li>
										<li>Residencia completa en Terapia Intensiva (Sanatorio Otamendi & Miroli).</li>
										<li>Especialización en Docencia Universitaria (En curso).</li>
										<li>Coordinador de Terapia Intensiva Adultos – OSPERYH – Maternidad.</li>
										<li>Médico de Planta de Terapia Intensiva – Hospital Universitario UAI.</li>
										<li>Faculty del Centro Internacional de Entrenamiento de la American Heartttt</li>
										<li>Association – Hospital Universitario UAI.</li>
										<li>Docente de Interpretación ECG en Medicina Interna – Universidad Abierta Interamericana.</li>
										<li>Docente de Medicina Interna – Hospital Universitario UAI.</li>
										<li>Docente de Medicina de Emergencias – Universidad Abierta Interamericana.</li>
										<li>Instructor ACLS/SVCA y BLS/SVB. American Heart Association.</li>
									</ul>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="dialog-wrapper 3">
							<div class="dialog">
								<div class="dialog__head"><a href="javascript:;"><img src="images/close.png" alt=""></a></div>
								<div class="dialog__left col-sm-4">
									<div class="dialog__left__img">
											<img src="images/staff-3.jpg" alt="" class="img-responsive">
									</div>
									<a href="javascript:;" class="dialog__left__cv"><i class="fa fa-file-text-o" aria-hidden="true"></i> <span>Descargar CV</span></a>
									<a href="mailto:<?=Empresa::$contacto['mail']?>" class="dialog__left__mailto"><i class="icn icn-envelope-red"></i></a>
								</div>
								<div class="dialog__right col-sm-8 text-left">
									<h5 class="color-1"><b>Diego Hernan Bao</b>
										<br>Instructor
									</h5>
									<ul class="list-caret">
										<li>Médico Especialista en Terapia Intensiva y Medicina Crítica (SATI – UBA).</li>
										<li>Residencia completa en Terapia Intensiva (Sanatorio Otamendi & Miroli).</li>
										<li>Especialización en Docencia Universitaria (En curso).</li>
										<li>Coordinador de Terapia Intensiva Adultos – OSPERYH – Maternidad.</li>
										<li>Médico de Planta de Terapia Intensiva – Hospital Universitario UAI.</li>
										<li>Faculty del Centro Internacional de Entrenamiento de la American Heartttt</li>
										<li>Association – Hospital Universitario UAI.</li>
										<li>Docente de Interpretación ECG en Medicina Interna – Universidad Abierta Interamericana.</li>
										<li>Docente de Medicina Interna – Hospital Universitario UAI.</li>
										<li>Docente de Medicina de Emergencias – Universidad Abierta Interamericana.</li>
										<li>Instructor ACLS/SVCA y BLS/SVB. American Heart Association.</li>
									</ul>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="dialog-wrapper 4">
							<div class="dialog">
								<div class="dialog__head"><a href="javascript:;"><img src="images/close.png" alt=""></a></div>
								<div class="dialog__left col-sm-4">
									<div class="dialog__left__img">
											<img src="images/staff-4.jpg" alt="" class="img-responsive">
									</div>
									<a href="javascript:;" class="dialog__left__cv"><i class="fa fa-file-text-o" aria-hidden="true"></i> <span>Descargar CV</span></a>
									<a href="mailto:<?=Empresa::$contacto['mail']?>" class="dialog__left__mailto"><i class="icn icn-envelope-red"></i></a>
								</div>
								<div class="dialog__right col-sm-8 text-left">
									<h5 class="color-1"><b>Guillermina de la Mata</b>
										<br>Instructor
									</h5>
									<ul class="list-caret">
										<li>Médico Especialista en Terapia Intensiva y Medicina Crítica (SATI – UBA).</li>
										<li>Residencia completa en Terapia Intensiva (Sanatorio Otamendi & Miroli).</li>
										<li>Especialización en Docencia Universitaria (En curso).</li>
										<li>Coordinador de Terapia Intensiva Adultos – OSPERYH – Maternidad.</li>
										<li>Médico de Planta de Terapia Intensiva – Hospital Universitario UAI.</li>
										<li>Faculty del Centro Internacional de Entrenamiento de la American Heartttt</li>
										<li>Association – Hospital Universitario UAI.</li>
										<li>Docente de Interpretación ECG en Medicina Interna – Universidad Abierta Interamericana.</li>
										<li>Docente de Medicina Interna – Hospital Universitario UAI.</li>
										<li>Docente de Medicina de Emergencias – Universidad Abierta Interamericana.</li>
										<li>Instructor ACLS/SVCA y BLS/SVB. American Heart Association.</li>
									</ul>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<?php 	Plugins::activar('dialog'); ?>
					</div>
				</div>
			</div>
		</section>
		<?php include('templates/slider-picasa.php'); ?>
		<?php include('templates/slider-empresas.php'); ?>
	</article>
	<?php include('footer.php'); ?>
</main>
</body>