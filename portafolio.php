<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Jonathan Castro Programador</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name=description content="Jonathan Castro Programador,Desarrollador,Sitio dedicado al desarrollo de paginas webs,sistemas.">
    <meta name=keywords content="Jonathan Castro Programador,Desarrollador.">
  <link rel = "stylesheet" type = "text/css"  href = "css/estilos_portafolio.css">
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
     <div class="seccion_uno">

       <form class="navbar-form navbar-left">
            <div class="form-group">
             
              <input type="text" class="form-control" placeholder="buscar">
            </div>
            <button type="submit" class="bu btn btn-default glyphicon glyphicon-search"></button>
            <button type="" class="ag btn btn-primary btn-sm">agregar</button>
            <button type="" class="ac btn btn-info btn-sm">actualizar</button>
            <button type="" class="el btn btn-danger btn-sm">eliminar</button>
           
         </form>






     <div class="row">
       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h1>Portafolio de los trabajos</h1>
        <br>
        <p >Se iran agregando nuevos trabajos desarrollados </p>
        </div>
     </div>



    	<div class="row">
    		<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">

				<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="20000" >
  				<!-- Indicators -->
  					<ol class="carousel-indicators">
    					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    					<li data-target="#myCarousel" data-slide-to="1"></li>
    					<li data-target="#myCarousel" data-slide-to="2"></li>
  					</ol>

  				<!-- Wrapper for slides -->
  				<div class="carousel-inner">
    				<div class="item active">
      					<img src="img/guarderia1.JPG" alt="Chania">
      						<div class="algo carousel-caption">
        						<h3>Desarrollo de pagina web educacional</h3>
        						<p>Desarrolo de una pagina web,responsive design con el uso de bootstrap y css</p>
                   
      						</div>
    				</div>

    				<div class="item">
      					<img src="img/onetone1.JPG" alt="Chicago">
      						<div class="carousel-caption">
        						<h3>Modificación de la plantilla onetone</h3>
        						<p>Modificación de un tema de wordpress</p>
                    <br>
                      
      						</div>
    				</div>

    				<div class="item">
      					<img src="img/blog1.JPG" alt="New York">
      						<div class="carousel-caption">
        						<h3>Blog en wordpress</h3>
        						<p>Creando un blog de wordpress,modificando tanto el html,css y el php</p>
                    <br>
                     
                    
      						</div>
    				</div>
  				</div>

  					<!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
				</div>
			</div>
	
 






     </div>
   </div>      
</div>

  <?php require 'footer.php';
  
  ?>

</body>
</html>