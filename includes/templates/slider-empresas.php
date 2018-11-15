

<section id="empresas" class="banda bg-1">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<p class="text-center"><b>EMPRESAS QUE CONFÍAN EN MEDIVAC</b></p>
			</div>
		</div>
		<ul id="empresas-carousel" class="row empresas-carousel text-center">

		<?php 
		 	$i = 1;
			$files = glob('images/slider-marcas/*.{jpg,png,gif}', GLOB_BRACE);
			foreach($files as $file) {
		?>
				<li class="marca-container inline-block text-center">
					<img src="images/slider-marcas/<?php echo ($i++); ?>.png" alt="" class="img-responsive">
				</li>
		<?php		
			}
		?>

		</ul>
	</div>
</section>
<?php Plugins::activar('slidermarcas'); ?>