<!DOCTYPE html>
<html lang="es">
<head>



	<meta charset="UTF-8">
	<title>Jonathan Castro Programador</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name=description content="Jonathan Castro Programador,Desarrollador,Sitio dedicado al desarrollo de paginas webs,sistemas.">
    <meta name=keywords content="Jonathan Castro Programador,Desarrollador.">
	<link rel="stylesheet" type="text/css" href="css/estilos_principal.css">
	<link rel="stylesheet"   href="estilos_redes_sociales.css"/>
    <link href="https://fonts.googleapis.com/css?family=Shrikhand" rel="stylesheet">


  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<script type="text/javascript" src="js/principal.js"></script>





</head>
<body>

	<?php require 'menu.php';
		
	?>


		<div class="contenedor">
		 <div class="seccion_uno ">
			<div class="row">
				<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<img src="img/foto.jpg" class="img-responsive" alt="foto">
					<select id="seleccionar" onchange="mostrar();">
          				<option value="0">Seleccione una caracteristica</option>
          				<option value="1">Edad</option>
          				<option value="2">Estatura</option>
         				<option value="3">Peso</option>          
        			</select>

         			 <h1 id="estatura">28 Años</h1>
          			 <h1 id="peso">1.89 Cm</h1>
          			 <h1 id="edad">70 kilos</h1>

			   		<h1>Presentación</h1>
            		<p>Mi nombre es Jonathan.<ins id="nota">Me considero un programador 
           			 autodidacta con rapida capacidad de aprendizaje</ins>,entre mis hobbies se encuentran
            		,programación,ejercicio,videojuegos,animes.<p>
            		<p>Entre mis fortalezas se encuentra html5,css3,bootstrap
            		,jquery,wordpress,postgresql,herramientas que mas utilizo,notepad++,sublime
            		 text3,netbeans,pgAdminIII, tengo conocimientos
            		de dominios y subdominios ,carga de contenido mediante FTP,manejo de CMS y sus plugins entre otros,
            		comandos básicos de consola linux,conocimientos en POO con el framework codeigniter y java e utilizado algunas librerias
            		como FPDF.
            		</p>
				</div>
			</div>
		  </div>		
		




	<div class="seccion_dos ">
		<div class="container">
			 <div class="row">
  				<div class="video col-xs-10 col-sm-10 col-md-10 col-lg-10">

  					<iframe width="560" height="315" src="https://www.youtube.com/embed/TCkcgtud3Kw" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>

					<nav aria-label="Page navigation" class="pull-left">
					  <ul class="pagination">
					    <li>
					      <a href="principal_cuatro.php" aria-label="Previous">
					        <span aria-hidden="true">&laquo;</span>
					      </a>
					    </li>
					    <li><a href="principal.php">1</a></li>
					    <li><a href="principal_uno.php">2</a></li>
					    <li><a href="principal_dos.php">3</a></li>
					    <li><a href="principal_tres.php">4</a></li>
					    <li><a href="principal_cuatro.php">5</a></li>
					     <li><a href="principal_cinco.php">6</a></li>
					      <li><a href="principal_seis.php">7</a></li>
					    <li>
					      <a href="principal_cinco.php" aria-label="Next">
					        <span aria-hidden="true">&raquo;</span>
					      </a>
					    </li>
					  </ul>
					</nav>
  				   
		 	</div>
		</div>
		 
          <br>
        
			 </div>
		</div>

    </div>
    
	<?php require 'footer.php';
	
	?>
	

</body>
</html>