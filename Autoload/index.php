<?php 


	function autoload($clase)
	{
		# code...
		include "clases/" . $clase . ".php";
	}
	
	spl_autoload_register('autoload');

	Persona::mostrar("Hola Mundo");
	echo "<br>";
	Auto::mostrar('Mi Auto es Nuevo');

	
 ?>