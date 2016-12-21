<?php 

//Clase de Constructores y Destructores
//__construct
//__destruct
//Ejercicio de Loteria

class Loteria{

	//Atributos
	public $numero;
	public $intentos;
	public $resultado = false;
	//Metodos
	public function __construct($numero,$intentos){

		$this->numero = $numero;
		$this->intentos = $intentos;

	}

	public function sortear()
	{
		# code...
		$minimo = $this->numero / 2;
		$maximo = $this->numero * 2;
		for ($i=0; $i < $this->intentos; $i++) { 
			# code...
			$int = rand($minimo,$maximo);
			self::intentos($int);
		}
	}

	public function intentos($int)
	{
		# code...
		if ($int == $this->numero) {
			# code...
			echo "<b>" . $int . " == " . $this->numero . "</b></br>";
			$this->resultado = true;
		}else{
			echo $int . " != " . $this->numero . "</br>";
		}
	}

	public function __destruct()
	{
		# code...
		if ($this->resultado) {
			# code...
			echo "Felicidades, has ganado!";
		}else{
			echo "Que lastima, hasperdido!";
		}

	}

}

$loteria = new Loteria(10,10);

$loteria->sortear();
 ?>