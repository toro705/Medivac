<section id="filtro-cursos">
	<div class="container">
		<form action="busqueda" method="post" class="row">
			<div class="col-md-2">
				<p>CURSOS PARA</p>				
			</div>
			<div class="col-md-2">
				 <div class="form-group select">
				 	<select name="categoria" class="form-control">
					 	<option>Público</option>
					 	<?php
					 	foreach(Curso::$categorias as $categ_name => $categ_value){
					 		echo '<option value="'.$categ_name.'">'.$categ_value.'&nbsp; &nbsp; </option>'. PHP_EOL;
					 	}?>
				 	</select>
				 </div>
			</div>
			<div class="col-md-3">
				 <div class="form-group select">
				 	<select disabled name="curso" class="form-control">
				 		<option>Temática</option>
				 	</select>
				 </div>
				
			</div>
			<div class="col-md-2">
				<div class="calendar form-group text-left">
				 	<input type="text" class="form-control datepicker" id="salida" placeholder="Fecha" data-date-format="dd/mm/yyyy">
				 	<i class="icn icn-calendar"></i>
				</div>
			</div>
			<div class="col-md-2">
				<button type="submit" class="btn-azul">MÁS INFO</button>
			</div>
		</form>
	</div>
</section>
<?php 	Plugins::activar('datepicker'); ?>