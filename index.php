<?php

	include_once('includes/config/inicio.php');

	// Configuración de la página
 	define('SECCION', 'home');

 	$metas = array(
		'titulo' 		=> 'Centro de Capacitación',
		'descripcion' 	=> 'Nuestra principal misión es difundir las técnicas actualizadas de Reanimación Cardiopulmonar (RCP) y Primeros Auxilios según la nueva Ley N° 4077. Para ello disponemos de una amplia gama de Cursos con certificación internacional.',
		'img' 			=> '',
		'slider' 		=> '',
	);

	include('header.php');

?>
	
	<article>
		<?php include('templates/filtro-cursos.php'); ?>
		<section id="index-cursos" class="banda">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-center">
						<h2>TENEMOS RESPONSABILIDAD Y VOCACIÓN EN LO QUE HACEMOS</h2>
						<h3>Aprende cómo responder ante una emergencia</h3>
					</div>
				</div>
				<div class="row text-center dropdowncustom-container">

					<?php foreach(Curso::obtener('proximos', 6) as $curso){
						include('templates/modulo-curso.php');
					}?>
				
					<?php Plugins::activar('dropdowncustom'); ?>
				</div>
			</div>
		</section>

		<?php include('templates/slider-picasa.php'); ?>

		<section id="index-porque" class="celeste">
			<div class="left celeste">
				<div class="left__container wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInLeft;">
					<h3 class="color-2"><b>¿POR QUÉ CAPACITARNOS?</b></h3>
					<p class="color-2">La muerte súbita es la principal causa de muerte de origen cardiovascular en el mundo, se produce en un gran porcentaje debido a una alteración en el ritmo cardíaco llamado “Fibrilación Ventricular o Taquicardia Ventricular”; con la rápida desfibrilación eléctrica se puede restaurar el ritmo cardíaco. 
					<br><br>
					Por cada 10 minutos que se retrasa en la realización de una desfibrilación las posibilidades de sobrevida disminuyen un 10%. 
					</p>
				</div>
			</div>
			<div class="right"><a href="https://youtu.be/NhxYQZarZPQ?t=2m26s" target="_blank" style="background: url('images/youtube.jpg'); background-size: cover; background-position: center;"></a></div>
		</section>		

		<?php include('templates/ultimas-novedades.php'); ?>
		<?php include('templates/slider-empresas.php'); ?>

	</article>
	<?php include('footer.php'); ?>
</main>
</body>