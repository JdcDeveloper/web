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

	<link rel="stylesheet" type="text/css" href="css/estilos_registro.css">
	<link rel="stylesheet"   href="estilos_redes_sociales.css"/>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>





	<script type="text/javascript" src="js/cargar.js"></script>	
  	<script type="text/javascript" src="js/validar.js"></script>
  	  	
</head>
<body>

	<?php require 'menu.php';
		
	?>

		
	<div class="contenedor">
     	<div class="seccion_uno">
  			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

 

				<div class="container">


						<form action="registrar.php" method="post" name="formulario">

							<table>

								<tr>														
									<td>Correo Electronico</td>
									

								</tr>

								<tr>

									<td>
										<input type="text" name="correo" maxlength="20" id="correo" placeholder="Ej: pepe@gmail.com">
										<p id="correov"></p>

									</td>
									

								</tr>

								<tr>

									<td>Nombre de usuario</td>
									

								</tr>
								
								

								<tr>
									
													
									<td>
										<input type="text" name="usuario" id="usuario" maxlength="10" placeholder="Ej: pepe1">
										

									</td>


								</tr>

								<tr>

										<td>Contraseña</td>
									

								</tr>

								<tr>				
									
									<td>
										<input type="password" name="contrasena" id="contrasena" maxlength="10" placeholder="Ej:123" >
										<p id="contrasenav"></p>

									</td>


								</tr>

								<tr>


									<td>Confirme su Contraseña</td>
									

								</tr>

								<tr>

													
									<td>
										
										<input type="password" name="contrasenaa" id="contrasenaa" maxlength="10" placeholder="Ej: 123"  >
										<p id="contrasenaav"></p>

									</td>


								</tr>

								<tr>

									<td>Fecha de nacimiento</td>
									

								</tr>


								<tr>

									<td>
										<select name="dia" id="dia" >       				
					          			    				
				         			      
					        			</select>


					        		

					        			<select name="mes" id="mes" >
					          				       
					        			</select>

					        			<select name="ano" id="ano" >
					          								         				            
					        			</select>

									</td>


								</tr>

								<tr>			
									
									<td>
										<p id="terminouv"></p>
										<input type="checkbox" name="terminou" id="terminou"> Acepto los términos
										<br>
										<a href="#">Política de términos</a> 


									</td>


								</tr>

								<tr>				
									
									<td>
										<input type="checkbox" name="terminod" id="terminod"> Deseo recibir correo de promociones
										

									</td>


								</tr>

								<tr>

									<td>
										<button  class=" registrar btn btn-success glyphicon glyphicon-thumbs-up" type="submit"  value="Enviar" onclick="return funcion();">Registrar
										</button>

										

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