<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Sistema de Registro</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,700i,900" rel="stylesheet">
	<link rel="stylesheet" href="views/modules/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="views/modules/css/navbarEstilo.css">
	<link rel="stylesheet" type="text/css" href="views/modules/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="views/modules/css/estilos.css">
	
	

</head>
<style type="text/css">
	
body{


	 background: url('views/modules/img/fondo.jpg') no-repeat;
	background-size:100% 100%;
 		
}


</style>
<body>

	<?php include "modules/navegacion.php"; ?>


	<section>

		<?php 

		$mvc = new MvcController();
		$mvc -> enlacesPaginasController();

		 ?>

	</section>

	<script src="views/modules/js/jquery-3.2.1.min.js"></script>
	<script src="views/modules/js/popper.min.js"></script>
	<script src="views/modules/js/bootstrap.min.js"></script>
	<script src="views/modules/js/validarRegistro.js"></script>
	<script src="views/modules/js/fitroTabla.js"></script>
</body>
	

</html>