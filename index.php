<?php

	class Persona{

		//Atributos
		
		public $nombre = array();
		public $apellido = array(); 
		
		//Metodos
		
		public function guardar($nombre,$apellido){
			$this->nombre[] = $nombre;
			$this->apellido[] = $apellido;
		}

		public function mostrar(){
			for ($i=0; $i < count($this->nombre); $i++) { 
				# code...
				self::formato($this->nombre[$i],$this->apellido[$i]);
			}
		}

		public function formato($nombre,$apellido){
			echo "NOMBRE: ". $nombre . " /APELLIDO: ". $apellido . "</br>";
		}

		public function hablar($mensaje){
			echo $mensaje;
		}
	}

$persona = new Persona();
$persona->guardar("Jonathan","Duran");
$persona->guardar("Samuel","Duran");
$persona->guardar("Carmen","Segovia");
$persona->guardar("Pedro","Perez");
$persona->mostrar();

?>