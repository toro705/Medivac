<?php

	include_once('includes/config/inicio.php');

	// Configuración de la página
 	define('SECCION', 'cursos-empresas');

 	$metas = array(
		'titulo' 		=> 'Cursos Empresas e Instituciones',
		'descripcion' 	=> 'Capacitarte es un beneficio para todos.',
		'img' 			=> '',
		'slider' 		=> '<i class="icn icn-building-big"></i><h1><small>Cursos</small>
							<br>EMPRESAS E INSTITUCIONES</h1>',
	);

	include('header.php');

?>
	
	<article>
		<section id="cursos-interna" class=" empresas banda">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h3 class="color-1"><b>ZONA CONTROLADA CONTRA RIESGO CARDIOVASCULAR</b></h3>
						<p>Convierta a su Empresa o Institución en una zona controlada contra riesgo cardiovascular, con la capacitación del personal y la instalación de un Desfibrilador Externo Automático (DEA) según lo exige la Ley Nº 4077.

						<br><br>Hemos diseñado Cursos para cumplir con los requisitos que sugiere dicha Ley. Nuestro Cursos están avalados y certificados por la American <br class="visible-lg">Heart Association (entidad mundial que realiza las guías internacionales de Reanimación Cardiopulmonar y DEA).</p>
					</div>
				</div>
				<div class="row text-center">
					<?php foreach(Curso::obtener('categoria', Curso::CAT_EMPRESA) as $curso){
						include('templates/modulo-curso.php');
					}?>
					<!--<a href="<?=url('cursos-empresas-curso')?>" class="curso desfibrilador">
						<img src="images/desfibrilador.png" alt="" class="img-responsive">
					</a>-->
				</div>				
				<hr class="border3">			
			</div>
		</section>
	
		<?php include('templates/slider-empresas.php'); ?>
	</article>
	<?php include('footer.php'); ?>
</main>
</body>