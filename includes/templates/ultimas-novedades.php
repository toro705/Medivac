<section id="novedades-listado" class="banda">
	<div class="container">
		<div class="row text-center">
			
			<?php foreach(Novedad::obtener('ultimas', 2) as $novedad){
				echo '<div class="col-sm-6">';
				include('templates/modulo-novedad.php');
				echo '</div>';
			} ?>

		</div>
	</div>
</section>