<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
 <title>Jonathan Castro Programador</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name=description content="Jonathan Castro Programador,Desarrollador,Sitio dedicado al desarrollo de paginas webs,sistemas.">
  <meta name=keywords content="Jonathan Castro Programador,Desarrollador.">
	
  
  <link href="https://fonts.googleapis.com/css?family=Shrikhand" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Shrikhand" rel="stylesheet">
  
  <link rel="stylesheet" href="css/estilos_contacto.css">
  <link rel="stylesheet"   href="estilos_redes_sociales.css"/>


  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/contacto.js"></script>

    <script>
      $(document).ready(function(){

          $("#consultar").click(function(event){


               $.ajax({
                  type: $('#formulario').attr('method'), 
                  url: $('#formulario').attr('action'),
                  data: $('#formulario').serialize(),
                  success: function (data) { alert('Gracias por tu mensaje,pronto te contestare'); } 
                      });
              event.preventDefault();
              

          });
      });
    </script>
  
   


</head>

<body> 
  
 


  <?php require 'menu.php';
    
  ?>




<div class="contenedor">
     <div class="seccion_uno">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

 

<div class="container">


<form action="mensaje.php" method="post" id="formulario" >
<div class="form-group row">
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 " >
  <label for="usr" >Nombre(*)</label>
  <input type="text" name="nombre" class="form-control" id="nombre"  data-placement="right" title="Máximo 20 caracteres" maxlength="20" onclick="color();" >
</div>
</div>
<div class="form-group row">
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
  <label for="em">Email(*)</label>
  <input type="email"  name="email" class="form-control" id="email"  data-placement="right" title="Máximo 30 caracteres" maxlength="30"  onclick="color();"  >
</div>
</div>
<div class="form-group row ">
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
  <label for="as">Asunto(*)</label>
  <input type="text" name="asunto" class="form-control" id="asunto"  data-placement="right" title="Máximo 30 caracteres" maxlength="30"  onclick="color();">
</div>
</div>
<div class="form-group row">
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
  <label for="es">Escribe tu mensaje(*)</label>
 <textarea  name="contenido" class="form-control" id="contenido" rows="3"  data-placement="right" title="Máximo 50 caracteres" maxlength="50"  onclick="color();" ></textarea>
</div>
</div>
<button  class="btn btn-primary glyphicon glyphicon-ok" type="submit"  id="consultar" value="Enviar" onclick="validar();">Enviar
</button>
<button class="btn btn-danger glyphicon glyphicon-remove" type="reset" id="cancelar"  value="Cancelar">Cancelar</button>
</form>


</div>
</div>
</div>




 
  <div class="seccion_dos"> 
  <div class="container">
    <div class="row">
      <div> 
  
        <iframe class="col-xs-12 col-sm-12 col-md-12 col-lg-12" 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d251098.19816293666!2d-67.03080003555066!3d10.
        468361000242618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2a58adcd824807%3A0x93dd2eae0a998483!2
        sCaracas%2C+Distrito+Capital!5e0!3m2!1ses!2sve!4v1496076302984" width="200" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

    </div>
  </div>


 </div>
</div>


 
 

<?php require 'footer.php';
  
  ?>
  




</body>
</html>