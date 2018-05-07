<?php
	session_start();

// remove all session variables


?>


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Jonathan Castro Programador</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name=description content="Jonathan Castro Programador,Desarrollador,Sitio dedicado al desarrollo de paginas webs,sistemas.">
    <meta name=keywords content="Jonathan Castro Programador,Desarrollador.">
	
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	

	<link href="https://fonts.googleapis.com/css?family=Shrikhand" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/estilos_login.css">
	<link rel="stylesheet"   href="estilos_redes_sociales.css"/>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	

  	  	
</head>
<body>

	<?php require 'menu.php';
		
	?>

	<?php
		

	// remove all session variables
	session_unset(); 

	// destroy the session 
	session_destroy(); 


	?>

	<div class="contenedor">
     	<div class="seccion_uno">
  			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

 

				<div class="container">


						<form action="ingresar.php" method="post" >

							<table>

							

								<tr>

									<td>Nombre de usuario</td>
									

								</tr>
								
								

								<tr>
									
													
									<td>
										<input type="text" name="usuario" maxlength="10">

									</td>


								</tr>

								<tr>

										<td>Contraseña</td>
									

								</tr>

								<tr>				
									
									<td>
										<input type="password" name="contrasena" maxlength="10">

									</td>


								</tr>
								

								<tr>

									<td>
										<button  class="iniciar btn btn-warning glyphicon glyphicon-user" type="submit"  id="consultar" value="Enviar">Iniciar sesión
										</button>

										

									</td>


								</tr>

								<tr>

									<td>

										<a href="registro.php">No tienes cuenta?</a>
										
										

									</td>


								</tr>

								<tr>

									<td>

										<a href="">Olvido su contraseña?</a>
										

									</td>


								</tr>


							</table>

		
						</form>


				</div>
			</div>
		</div>				
	</div>

	<?php require 'footer.php';
	
	?>

	
</body>
</html>