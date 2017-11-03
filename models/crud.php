<?php 
	
	require_once "conexion.php";

class Datos extends Conexion{

	#REGISTRO DE USUARIOS
	#-------------------------------------
	public function registroUsuarioModel($datosModel, $tabla){

		

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (usuario, password, email) VALUES (:usuario,:password,:email)");	

		
		$stmt->bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);
		$stmt->bindParam(":password", $datosModel["password"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datosModel["email"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "success";

		}

		else{

			return "error";

		}

		$stmt->close();

	}

	#INGRESO DE USUARIOS
	#-------------------------------------
	public function ingresoUsuarioModel($datosModel, $tabla){

		

		$stmt = Conexion::conectar()->prepare(" SELECT nombre_usuario, password FROM $tabla WHERE nombre_usuario=:usuario");	

		
		$stmt->bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);
		$stmt->execute();

		return $stmt -> fetch();

		$stmt->close();

	}

	#VISATA DE USUARIOS PANEL
	#-------------------------------------
	public function vistaUsuarioPanelModel($tabla)
	{
		$stmt = Conexion::conectar()->prepare(" SELECT nombre_usuario FROM $tabla ");
		$stmt->execute();
		 return $stmt -> fetch();
		 $stmt->close();



	}
	#VISATA DE USUARIOS
	#-------------------------------------
	public function vistaUsuarioModel($tabla)
	{

		

		$stmt = Conexion::conectar()->prepare(" SELECT id_user,nombre,apellido,nombre_usuario FROM $tabla");	
		$stmt->execute();

		return $stmt -> fetchAll();

		$stmt->close();

	}
		#VISATA DE CONDUCTOR
	#-------------------------------------
	public function vistaConductorModel($tabla)
	{

		

		$stmt = Conexion::conectar()->prepare(" SELECT id_conductor,primer_nombre,segundo_nombre,apellido_paterno,apellido_materno,numero_documento FROM $tabla");	
		$stmt->execute();

		return $stmt -> fetchAll();

		$stmt->close();

	}

	#EDITAR DE USUARIOS
	#-------------------------------------
	
	public function editarUsuarioModel($datosModel, $tabla){
	
		$stmt = Conexion::conectar()->prepare(" SELECT id_user, usuario, password, email FROM $tabla WHERE id_user =:id"  );	


		$stmt->bindParam(":id", $datosModel, PDO::PARAM_INT);
		$stmt->execute();

		return $stmt -> fetch();

		$stmt->close();



	}

	#ACTUALIZAR DE USUARIOS
	#-------------------------------------
		public function actualizarUsuarioModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET usuario = :usuario, password = :password, email = :email WHERE id_user = :id");

		$stmt->bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);
		$stmt->bindParam(":password", $datosModel["password"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datosModel["email"], PDO::PARAM_STR);
		$stmt->bindParam(":id", $datosModel["id"], PDO::PARAM_INT);

		if($stmt->execute()){

			return "success";

		}

		else{

			return "error";

		}

		$stmt->close();

	}



	#BORRAR USUARIO
	#------------------------------------
	public function borrarUsuarioModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_user= :id");
		$stmt->bindParam(":id", $datosModel, PDO::PARAM_INT);

		if($stmt->execute()){

			return "success";

		}

		else{

			return "error";

		}

		$stmt->close();

	}

}

	

 ?>