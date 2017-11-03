
<div  class="container-fluid">
            <div class="row">
                <div class="col-sm-3">
                    <div class="nav-side-menu">
                        <div class="brand">
                        	<h3>Bienvenido:<span>
                        		<?php $vistaUsuario = new MvcController();
	$vistaUsuario -> vistaUsuarioPanelController(); ?>
													
											</span></h3>
                        </div>
                        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
                        <div class="menu-list">
                            <ul id="menu-content" class="menu-content collapse out">
                                <li>
                                    	<a href="index.php?action=registroConductor"><i class="fa  fa-user-plus" aria-hidden="true"></i> Agregar</a>
                                </li>

                                <li>
										<a href="#"><i class="fa fa-lg fa-print" aria-hidden="true"></i> Imprimir</a>
								</li>

								<li>
										<a href="index.php?action=conductores"><i class="fa fa-lg fa-bus" aria-hidden="true"></i> Conductores</a>
								</li>
								<li>
										<a href="index.php?action=salir"><i class="fa fa-lg fa-sign-out" aria-hidden="true"></i> Salir</a>
								</li>

                                <li data-toggle="collapse" data-target="#new" class="collapsed">
                                    <a href="#" ><i class=" fa fa-car  "></i><span class="arrow"> Usuario</span> </a>
                                </li>
                                <ul class="sub-menu collapse" id="new">
                                    <li><a href="#"><i class="ml-2 fa fa-car"></i><span> hola</span></a>
                                </li></li>
                                </ul>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9 col-sm-offset-1">
                   