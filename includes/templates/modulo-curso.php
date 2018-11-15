<?php

Plugins::activar('dropdowncustom');

switch($curso->categoria){
	case Curso::CAT_PUBLICO_GRAL:
		$curso_icn = 'general';
		$curso_clase = 'general';
		$curso_categ = 'PÚBLICO GENERAL';
		break;
		
	case Curso::CAT_PERSONAL_SALUD:
		$curso_icn = 'heart';
		$curso_clase = 'salud';
		$curso_categ = 'PERSONAL DE SALUD';
		break;

	case Curso::CAT_EMPRESA:
		$curso_icn = 'building';
		$curso_categ = 'empresas';
		$curso_categ = 'EMPRESAS';
		break;
}?>
<a href="<?= $curso->url ?>" class="js-curso curso <?= $curso_clase ?>" 
	data-id="<?= $curso->id?>" 
	data-precio="<?= $curso->costonum?>" 
	data-precioAnticipado="<?= $curso->costoanticipadonum ?>">
	<div class="curso__img-container" style="background-image: url(<?= $curso->foto ?  $curso->foto->src('360x271') : ''; ?>)">
		<div class="curso__img-container-hover"></div>
		<div class="curso__publico">
			<i class="icn icn-<?= $curso_icn ?>"></i>
			<p><?= $curso_categ ?></p>
		</div>

		<?php if($curso->online){?>
		<div class="curso__online">
			<i class="icn icn-computer"></i>
			<p>ONLINE</p>
		</div>
		<?php } ?>

		<?php if($curso->categoria === Curso::CAT_PERSONAL_SALUD){?>
		<div class="icn icn-authorized"></div>
		<?php } ?>
	</div>
	<div class="curso__detalle-container">
		<div class="curso__detalle-container__titulo">
			<p><?= $curso->nombre ?></p>
		</div>
		<div class="curso__detalle-container__vacantes">
			<p><b>Vacantes del curso:</b> 
			<span class="js-vacantes"><?php if(! $curso->fecha_actual->vacantes){
				echo 'agotadas';
			}elseif($curso->fecha_actual->vacantes == 1){
				echo '1 persona';
			}else{
				echo $curso->fecha_actual->vacantes.' personas';
			}?></span></p>
		</div>
	</div>
	<div class="curso__info">
		<div class="wrapper-dropdowncustom curso__info__fecha <?= $curso->con_fechas ? 'con-fechas' : ''?>" tabindex="1">
			<span class="js-fecha-seleccionada"><?= $curso->fecha_actual->fecha->format('l').' '.$curso->fecha_actual->fecha->format('d/m/Y')?></span>
			<?php if($curso->con_fechas){?>
			<ul class="dropdowncustom">
				<?php foreach($curso->fechas as $fecha){
					echo '<li data-id="'.$fecha->id.'" data-vacantes="'.$fecha->vacantes.'" data-promocion="'.$fecha->promocion.'" class="'.
						($fecha->id == $curso->fecha_actual->id ? 'seleccionada' : '').'">'.
							'<i class="fa fa-check"></i> '.$fecha->fecha->format('l').' '.$fecha->fecha->format('d/m/Y').
						'</li>'. PHP_EOL;
				} ?>
			</ul>
			<?php } ?>
		</div>								
		<div class="curso__info__horario">
			<i class="fa fa-clock-o"></i>
			<p><?= $curso->duracion ?></p>

		</div>
		<div class="clearfix"></div>
	</div>
	<div href="javascript:;" class="js-inscripcion curso__ver">
		<p>
			<b>VER CURSO</b>  AR 
			<span class="js-precioAnticipado" <?= !$curso->fecha_actual->promocion ? 'style="display:none;"' : ''?>>$<?= $curso->costoanticipadonum ?></span>
			<span class="js-precio  <?= $curso->fecha_actual->promocion ? 'con-promocion' : ''?>">$<?= $curso->costonum ?></span>
		</p>
	</div>
</a>