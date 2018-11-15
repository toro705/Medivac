<?php

Class Curso extends Modelo{

	const CAT_PUBLICO_GRAL   = 'Publico general';
	const CAT_PERSONAL_SALUD = 'Personal de salud';
	const CAT_EMPRESA        = 'Empresa';

	static $categorias = array(
		self::CAT_PUBLICO_GRAL   => 'Público general',
		self::CAT_PERSONAL_SALUD => 'Personal de la salud',
		self::CAT_EMPRESA        => 'Empresa',
	);

	public function url(){
		return $this->url = url('curso', $this);
	}

	public function url_categoria(){
		switch($this->categoria){
			case Curso::CAT_PUBLICO_GRAL:
				$seccion = 'cursos-general';
				break;

			case Curso::CAT_PERSONAL_SALUD:
				$seccion = 'cursos-salud';
				break;

			case Curso::CAT_EMPRESA:
				$seccion = 'cursos-empresa';
				break;
		}
		return $this->url = url($seccion);
	}

	public function fechas(){
		return $this->fechas = Curso_fecha::obtener(array('curso'=>$this->id, 'con-disponibilidad' => true));
	}

	public function foto(){
		return $this->foto = Foto::obtener(array('nombre' => 'foto_listado'), array(
			'medidas' => array(
				array(
					'ancho' 		=> 730,
					'alto'  		=> 550,
					'src_default'  	=> '',
				),
				array(
					'ancho' 		=> 360,
					'alto'  		=> 271,
					'src_default'  	=> '',
				),
			),
			'controlador' => array(
				'nombre' => 'cursos',
				'id' 	=> $this->id
			),
		));
	}

	public function clase(){
		switch($this->categoria){
			case Curso::CAT_PUBLICO_GRAL:
				return 'publico-general';

			case Curso::CAT_PERSONAL_SALUD:
				return 'personal-salud';

			case Curso::CAT_EMPRESA:
				return 'empresa';
		}
	}

	public function fecha_actual(){
		return $this->fecha_actual = reset($this->fechas);
	}

	public function con_fechas(){
		return $this->con_fechas = count($this->fechas) > 1;
	}

	/** Constructor
	* @param array Recibe todos los datos con los que se va a construir el objeto
	*
	*/
	function __construct($datos){

		$this->id = $datos->id;
		
		$this->nombre    = $datos->nombre;
		$this->destinado = $datos->destinado;
		$this->duracion  = $datos->duracion_corta;
		$this->temario   = $datos->temario;
		$this->texto     = $datos->texto;
		$this->costo     = $datos->costo;
		$this->costonum  = $datos->costonum;
		$this->lugar     = $datos->lugar;
		$this->incluye   = $datos->incluye;

		$this->costoanticipado = $datos->costoanticipado;
		$this->costoanticipadonum = $datos->costoanticipadonum;

		$this->categoria = $datos->categoria;
		$this->online = (bool) $datos->online;
	}


	/** Construye el SQL para cada filtro
	*
	*/
	protected static function filtro($tabla, $tipo, $dato = null){


		// Sobreescribo o agrego filtros
		$filtro = parent::filtro($tabla, $tipo, $dato);
		switch($tipo){
			case 'categoria':
				if(in_array($dato, array(
					Curso::CAT_PUBLICO_GRAL, 
					Curso::CAT_PERSONAL_SALUD, 
					Curso::CAT_EMPRESA))){
					$filtro = array(
						'from'  => 'JOIN fechas_cursos ON fechas_cursos.cursos_id = '.$tabla.'.id',
					'where' => 'DATE(fechas_cursos.fecha) >= DATE(NOW()) AND '.$tabla.'.categoria = "'.$dato.'"',
					'group_by' => $tabla.'.id',
					'order' => 'fechas_cursos.fecha ASC',
					);
				}
				break;

			// TODO: Revisar que esto funcione
			case 'proximos':
				$filtro = array(
					'from'  => 'JOIN fechas_cursos ON fechas_cursos.cursos_id = '.$tabla.'.id',
					'where' => 'DATE(fechas_cursos.fecha) >= DATE(NOW()) AND '.$tabla.'.categoria != "'.Curso::CAT_EMPRESA.'"',
					'group_by' => $tabla.'.id',
					'order' => 'fechas_cursos.fecha ASC',
				);
				if($dato){
					$filtro['limit'] = intval($dato);
				}
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

		return parent::obtener($filtros, $dato, 'Curso', 'cursos');
	}
}