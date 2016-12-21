}<?php 

	interface Base{
		public function setEdad($edad);
		public function getEdad();
	}

	abstract class Molde implements Base{

		abstract public function ingresarNombre($nombre);
		abstract public function obtenerNombre();

		private $edad;

		public function setEdad($edad)
		{
			# code...
			$this->edad = $edad;
		}

		public function getEdad()
		{
			# code...
			echo $this->edad;
		}

	}

	class Persona extends Molde{

		private $mensaje = "Mensaje de una Persona";
		private $nombre;

		public function mostrar()
		{
			# code...
			echo $this->mensaje;
		}

		public function ingresarNombre($nombre)
		{
			# code...
			$this->nombre = $nombre;
		}

		public function obtenerNombre()
		{
			# code...
			echo $this->nombre;
		}

	}


	$persona = new Persona();
	$persona->ingresarNombre("Jonathan");
	$persona->obtenerNombre();
	$persona->setEdad(5);
	$persona->getEdad();

 ?>