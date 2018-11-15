<?php

Class Suscripcion extends Modelo{


	/** Constructor
	* @param array Recibe todos los datos con los que se va a construir el objeto
	*
	*/
	function __construct($datos){

		$this->id = $datos->id;

		$this->nombre    = $datos->nombre;
		$this->apellido  = $datos->apellido;
		$this->telefono  = $datos->telefono;
		$this->dni       = $datos->dni;
		$this->email     = $datos->email;

		$this->fechaalta = new Fecha($datos->fechaalta);
		$this->mediopago = $datos->mediopago;
		$this->pago      = (bool) $datos->pago;
		$this->asistio   = (bool) $datos->asistio;

		$this->lugares = $datos->lugares;
	}



	/** Construye el SQL para cada filtro
	*
	*/
	protected static function filtro($tabla, $tipo, $dato = null){


		// Sobreescribo o agrego filtros
		$filtro = parent::filtro($tabla, $tipo, $dato);
		switch($tipo){
			case 'curso_fecha':
				$filtro = array(
					'where' => $tabla.'.fechacursoid = '.intval($dato)
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

		return parent::obtener($filtros, $dato, 'Suscripcion', 'suscriptores');
	}
}