			<?php if (SECCION != 'home') {
			echo'</main>';
		} ?>
		<div class="clearfix"></div>
		<footer class="pie">
			<div class="container">
	    		<div class="row">
	    			<div class="col-xs-12 col-sm-5 col-md-4 pie__data">
	    				<div class="pie__data__icon"><i class="icn icn-footer-mobile"></i></div>
	    				<div class="pie__data__text telefono"><p>(011) <b><a href="tel:<?=Empresa::$contacto['telefono_enlace']?>"><?=Empresa::$contacto['telefono']?></a></b></p></div>
	    				<div class="clearfix"></div>
	    				<div class="pie__data__icon"><i class="icn icn-footer-envelope"></i></div>
	    				<div class="pie__data__text"><a href="mailto:<?=Empresa::$contacto['mail']?>"><?=Empresa::$contacto['mail']?></a></div>
	    				<div class="clearfix"></div>
	    				<div class="pie__data__icon"><i class="icn icn-footer-marker"></i></div>
	    				<div class="pie__data__text"><p><?=Empresa::$contacto['direccion']?> <?=Empresa::$contacto['piso']?> <?=Empresa::$contacto['oficina']?> <br><?=Empresa::$contacto['CP']?> <?=Empresa::$contacto['localidad']?></p></div>
	    				<div class="clearfix"></div>
	    			</div>		
			    	<div class="col-xs-12 col-sm-4 pie__newsletter text-center">
						<p><b>Suscríbase para más información de nuestros cursos</b></p>			    			
						<form class="form-inline">
							<input type="mail" class="form-control" placeholder="E-mail">
							<div class="clearfix visible-xs"></div>
							<button type="submit" class="btn-azul">SUSCRIBIRME</button>
						</form>
			    	</div>
			    	<div class="col-xs-12 col-sm-3 col-md-4 col-lg-3 col-lg-offset-1 text-center pie__social">
			    		<p><b>Síganos en</b></p>
	                    <ul class="list-inline">
							<li><a href="<?=Empresa::$redes['tw']?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="<?=Empresa::$redes['fb']?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="<?=Empresa::$redes['yt']?>"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
	                    </ul>

			    	</div>
		    	</div>
		    	<div class="clearfix visible-xs"></div>
				<div class="pie__copyright">
					<div class="container">
			    		<div class="row">
							<div class="col-xs-12 col-md-6">
								<div class="pie__legales">
									<small>2017 © Todos los derechos reservados</small>
								</div>
							</div>
							<div class="col-xs-12 col-md-6">
								<a class="synapsis" href="http://synapsis.com.ar/" target="_blank">Synapsis</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<?php if (SECCION != 'home') {
			echo'</body>';
		} ?>

		<?php if (SECCION == 'proyecto_resultado') { 
					Plugins::activar('owlCarousel'); 
				}
		?>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/dropdown.min.js"></script>

		<?php
			Plugins::cargar();
			$main_js = $minified->minify('js/main.js','js/main.min.js');
			echo '<script src="'.$main_js.'?v='. filemtime(BASE_PATH.$main_js) .'"></script>'. PHP_EOL; 
		?>
	
	</html>