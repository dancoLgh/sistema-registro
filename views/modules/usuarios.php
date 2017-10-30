<?php 

	session_start();
	if(!$_SESSION["validar"])
	{

		header("location:index.php?action=ingresar");
		exit ();
	}



?>
<div class="container margen-top"">
    <div class="row color-gris">
        <div class="col panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title text-center display-4 mt-5 ">Usuarios</h3>
						
						<?php 
								if(isset($_GET["action"]))
							{

									if($_GET["action"]=="eliminado_correcto")
									{

									echo 	'
												
													<div class="row justify-content-end">
														<div class="alert col alert-success  text-center mt-1 id="alert">
															<strong>AVISO</strong> Eliminado Correctamente  :)
															<button class="close"  type="button" data-dismiss="alert"><span>&times;</span></button>			
														</div>
													</div>
		 									';

									}

							}
								if(isset($_GET["action"]))
							{

									if($_GET["action"]=="eliminado_error")
									{

									echo 	'
												
													<div class="row justify-content-end">
														<div class="alert col alert-danger  text-center mt-1 id="alert">
															<strong>AVISO</strong> Error al Eliminar :(
															<button class="close"  type="button" data-dismiss="alert"><span>&times;</span></button>			
														</div>
													</div>
		 									';

									}

							}
							if(isset($_GET["action"]))
							{

									if($_GET["action"]=="actulizacion_correcta")
									{

									echo 	'
												
													<div class="row justify-content-end">
														<div class="alert col alert-success  text-center mt-1 id="alert">
															<strong>AVISO</strong> Actulizacion correctar :)
															<button class="close"  type="button" data-dismiss="alert"><span>&times;</span></button>			
														</div>
													</div>
		 									';

									}

									else if($_GET["action"]=="actulizacion_error")
									{

									echo 	'
												
													<div class="row justify-content-end">
														<div class="alert col alert-danger  text-center mt-1 id="alert">
															<strong>AVISO</strong> Error la Actulizar :(
															<button class="close"  type="button" data-dismiss="alert"><span>&times;</span></button>			
														</div>
													</div>
		 									';

									}


							}
?>



                <div class="pull-right">
                    <button class="btn btn-color mt-3 mb-2 btn-filter">Filtro <i class="fa fa-filter" aria-hidden="true"></i></button>
                </div>
            </div>
            <table class="table table-primary table-hover text-center table-sm table-responsive ">
                <thead >
                    <tr class=" filters">           
                        <th><input type="text" class="form-control text-center" placeholder="Nombre" disabled></th>
                        <th><input type="text" class="form-control text-center" placeholder="Apellido" disabled></th>
                        <th><input type="text" class="form-control text-center" placeholder="Nombre de usuario" disabled></th>

                    </tr>
                </thead>
                <tbody>
                    <?php 
						$vista = new MvcController();
						$vista -> vistaUsuarioController();
						$vista -> borrarUsuarioController();
		 				?>
                </tbody>
            </table>
        </div>
    </div>
</div>


			
			


	
