<?php


/* @var $_POST type */


/*La busqueda en la base de datos se realiza de este modo para evitar las inyecciones sql*/



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "usuarios";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT ano FROM cargara";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    	
    	echo '<option >'.$row["ano"].'</option>';

    	


    	//echo json_encode($row);
       // echo " " .  $row["correo"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>