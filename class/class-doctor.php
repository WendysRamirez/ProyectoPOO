<?php

	class Doctor extends  Empleado{

		private $codigoDoctor;
		private $especialidad;
		private $area;
	public function __construct($nombre,
					$apellido,
					$edad,
					$id,
					$estado,
					$genero,
					$direccion,
					$telefono,
					$fechaIngreso,
					$area,
					$turnoTrabajo,
					$sueldos){
			parent::__construct($nombre,
					$apellido,
					$edad,
					$id,
					$estado,
					$genero,
					$direccion,
					$telefono,
					$fechaIngreso,
					$area,
					$turnoTrabajo,
					$sueldos);
			$this->codigoDoctor = $codigoDoctor;
			$this->especialidad = $especialidad;
			$this->area = $area;
		}
		public function getCodigoDoctor(){
			return $this->codigoDoctor;
		}
		public function setCodigoDoctor($codigoDoctor){
			$this->codigoDoctor = $codigoDoctor;
		}
		public function getEspecialidad(){
			return $this->especialidad;
		}
		public function setEspecialidad($especialidad){
			$this->especialidad = $especialidad;
		}
		public function getArea(){
			return $this->area;
		}
		public function setArea($area){
			$this->area = $area;
		}
		public function toString(){
			return parent::toString()."CodigoDoctor: " . $this->codigoDoctor . 
				" Especialidad: " . $this->especialidad . 
				" Area: " . $this->area;
		}
	}
?>