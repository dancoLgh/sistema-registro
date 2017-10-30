<?php 

class Conexion
{
	public function conectar ()
	{

		$link = new PDO("mysql:host=localhost;dbname=registro_conductor","root","");
		return $link;

	
	}


}
 ?>