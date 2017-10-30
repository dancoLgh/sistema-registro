
<?php 

	session_start();
	if(!$_SESSION["validar"])
	{

		header("location:index.php?action=ingresar");
		exit ();
	}


 ?>

 <div class="container margen-top ">
 	
 	<div class="row ">
 		<div class="col color-gris">
 			<form method="post" onsubmit="return validarRegistro()">
 				<div class="row mt-2 ">
				
	 					<div class="col-2  mb-3  ml-2">

							<div class="container-perfil">
								  <img src="views/modules/img/foto-carnet.jpg" alt="Avatar" class="image-perfil rounded" style="width:100%">

								  <div class="middle-perfil">
								    <div class="text-perfil"><a href="" class="edita-foto"><i class="fa fa-camera" aria-hidden="true"></i></a></div>
								  </div>
							</div>
								  	  			 
						</div>

 					<div class="col-9">
 						<h1 class="text-center display-4 mt-4">REGISTRO DE CONDUCTOR</h1>
 					</div>
 					
 				</div>
						
 				<div class="form-grup row justify-content-center">

						<div class="col-6">
							<label for="primerNombreConductor">Primer Nombre</label>	
	 						<input type="text" class="form-control" placeholder="Primer Nombre" maxlength="10" name="primerNombreConductor" id="primerNombreConductor" required>
	 					</div>
	 				
	 					<div class="col-6">
							
							<label for="segundoNombreConductor">Segundo Nombre</label>
	 						<input type="text" class="form-control" placeholder="Segundo Nombre" name="segundoNombreConductor" id="emailRegistro">
	 					</div>
 			
				</div>

 				<div class="form-grup row justify-content-center mt-2">

	 					<div class="col-6">
							
							<label for="apellidoPaternoConductor">Primer Apellido</label>
	 						<input type="text" class="form-control" placeholder="Apellido Paterno" name="apellidoPaternoConductor" id="apellidoPaternoConductor"  required>
	 					</div>
	 					 				
	 					<div class="col-6">
							
							<label for="apellidoMaternoConductor">Segundo Apellido</label>
	 						<input type="text" class="form-control" placeholder="Apellido Materno" name="apellidoMaternoConductor" id="apellidoMaternoConductor" >
	 					</div>
 				</div>


 				<div class="form-grup row justify-content-center mt-2">
 					<div class="col-4">
						<label for="fechaNacimientoConductor">Fecha de Nacimiento</label>
 						<input type="date" class="form-control" name="fechaNacimientoConductor" id="fechaNacimientoConductor"  required>
 					</div>

 					<div class="col-4">
						<label for="documentoConductor" class="mx-3">Número de documento</label>
						<div class="col">
							<div class="input-group">
								<div class="input-group-btn">
									 <select  class="btn btn-color dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" name="Provincia">
									   <div class="dropdown-menu">
									   	  <option >Departamento</option>
								          <option>La paz</option>
								          <option>Santa Cruz</option>
								          <option>Cochabamba</option>
								          <option>Chuquisaca</option>
								          <option>Beni</option>
								          <option>Oruro</option>
								          <option>Pando</option>
								          <option>Potasí</option> 
								          <option>Cochabamba</option>
								        </div>
								       </select>
								</div>
								<input type="numbre" class="form-control" placeholder="Número de C.I" name="documentoConductor" id="documentoConductor"  aria-label="Text input with dropdown button" required>
							</div>
						</div>
 						
 					</div>
 					<div class="col-4">
						
						<label for="telefonoConductor">Teléfono</label>
 						<input type="number" class="form-control" placeholder="Número de Referencia" name="telefonoConductor" id="telefonoConductor"  required>
 					</div>
 				</div>

 				<div class="form-grup row  mt-2">
					
					<div class="col-6">
						<label for="direccionConductor">Dirección</label>
						<div class="">
							<div class="input-group">
								<div class="input-group-btn">
									 <select  class="btn btn-color dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" name="ciudad">
									   <div class="dropdown-menu">
									   	  <option >Ciudad</option>
								          <option>Cochabambaz</option>
								          <option>Quillacollo</option>
								          <option>Vinto</option>
								        </div>
								       </select>
								</div>
								<input type="text" class="form-control" placeholder="Zona, Calle, número de casa" name="direccionConductor" id="direccionConductor"  aria-label="Text input with dropdown button" required>
							</div>
						</div>
 						
 					</div>

						

 					<div class="col-6">
						<label for="direccionReferenciaConductor">Referencia</label>
 						<input type="text" class="form-control" name="direccionReferenciaConductor" placeholder="Referencia: Color de edeficio, al frende de, etc " id="direccionReferenciaConductor"  >
 					</div>

 					
 				</div>

 				<div class="form-grup row justify-content-center mt-3">
	 					<div class="col-4">	
							<label> Tipo de Sangre</label>
	 						<select  class=" form-control" name="tipoSangre">  
					          <option>O+</option>
					          <option>O-</option>
					          <option>A+</option>
					          <option>A-</option>
					          <option>B+</option>
					          <option>B-</option>
					          <option>AB+</option>
					          <option>AB-</option>        
							</select>
	 					</div>
	 					 				
	 					<div class="col-4">
							<label for="cursoConductor">Curso</label>
	 						<input type="text" class="form-control" placeholder="Curso" name="cursoConductor" id="cursoConductor"  required>
	 					</div>

							
	 					<div class=" col-4  align-items-center btn-group mt-4" data-toggle="buttons">
								
							<div class="mt-2"><label class="mx-3 "> Turno: </label></div>
							  <label class="btn btn-color  form-control">
							    <input type="checkbox" checked autocomplete="off"> Mañana
							  </label>

							  <label class="btn btn-color form-control">
							    <input type="checkbox" autocomplete="off"> Tarde
							  </label>

							  <label class="btn btn-color form-control">
							    <input type="checkbox" autocomplete="off"> Noche 
							  </label>
						</div>

 				</div>

 				<div class="row mt-2 mb-2 justify-content-start ">

 					<div class="col-1 mt-2 mb-2 ">

 						<button class="btn btn-color  " type="submit">Registrar</button>
			</form>	
					</div>

					<div class="col-1 ">

 						<form action="index.php?action=usuarios" method="post"><button class="btn btn-color mt-2" type="submit" >Ver Conductores</button></form>

		
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



						

						

						



