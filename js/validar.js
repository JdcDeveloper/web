


function validar_correo(){
	$("#correov").css("color", "red").show().html("<p>Formato inválido!!</p>").fadeOut(3000);
	
}
	

function validar_numeros(){
	$("#contrasenav").css("color", "red").show().html("<p>Solo números!!</p>").fadeOut(3000);
	
}

function validar_igualdad(){
	$("#contrasenaav").css("color", "red").show().html("<p>Las contraseñas no coinciden!!</p>").fadeOut(3000);
	
}

function validar_politica(){
	$("#terminouv").css("color", "red").show().html("<p>Debe aceptar los términos!!</p>").fadeOut(3000);
	
}




function funcion() {


	
	
	var correo;
	var usuario;
	var contrasena;
	var contrasenaa;
	var dia;
	var mes;
	var ano;
	var terminou;
	var terminod;







      correo = document.getElementById("correo").value;
      usuario = document.getElementById("usuario").value;
	  contrasena = document.getElementById("contrasena").value;
	  contrasenaa = document.getElementById("contrasenaa").value;
	  dia = document.getElementById("dia").value;
	  mes = document.getElementById("mes").value;
	  ano = document.getElementById("ano").value;
	  terminou = document.getElementById("terminou");
	  terminod = document.getElementById("terminod");





		if ( correo=="" || usuario=="" || contrasena=="" || contrasenaa=="" ||
		 dia=="" || mes=="" || ano=="" || terminou=="" || terminod=="" ) {

			 alert("No pueden estar vacios los campos");

			return false;


		}else{

			if ( !(/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(correo))   ) {


        		validar_correo();
				return false;



		}else{

	

			if ( isNaN(contrasena)) {
                validar_numeros();
				return false;		


				}else{

					if (contrasena!=contrasenaa) {


						validar_igualdad();
						return false;


					}else{

						if (!terminou.checked) {

							validar_politica();
							return false;





						}else{

							alert("Registrado correctamente");


						}



						




					}



				}

				


			}


}

}



