<?php 

	class Vehiculo{

		/*
		Atributos
		 */
		public $motor = false;
		public $marca;
		public $color;
		/*
		Metodos
		 */
		protected function estado()
		{
			# code...
			if ($this->motor) {
				# code...
				echo ">>ESTADO<< El motor esta encendido </br>";
			}else{
				echo ">>ESTADO<< El motor esta pagado </br>";
			}
		}

		public function encender()
		{
			# code...
			if ($this->motor) {
				# code...
				echo "Cuidado!, el motor ya esta encendido </br>";
			}else{
				echo "El motor esta encendido </br>";
				$this->motor = true;
			}
		}
	}

	class Moto extends Vehiculo{

		public function estadoMoto()
		{
			# code...
			Vehiculo::estado();
		}

	}

	class CuatriMoto extends Moto{

	}


$vehiculo = new Vehiculo();
echo "Clase Vehiculo </br>";
//$vehiculo->estado();
//$vehiculo->encender();
//$vehiculo->estado();
echo "=======</br>";

echo "Clase Moto </br>";
$moto = new Moto();
$moto->estadoMoto();
$moto->encender();
$moto->estadoMoto();
echo "=======</br>";

echo "Clase CuatriMoto </br>";
$cuatrimoto = new CuatriMoto();
$cuatrimoto->estadoMoto();
$cuatrimoto->encender();
echo "=======</br>";
 ?>