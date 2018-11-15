<?php

Class Novedad extends Modelo{

	public function url(){
		return $this->url = url('novedad', $this);
	}

	public function foto(){
		return $this->foto = Foto::obtener(array('nombre'=>'foto'), array(
			'medidas' => array(
				array(
					'ancho' 		=> 240,
					'alto'  		=> 121,
					'src_default'  	=> '',
				),
				array(
					'ancho' 		=> 211,
					'alto'  		=> 140,
					'src_default'  	=> '',
				),
				array(
					'ancho' 		=> 715,
					'alto'  		=> 475,
					'src_default'  	=> '',
				),
			),
			'invertir_medidas' => true,
			'controlador' => array(
				'nombre' => 'noticias',
				'id' 	=> $this->id
			),
		));
	}

	public function foto_grande(){
		$foto = null;
		if($this->foto AND $this->foto->src('715x475')){
			$foto = clone($this->foto);
			$foto->medidaDefault('715x475');
		}
		return $this->foto_grande = $foto;
	}


	/** Constructor
	* @param array Recibe todos los datos con los que se va a construir el objeto
	*
	*/
	function __construct($datos){

		$this->id = $datos->id;
		$this->fecha = new Fecha($datos->fecha);

		$this->titulo = $datos->titulo;
		$this->bajada = $datos->intro;
		$this->cuerpo = $datos->cuerpo;
	}


	/** SQL por defecto
	* Defino los valores por defecto para todas las cláusulas
	*/
	protected static function sql_defecto($tabla, $clausula, $sentencias){
		$sql = parent::sql_defecto($tabla, $clausula, $sentencias);
		switch($clausula){
			case 'order' :
				$sql = 'ORDER BY '.(!empty($sentencias) ? implode(',', $sentencias).',' : '').' '.$tabla.'.fecha DESC, '.$tabla.'.id DESC';
				break;
		}

		return $sql;
	}


	/** Obtener elementos filtrados desde la BD
	* @param filtros Puede ser: todos, id o un array con cualquiera de esos filtros
	*
	*/
	static function obtener( $filtros = array('todas' => ''), $dato = null, $modelo = '', $tabla = ''){
		
		$filtros = !is_array($filtros) ? array($filtros => $dato) : $filtros;

		return parent::obtener($filtros, $dato, 'Novedad', 'noticias');
	}
	
}