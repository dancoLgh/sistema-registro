 <div class="container margen-top">
 	
 	<div class="row">
 		<div class="col fondo color-gris">
 			<form method="post" >

 				
						<h1 class="text-center display-4 mt-4">INICIO DE SESION</h1>
 				<div class="row justify-content-center mt-4 mb-4">
					<div class="col-6 input-group margin-bottom-sm">
						 <span class="input-group-addon"><i class="fa fa-lg fa-user-circle" aria-hidden="true"></i></span>
 						<input type="text" class="form-control"  placeholder="Usuario" name="usuarioIngreso" id="usuario" required>
 					</div>
 				</div>

 				<div class="form-grup row justify-content-center mt-2 ">

 					<div class="col-6 input-group margin-bottom-sm">
						
						
						<span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
 						<input class="form-control"  type="password" placeholder="Contraseña" name="passwordIngreso" id="contraseña" autocomplete="new-password"  required>
 					</div>	
 				</div>

 				<div class=" form-grup row justify-content-center">

 					<div class="col-6 mt-3 mb-3 ">

 				<button class="btn  btn-color" type="submit">Ingresar</button>
			
					</div>
			
 				</div>	

			</form>		

			

 		</div>
		
 	</div>
<?php 


			$ingreso = new MvcController();
			$ingreso-> ingresoUsuarioController();

			if(isset($_GET["action"]))
		{

			if($_GET["action"]=="fallo")
			{
				echo '<div class="row justify-content-end">
														<div class="alert col alert-danger  text-center mt-1 id="alert">
															<strong>AVISO</strong> Error en la contraseña o usuario :(
															<button class="close"  type="button" data-dismiss="alert"><span>&times;</span></button>			
														</div>
													</div>';

			}

		}
		?>
	



	 