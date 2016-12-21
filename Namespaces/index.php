<?php 


	//require_once "api/Models/Persona.php";
	//require_once "api/Controller/PersonaController.php";

	spl_autoload_register(function($clase){

		$ruta = "api/" .  str_replace("\\", "/", $clase) . ".php";

		if (is_readable($ruta)) {
			# code...
			require_once $ruta;
		}else{
			echo "El Archivo no Existe";
		}
	});

	Models\Persona::hola();
	Controller\PersonaController::hola();
 ?>