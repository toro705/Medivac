<?php

// Opción: Ocultar el detalle (bajada) de la novedad
$opcion_nov_detalle = isset($opcion_nov_detalle) ? $opcion_nov_detalle : true;

?>
<a href="<?= $novedad->url ?>" class="novedad">
	<div class="novedad__img">
		<img src="<?= $novedad->foto ? $novedad->foto->src : '' ?>" alt="" class="img-responsive">
	</div>
	<div class="novedad__detalle">
		<div class="novedad__detalle__titulo">
			<p><b><?= $novedad->titulo ?></b></p>
		</div>
		<?php if($opcion_nov_detalle){?>
		<div class="novedad__detalle__detalle">
			<p><?= $novedad->bajada ?></p>
		</div>
		<?php } ?>
		<div class="novedad__leer">LEER +</div>
	</div>
	<span class="clearfix"></span>
</a>
<span class="clearfix">	</span>