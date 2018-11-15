<?php

Class Curso_fecha extends Modelo{


	public function suscripciones(){
		return $this->suscripciones = Suscripcion::obtener('curso_fecha', $this->id);
	}


	/** Constructor
	* @param array Recibe todos los datos con los que se va a construir el objeto
	*
	*/
	function __construct($datos){

		$this->id = $datos->id;

		$this->fecha = new Fecha($datos->fecha);
		$this->fecha_renovacion = new Fecha($datos->fecha_renovacion);
		$this->fecha_limite_anticipado = new Fecha($datos->fecha_limite_anticipado);

		$this->disponibilidad = intval($datos->disponibilidad);
	}

	public function total_suscripciones(){
		include('config/db.php');

		$sus = $mysqli->query("SELECT SUM(lugares) AS s FROM suscriptores WHERE fechascursoid='".$this->id."'");
		$suscriptos = $sus->fetch_object();
		if (!$suscriptos) {
			$suscriptos = 0;
		} else {
			$suscriptos = $suscriptos->s;
		}

		return $this->total_suscripciones = intval($suscriptos);
	}

	public function vacantes(){
		return $this->vacantes = $this->disponibilidad - $this->total_suscripciones;
	}


	/** Construye el SQL para cada filtro
	*
	*/
	protected static function filtro($tabla, $tipo, $dato = null){


		// Sobreescribo o agrego filtros
		$filtro = parent::filtro($tabla, $tipo, $dato);
		switch($tipo){
			case 'curso':
				$filtro = array(
					'where' => $tabla.'.cursos_id = '.intval($dato)
				);
				break;

			case 'con-disponibilidad':
				$filtro = array(
					'select'   => 'SUM(suscriptores.lugares) AS suscriptos',
					'from'     => 'JOIN suscriptores ON suscriptores.fechascursoid = '.$tabla.'.id',
					'where'     => 'DATE('.$tabla.'.fecha) >= DATE(NOW())',
					'group_by' => $tabla.'.id',
					'having'   => 'disponibilidad > suscriptos',
					'order' => $tabla.'.fecha ASC',
				);
				break;
		}

		return $filtro;
	}


	/** Obtener elementos filtrados desde la BD
	* @param filtros Puede ser: todos, id o un array con cualquiera de esos filtros
	*
	*/
	static function obtener( $filtros = array('todos' => ''), $dato = null, $modelo = '', $tabla = ''){
		
		$filtros = !is_array($filtros) ? array($filtros => $dato) : $filtros;

		return parent::obtener($filtros, $dato, 'Curso_fecha', 'fechas_cursos');
	}
}