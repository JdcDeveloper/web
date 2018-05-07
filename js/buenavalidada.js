

//pendiente con las llaves//



function funcion() {


	
	var xapo;

	  xapo = document.getElementById("contrasena").value;



	if ( xapo<0 || xapo>9 ) {

		return false;

	}else{

		if ( xapo=="" ) {

			return false;

		}else{

			if ( isNaN(xapo)) {

				return false;

				


			}else{

				alert("gracias por registrarse");


			}


}

}

}
