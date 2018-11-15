<?php

	include_once('includes/config/inicio.php');

	// Configuración de la página
 	define('SECCION', 'cursos-general');

 	$metas = array(
		'titulo' 		=> 'Cursos Público General',
		'descripcion' 	=> 'Capacitarte es un beneficio para todos.',
		'img' 			=> '',
		'slider' 		=> '<i class="icn icn-general-big"></i><h1><small>Cursos</small>
							<br>PÚBLICO GENERAL</h1>',
	);

	include('header.php');

?>
	
	<article>
		<div class="container">
			<section id="cursos-interna" class="banda">
					<div class="row">
						<div class="col-md-12 text-center">
							<h3 class="color-1"><b>CAPACITARTE ES UN BENEFICIO PARA TODOS</b></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam cursus enim vitae sem semper, ut efficitur enim tempus. Vivamus quis metus consequat, egestas augue ac, elementum tortor. Mauris tincidunt eros augue, nec rhoncus lectus laoreet nec. In eu nisi in magna commodo congue. Sed pharetra semper eleifend. Fusce blandit pulvinar velit facilisis mollis. </p>
						</div>
					</div>
					<div class="row text-center">
						<?php foreach(Curso::obtener('categoria', Curso::CAT_PUBLICO_GRAL) as $curso){
							include('templates/modulo-curso.php');
						}?>
					</div>	
					<hr class="border3">			
				</div>
			</section>
		</div>
	
		<?php include('templates/slider-empresas.php'); ?>
	</article>
	<?php include('footer.php'); ?>
</main>
</body>