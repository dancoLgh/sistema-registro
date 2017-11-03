<?php
class MvcController{

	#LLAMADA A LA PLANTILLA
	#-------------------------------------

	public function pagina(){	
		
		include "views/template.php";
	
	}

	#ENLACES
	#-------------------------------------

	public function enlacesPaginasController(){

		if(isset( $_GET['action']))
		{
			
			$enlaces = $_GET['action'];
		
		}

		else{

			$enlaces = "index";
		}

		$respuesta = Paginas::enlacesPaginasModel($enlaces);

		include $respuesta;

	}

	#REGISTRO DE USUARIOS
	#----------------------------------------------------------
	
	public function registroUsuarioController()
	{
		if(isset($_POST["usuarioRegistro"]))
			{

				#preg_match=es para hacer una comparacion con una exprecion rejular 
				
				if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["usuarioRegistro"])&&
				   preg_match('/^[a-zA-Z0-9]+$/', $_POST["passwordRegistro"])&&
				   preg_match('/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,4})$/', $_POST["emailRegistro"]))
				{	

					$encriptar = crypt($_POST["passwordRegistro"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

						$datosController = array("usuario"  =>$_POST["usuarioRegistro"],
												 "password"=>$encriptar,
												 "email"   =>$_POST["emailRegistro"]);							
						
						$respuesta = Datos::registroUsuarioModel($datosController, "usuario");
						

							if ($respuesta=="success")
							{

								 header("location:index.php?action=ok");
							}

							else if ($respuesta=="error") 
							{
								header("location:index.php?action=error_registro");
							}
							
				
				}
				else
				{
				 header("location:index.php?action=error_registro");
				} 
					

			}	
	}	
	#IGRESO DE USUARIOS
	#----------------------------------------------------------
	
	public function ingresoUsuarioController()
	{
			if(isset($_POST["usuarioIngreso"]))
			{

				if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["usuarioIngreso"])&&
				   preg_match('/^[a-zA-Z0-9]+$/', $_POST["passwordIngreso"]))
				{	
					

					$datosController = array("usuario" =>$_POST["usuarioIngreso"],
											 "password"=>$_POST["passwordIngreso"]);							
					
					$respuesta = Datos::ingresoUsuarioModel($datosController, "usuario");
					
					

					if ($respuesta["nombre_usuario"] == $_POST["usuarioIngreso"] && $respuesta["password"] == $_POST["passwordIngreso"])
					{
							session_start();

							$_SESSION["validar"] = true;

							header("location:index.php?action=usuarios");

					}

					else
					{
							header("location:index.php?action=fallo");

					}

				}

