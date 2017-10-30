
<?php 

	session_start();
	if(!$_SESSION["validar"])
	{

		header("location:index.php?action=ingresar");
		exit ();
	}


 ?>

 <div class="container margen-top ">
 	
 	<div class="row  ">
 		<div class="col color-gris">
 			<form method="post" onsubmit="return validarRegistro()">
						<h1 class="text-center display-4 mt-4">REGISTRO DE USUARIO</h1>
 				<div class="form-grup row justify-content-center">

					<div class="col-6">
						<label for="usuarioRegistro">Nombre del Usuario</label>	
 						<input type="text" class="form-control" placeholder="Maximo 6 Caracteres" maxlength="10" name="usuarioRegistro" id="usuarioRegistro" required>
 					</div>
 				</div>

 				<div class="form-grup row justify-content-center mt-2">
 					<div class="col-6">
						
						<label for="passwordRegistro">Contraseña del Usuario</label>
 						<input type="password" class="form-control" placeholder="Minimos 6 Caracteres, incluir numero(s) y mayuscula " pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" name="passwordRegistro" id="passwordRegistro" autocomplete="new-password"  required>
 					</div>	
 				</div>

 				<div class="form-grup row justify-content-center mt-2">
 					<div class="col-6">
						
						<label for="emailRegistro">Correo del Usuario</label>
 						<input type="email" class="form-control" placeholder="Escriba correctamente el correo ejemplo@dominio.com" name="emailRegistro" id="emailRegistro"  required>
 					</div>
 				</div>

 				<div class="row mt-2 mb-2 justify-content-center ">

 					<div class="col-3 mt-2 mb-2 ">

 						<button class="btn btn-color" type="submit">Registrar</button>
			</form>	
					</div>

					<div class="col-3 ">

 						<form action="index.php?action=usuarios" method="post"><button class="btn btn-color mt-2" type="submit" >Ver Usuarios</button></form>
		
 					</div>
 						
 				</div>	
				
 		</div>
		
 	</div>
		 	<div class=" row justify-content-center">
 				<?php 
							$registro = new MvcController();
							$registro -> registroUsuarioController();

							if(isset($_GET["action"]))
							{

									if($_GET["action"]=="ok")
									{

									echo 	'
												
														<div class="alert col-4 alert-success  text-center mt-1 id="alert">
															<strong>AVISO</strong> Registro Exitoso	
															<button class="close"  type="button" data-dismiss="alert"><span>&times;</span></button>			
														</div>
													
		 									';

									}

							}

							if(isset($_GET["action"]))
							{

									if($_GET["action"]=="error_registro")
									{

									echo 	'
												
														<div class="alert col-4 alert-danger  text-center mt-1 id="alert">
															<strong>AVISO</strong> Error en el Registro	:(
															<button class="close"  type="button" data-dismiss="alert"><span>&times;</span></button>			
														</div>
													
		 									';

									}

							}

		 			?>
		 		</div>		 		
 </div>



						

						

						



