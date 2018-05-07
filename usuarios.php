<?php
session_start();
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

	<link rel="stylesheet" type="text/css" href="css/estilos_usuarios.css">
	<link rel="stylesheet"   href="estilos_redes_sociales.css"/>


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="js/usuarios.js"></script>


  	  	
</head>
<body>

	<?php require 'menu_usuarios.php';

		
	?>

	<h2>

		<?php
		
		echo "Usuario:".$_SESSION["uno"];


		?>

 	</h2>



	<div class="contenedor">
     	<div class="seccion_uno">
  			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

 

				<div class="container">

					

			


						<h1>Nada bueno Por los momentos</h1>
						<img src="nada.jpg" class="img-responsive">


						


				</div>
			</div>
		</div>				
	</div>

	<?php require 'footer.php';
	
	?>

	
</body>
</html>