<?php 

	interface Auto{
		public function encender();
		public function apagar();
	}

	interface Gasolina extends Auto{
		public function vaciarTanque();
		public function llenarTanque($cant);
	}

	class Deportivo implements Gasolina{

		private $estado = false;
		private $tanque = 0;

		public function estado()
		{
			# code...
			if ($this->estado) {
				# code...
				echo "El Auto esta Encendido y tiene " . $this->tanque . " Litros de Gasolina." . "<br>";
			}else{
				echo "El Auto esta Apagado <br>";
			}
		}

		public function encender()
		{
			# code...
			if ($this->estado) {
				# code...
				echo "<ALERTA> El Auto ya esta Encendido <br>";
			}else{
				if ($this->tanque <= 0) {
					# code...
					echo "Usted no puede encender el auto porque no tiene Gasolina <br>";
				}else{
					echo "Auto Encendido <br>";
					$this->estado = true;
				}
				
			}
		}

		public function apagar()
		{
			# code...
			if ($this->estado) {
				# code...
				echo "Auto Apagado <br>";
				$this->estado = false;
			}else{
				echo "<ALERTA> El Auto ya esta Apagado!!! <br>";
			}
		}

		public function vaciarTanque()
		{
			# code...
			$this->tanque = 0;
		}

		public function llenarTanque($cant)
		{
			# code...
			$this->tanque = $cant;
		}

		public function usar($km)
		{
			# code...
			if ($this->estado) {
				# code...
				$reducir = $km / 3;
				$this->tanque -= $reducir;
				if ($this->tanque <= 0) {
					# code...
					$this->estado = false;
				}
			}else{
				echo "El Auto esta apagado y no se puede usar";
			}
		}

	}

	$deportivo = new Deportivo();
	$deportivo->llenarTanque(100);
	$deportivo->encender();
	$deportivo->usar(350);
	$deportivo->estado();
 ?>