<?php 

	class Pagina{

		/*
		Atributos
		 */
		public $nombre = "BlogClon";
		public static $url = "www.blogclon.com.ve";
		/*
		Methodos
		 */
		public function bienvenido()
		{
			# code...
			echo "Bienvenido a " . $this->nombre;
			echo "</br>";
			echo "Vísitanos a " . Pagina::$url;
		}

		public static function bienvenido2()
		{
			# code...
			echo "Bienvenido2 </br>";
		}

		public static function bienvenido3()
		{
			# code...
			echo "Bienvenido 3 a " . Pagina::$url . "</br>";
		}
	}

	class web extends Pagina{

	}


//$pagina = new Pagina();
//$pagina->bienvenido();

Pagina::bienvenido2();
Web::bienvenido3();
 ?>