<?php

	include_once('includes/config/inicio.php');

	// Configuración de la página
 	define('SECCION', 'novedades-novedad');

 	$metas = array(
		'titulo' 		=> 'Novedades',
		'descripcion' 	=> 'Ultimas Novedades de Medivac',
		'img' 			=> '',
		'slider' 		=> '<h1>NOVEDADES</h1>',
	);

	include('header.php');

?>
	
	<article>
			<section id="novedades-novedad" class="banda">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 novedad-cuerpo">
							<div class="novedad-cuerpo__titulo">
								<h4 class="color-1">Médicos e ingenieros argentinos crearon drones para ayudar en accidentes</h4>
								<p><i class="fa fa-calendar-o"></i> 11 - 06 - 2015</p>
							</div>
							<div class="novedad-cuerpo__img" style="background: url('images/temp/curso-big.jpg');"></div>
							<div class="novedad-cuerpo__compartir">
								<p>Compartir esta novedad </p>
		                        <ul class="list-inline">
									<li><a target="_blank" href="javascript:;"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a target="_blank" href="javascript:;"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
			                    </ul>
							</div>
							<hr>
							<div class="novedad-cuerpo__cuerpo">
								<p>Un equipo multidisciplinario creó un cuadricóptero manejado a distancia pensándolo para que puedan actuar rápidamente en incendios, derrumbes, catástrofes naturales o lugares con concurrencia masiva.
								<br><br>
								 Un dron que ayude a salvar vidas. Que pueda asistir rápidamente a personas en situaciones de riesgo. De eso se trata este dispositivo que crearon estos desarrolladores argentinos multidisciplinarios: hay médicos especialistas en terapia intensiva, en cardiología, en informática médica, ingenieros en sistemas y técnicos electrónicos. Se juntaron para desarrollar estos pequeños helicópteros no tripulados que pueden ayudar a resolver situaciones con vidas en riesgo.
								<br><br>
								La idea original la tuvo Diego Pereyra, fundador y CEO de Medivac, además de médico y especialista en terapia intensiva y medicina crítica. Se la comentó a otro colega, Fernando Lipovetsky. Ambos coincidieron en que Mauro García Aurelia, cardiólogo y con una empresa de informática médica, podría ayudarlos. Aurelia fue el nexo con Galactic Bots, cuyo CEO, Augusto Chesini, aportó el conocimiento de los drones (desarrollan estos dispositivos para el sector agropecuario), junto a los asesores técnicos Nicolás Luzzi y Kevin Dagostino.
								<br><br>
								La inspiración final fue RoboKopter, un aparato polaco, que les dio el último impulso que faltaba para la creación de un dispositivo local que pudiera actuar en situaciones donde es fundamental una rápida respuesta, como accidentes en rutas, incendios, derrumbes, catástrofes naturales o lugares con concurrencia masiva (un partido de fútbol o un recital al aire libre). Donde básicamente no se puede perder tiempo para asistir a un damnificado.
								<br><br>

									  TRES MODELOS
								<br>Tienen tres prototipos diseñados. Uno, el Futura +, que puede transportar carga más liviana (hasta 1,5 kg); permite llevar un botiquín básico de primeros auxilios; similar es el Futura X, donde una cámara de reconocimiento ayuda en el conteo de la gente, y puede llevar consigo suministros para las víctimas, como una máscara de gas. Este se utilizaría en incendios o en lugares de difícil acceso.
								<br><br>
								El más poderoso es el Futura H, que puede transportar hasta 5 kilos y tiene seis hélices. Tiene la capacidad de lanzar un desfibrilador externo automático (DEA) que puede evitar un paro cardíaco o muerte súbita. También puede cargar una cámara multiespectral, que permite realizar lo que en medicina se conoce como triaje (o triage), un método de clasificación rápida de heridos en una catástrofe en base a sus posibilidades de supervivencia. Gracias a sus sensores de monóxido de carbono y de temperatura permite establecer prioridades de acuerdo a las necesidades y los recursos disponibles.
								<br><br> 
								A todos los modelos se les puede añadir un micrófono y parlante (para comunicarse con un asistente) y una cámara de las pequeñas (tipo GoPro) que pueden transmitir en vivo por Wi-Fi o radiofrecuencia para monitorear en vivo.
								<br><br>
								Estos modelos son diferentes a los comerciales: según sus creadores, tienen una autonomía que ronda los 30/40 minutos y pueden transportar más peso que los drones convencionales. Los que llevan carga más liviana duran aún más.
								<br><br>

									  AYUDA INMEDIATA
								<br>Una ambulancia tarda en promedio unos 14 minutos en llegar al lugar del accidente, aunque depende (y mucho) del tráfico. Estos dispositivos pueden ir a 100 km por hora, ser manejados desde una tableta y controlarse a 20 km de distancia. "Alguien en el call center lo podría manejar, establecer las direcciones y enviar el dispositivo", explica Pereyra.

								<br><br>La Sociedad Argentina de Medicina ya le dio el aval académico a la iniciativa. "Esto se debe acompañar por educación comunitaria en el uso de estos aparatos", agrega Pascual Valdez, presidente de la SAM.

								T<br><br>anto médicos como técnicos también están analizando las problemáticas que podría enfrentar el avión no tripulado. Las antenas de la ciudad, los cables y muchos otros obstáculos podrían evitar el correcto funcionamiento de los drones de asistencia. En la Argentina, aún no hay regulación sobre el uso de drones en el espacio aéreo. La ANAC está trabajando en un boceto que podría ser definitivo para fin de año. El dron ambulancia puede volar a 400 m de altura; el edificio más alto de Buenos Aires tiene 175.

								<br><br>Chesini, uno de los técnicos encargados, señala que tuvieron que "aislar componentes, probar distintas frecuencias, añadir la posibilidad de cancelar todo y hasta agregarle un paracaídas" para evitar accidentes en caso que no llegue a buen puerto.
								 

								<br><br>	  EL FUTURO DEL PROYECTO
								<br>El costo estimado de un cuadricóptero de este tipo puede variar dependiendo de los dispositivos que fuera a transportar (no es lo mismo un desfibrilador que una cámara multiespectral). Pero oscilarán entre los 30 y los 70 mil pesos.

								<br><br>El proyecto incluye varias disciplinas: la capacitación médica para su manejo; la investigación y desarrollo desde el punto de vista médico, y la técnica del dispositivo.

								<br><br>Si bien aún son prototipos, el principal objetivo de los creadores de estos drones es ayudar desde la experiencia. Por eso en las próximas semanas van a invitar a organismos oficiales como la Policía, el SAME y los Bomberos a probar los aparatos.

								<br><br>----
								<br>Fuente: La Nación por Sebastián Davidovsky.</p>
							</div>
						</div>
						<div class="col-sm-4 novedades-sidebar">
							<div class="row text-center">
								<div class="novedades-sidebar__titulo">	
										<p>	Otras novedades</p>
										<hr>	
								</div>
								<a href="<?=url('novedades-novedad')?>" class="col-sm-12 novedad">
									<div class="novedad__img">
										<img src="images/temp/novedad-small.jpg" alt="" class="img-responsive">
									</div>
									<div class="novedad__detalle">
										<div class="novedad__detalle__titulo">
											<p><b>Médicos e ingenieros argentinos crearon drones para ayudar en accidentes.</b></p>
										</div>
										<div class="novedad__leer">LEER +</div>
									</div>
									<span class="clearfix"></span>
								</a>
								<a href="<?=url('novedades-novedad')?>" class="col-sm-12 novedad">
									<div class="novedad__img">
										<img src="images/temp/novedad-small.jpg" alt="" class="img-responsive">
									</div>
									<div class="novedad__detalle">
										<div class="novedad__detalle__titulo">
											<p><b>Médicos e ingenieros argentinos crearon drones para ayudar en accidentes.</b></p>
										</div>
										<div class="novedad__leer">LEER +</div>
									</div>
									<span class="clearfix"></span>
								</a>
								<a href="<?=url('novedades-novedad')?>" class="col-sm-12 novedad">
									<div class="novedad__img">
										<img src="images/temp/novedad-small.jpg" alt="" class="img-responsive">
									</div>
									<div class="novedad__detalle">
										<div class="novedad__detalle__titulo">
											<p><b>Médicos e ingenieros argentinos crearon drones para ayudar en accidentes.</b></p>
										</div>
										<div class="novedad__leer">LEER +</div>
									</div>
									<span class="clearfix"></span>
								</a>
								<a href="<?=url('novedades-novedad')?>" class="col-sm-12 novedad">
									<div class="novedad__img">
										<img src="images/temp/novedad-small.jpg" alt="" class="img-responsive">
									</div>
									<div class="novedad__detalle">
										<div class="novedad__detalle__titulo">
											<p><b>Médicos e ingenieros argentinos crearon drones para ayudar en accidentes.</b></p>
										</div>
										<div class="novedad__leer">LEER +</div>
									</div>
									<span class="clearfix"></span>
								</a>
								<a href="<?=url('novedades-novedad')?>" class="col-sm-12 novedad">
									<div class="novedad__img">
										<img src="images/temp/novedad-small.jpg" alt="" class="img-responsive">
									</div>
									<div class="novedad__detalle">
										<div class="novedad__detalle__titulo">
											<p><b>Médicos e ingenieros argentinos crearon drones para ayudar en accidentes.</b></p>
										</div>
										<div class="novedad__leer">LEER +</div>
									</div>
									<span class="clearfix"></span>
								</a>
								<a href="<?=url('novedades-novedad')?>" class="col-sm-12 novedad">
									<div class="novedad__img">
										<img src="images/temp/novedad-small.jpg" alt="" class="img-responsive">
									</div>
									<div class="novedad__detalle">
										<div class="novedad__detalle__titulo">
											<p><b>Médicos e ingenieros argentinos crearon drones para ayudar en accidentes.</b></p>
										</div>
										<div class="novedad__leer">LEER +</div>
									</div>
									<span class="clearfix"></span>
								</a>
							</div>							
						</div>
					</div>
				</div>
			</section>
	
		<?php include('templates/slider-empresas.php'); ?>
	</article>
	<?php include('footer.php'); ?>
</main>
</body>