<?php 

class Facebook{

	/*
	Atributos
	 */
	public $nombre;
	public $edad;
	private $pass;

	/*
	Metodos
	 */
	
	public function __construct($nombre,$edad,$pass)
	{
		# code...
		$this->nombre = $nombre;
		$this->edad = $edad;
		$this->pass = $pass;
	}

	public function verInformacion()
	{
		# code...
		echo "Nombre: " . $this->nombre . "</br>";
		echo "Edad: " . $this->edad . "</br>";
		self::cambiarPass("00000");
		echo "Password: " . $this->pass . "</br>";
	}

	private function cambiarPass($pass)
	{
		# code...
		$this->pass = $pass;
	}

}

$facebook = new Facebook("Jonathan",30,12345);

$facebook->verInformacion();

 ?>