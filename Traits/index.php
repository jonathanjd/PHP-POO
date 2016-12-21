<?php 


	trait PersonaTrait{

		public $nombre;

		public function mostrarNombre()
		{
			# code...
			echo $this->nombre . self::mostrarMensaje();
		}

		abstract function asignarNombre($nombre);

	}

	trait TrabajadorTrait{

		protected function mostrarMensaje()
		{
			# code...
			return " y soy Trabajador";
		}

	}

	class Persona{

		use PersonaTrait, TrabajadorTrait;

		public function asignarNombre($nombre)
		{
			# code...
			$this->nombre = $nombre;
		}
	}

	$persona = new Persona();
	$persona->asignarNombre("Jonathan Duran");
	$persona->mostrarNombre();

 ?>