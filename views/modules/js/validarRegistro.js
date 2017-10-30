/*========================================
=            VALIDAR REGISTRO            =
========================================*/



function validarRegistro()
{

	var usuario = document.querySelector("#usuarioRegistro").value;	
		console.log('usuario', usuario);
	var password = document.querySelector("#passwordRegistro").value;
		console.log('password', password);
	var email = document.querySelector("#emailRegistro").value;
		console.log('email', email);

 /* VALIDAR USUARIO */
 
	 if ( usuario != "")
	 {
	 	
	 	var caracteres = usuario.length;
		var expresion=/^[a-zA-Z0-9]*$/;
	 	if(caracteres > 6)
	 		{
	 			
	 	
	 			document.querySelector("label[for='usuarioRegistro']").innerHTML +='<div class="alert col-12 alert-danger  text-center mt-1 id="alert"><strong>AVISO</strong> Por favor escriba menos de 6 caracteres	<button class="close"  type="button" data-dismiss="alert"><span>&times;</span></button></div>';
	 			return false;

	 		}
	 	if(!expresion.test(usuario))
	 	{

	 		document.querySelector("label[for='usuarioRegistro']").innerHTML +='<div class="alert col-12 alert-danger  text-center mt-1 id="alert"><strong>AVISO</strong> Por favor No escriba caracteres especiale	<button class="close"  type="button" data-dismiss="alert"><span>&times;</span></button></div>';
	 		return false;
	 	}	

	 }

/* VALIDAR PASSWORD */
	 if ( password != "")
	 {
	 
	 	var caracteres = password.length;
		var expresion=/^[a-zA-Z0-9]*$/;

	 	if(caracteres < 6)
	 		{
	 			
	 	
	 			document.querySelector("label[for='passwordRegistro']").innerHTML +='<div class="alert col-12 alert-danger  text-center mt-1 id="alert"><strong>AVISO</strong> Por favor escriba mas de 6 caracteres	<button class="close"  type="button" data-dismiss="alert"><span>&times;</span></button></div>';
	 			return false;

	 		}
	 	if(!expresion.test(password))
	 	{

	 		document.querySelector("label[for='passwordRegistro']").innerHTML +='<div class="alert col-12 alert-danger  text-center mt-1 id="alert"><strong>AVISO</strong> Por favor No escriba caracteres especiales	<button class="close"  type="button" data-dismiss="alert"><span>&times;</span></button></div>';
	 		return false;
	 	}	

	 }

	 /* VALIDAR EMAIL */


	 if ( email != "")
	 {
	 
		
		var expresion = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;

	
	 	if(!expresion.test(email))
	 	{

	 		document.querySelector("label[for='emailRegistro']").innerHTML +='<div class="alert col-12 alert-danger  text-center mt-1 id="alert"><strong>AVISO</strong> Por favor No escriba correctamente el Correo<button class="close"  type="button" data-dismiss="alert"><span>&times;</span></button></div>';
	 		return false;
	 	}	

	}

	return true;

}


/*=====  FIN VALIDAR REGISTRO  ======*/