				else
					{
							header("location:index.php?action=fallo");

					}	
			}	
	}
	#VISTA DE USUARIOS EN EL PANEL
	#----------------------------------------------------------		
		public function vistaUsuarioPanelController()
		{
			$respuesta=Datos::vistaUsuarioPanelModel("usuario");
			echo $respuesta["nombre_usuario"];

		}

	#VISTA DE USUARIOS
	#----------------------------------------------------------		

	public function vistaUsuarioController()
	{
		$respuesta =Datos::vistaUsuarioModel("usuario");
		
		foreach ($respuesta as $row => $item) 

		{

			echo'<tr>
				<td>'.$item["nombre"].'</td>
				<td>'.$item["apellido"].'</td>
				<td>'.$item["nombre_usuario"].'</td>
				<td><a class="edita-a" href="index.php?action=editar&id='.$item["id_user"].'"><i class="fa fa-pencil" aria-hidden="true"></i></a>
					<a class="elimina-a" href="index.php?action=usuarios&idBorrar='.$item["id_user"].'"><i class="fa px-3 btn fa-trash-o" aria-hidden="true"></i>
						

					
									

				</td>


				';
		}
		
	}

	#VISTA DE CONDUCTORES
	#----------------------------------------------------------		

	public function vistaConductorController()
	{
		$respuesta =Datos::vistaConductorModel("conductor");
		
		foreach ($respuesta as $row => $item) 

		{

			echo'<tr>
				<td>'.$item["primer_nombre"].' '.$item["segundo_nombre"].'</td>
				<td>'.$item["apellido_paterno"].'</td>
				<td>'.$item["apellido_materno"].'</td>
				<td>'.$item["numero_documento"].'</td>
				<td>
					
				<a class="edita-a px-3" href="index.php?action=usuarios&idBorrar='.$item["id_conductor"].'"><i class="fa fa-eye" aria-hidden="true"></i>	

				<a class="edita-a" href="index.php?action=editar&id='.$item["id_conductor"].'"><i class="fa fa-pencil" aria-hidden="true"></i></a>

				<a class="elimina-a" href="index.php?action=usuarios&idBorrar='.$item["id_conductor"].'"><i class="fa px-3 btn fa-trash-o" aria-hidden="true"></i>
						

					
									

				</td>


				';
		}
		
	}

	#EDITAR DE USUARIOS
	#----------------------------------------------------------		

	public function editarUsuarioController()
	{
		$datosController =$_GET["id"];
		$respuesta = Datos::editarUsuarioModel($datosController, "usuario");
		
		echo '<div class="container margen-top">
 	
 	<div class="row  mt-5 ">
 		<div class="col color-gris">
 			<form method="post" >

 				<input type="hidden" value="'.$respuesta["id_user"].'" name="idEditar">
						<h1 class="text-center display-4 mt-4">EDITAR USUARIO</h1>
 				<div class="form-grup row justify-content-center">
					<div class="col-6">
						<label for="usuario">Nombre Nuevo</label>
 						<input type="text" class="form-control"  value="'.$respuesta["usuario"].'" name="usuarioEditar" id="usuario" required>
 					</div>
 				</div>

 				<div class="form-grup row justify-content-center mt-2">
 					<div class="col-6">
						
						<label for="contraseña">Contraseña Neva</label>
 						<input type="text" class="form-control"  placeholder="Contraseña nueva, Minimos 6 Caracteres, incluir numero(s) y mayuscula  "name="passwordEditar" id="contraseña" autocomplete="new-password"  required>
 					</div>	
 				</div>

 				<div class="form-grup row justify-content-center mt-2">
 					<div class="col-6">
						
						<label for="email">Correo Nuevo </label>
 						<input type="email" class="form-control" value="'.$respuesta["email"].'" name="emailEditar" id="email"  required>
 					</div>
 				</div>

 				<div class="row mt-2 mb-2 justify-content-center ">

 					<div class="col-3 mt-2 mb-2 ">

 						<button class="btn btn-color" type="submit">Actualizar</button>
			</form>	
					</div>

					<div class="col-3 ">

 						<form action="index.php?action=usuarios" method="post"><button class="btn px-4 btn-color mt-2" type="submit" >Volver</button></form>
		
 					</div>
 						
 				</div>	
				
 		</div>
		
 	</div>';



	}
	#ACTUALIZAR DE USUARIOS
	#----------------------------------------------------------	
	public function actualizarUsuarioController()

	{

			if (isset($_POST["usuarioEditar"]))
			{
				if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["usuarioEditar"])&&
				   preg_match('/^[a-zA-Z0-9]+$/', $_POST["passwordEditar"])&&
				   preg_match('/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,4})+$/', $_POST["emailEditar"]))
				{	

					

						$encriptar = crypt($_POST["passwordEditar"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
						$datosController = array("usuario"  => $_POST["usuarioEditar"],
												 "id"       => $_POST["idEditar"],
												 "password" => $encriptar,
												 "email"    => $_POST["emailEditar"], );
					

						$respuesta = Datos::actualizarUsuarioModel($datosController, "usuario");


						if($respuesta == "success")
						{

							header("location:index.php?action=actulizacion_correcta");

						}

						else  if($respuesta == "error")
						{

								header("location:index.php?action=actulizacion_error");
						}	
				}	

				else
						{

								header("location:index.php?action=actulizacion_error2");
						}	
			}
	}	


		#BORRAR USUARIO
	#------------------------------------
	
	public function borrarUsuarioController(){

		if(isset($_GET["idBorrar"])){

			$datosController = $_GET["idBorrar"];
			
			$respuesta = Datos::borrarUsuarioModel($datosController, "usuario");

			if($respuesta == "success"){

				header("location:index.php?action=eliminado_correcto");

			
			}
			else if ($respuesta == "error") {


				header("location:index.php?action=eliminado_error");
				
			}

		}

	}
	


	}
?>