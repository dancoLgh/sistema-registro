<?php 

class Paginas{
	
	public function enlacesPaginasModel($enlaces){


		if($enlaces == "usuarios" ||  $enlaces == "conductores" ||  $enlaces == "editar" || $enlaces == "registroConductor" || $enlaces == "salir"){

			$module =  "views/modules/".$enlaces.".php";
		
		}
			else if($enlaces == "ingresar"){

			$module =  "views/ingresar.php";
		
		}

		else if($enlaces == "index"){

			$module =  "views/modules/conductores.php";
		
		}
		else if($enlaces == "error_registro"){

			$module =  "views/modules/registro.php";
		
		}

		else if($enlaces == "ok"){

			$module =  "views/modules/registro.php";
		
		}
		else if($enlaces == "fallo"){

			$module =  "views/ingresar.php";
		
		}
		else if($enlaces == "actulizacion_correcta"){

			$module =  "views/modules/usuarios.php";
		
		}
		else if($enlaces == "actulizacion_error"){

			$module =  "views/modules/usuarios.php";
		
		}
		else if($enlaces == "eliminado_correcto"){

			$module =  "views/modules/usuarios.php";
		
		}
		else if($enlaces == "eliminado_error"){

			$module =  "views/modules/usuarios.php";
		
		}

		else{

			$module =  "views/modules/registro.php";

		}
		
		return $module;

	}

}

?>