<?php


//Nunca poner acentos, espacios o eñes en los nombres de los campos de las bases de datos//



$correo=$_POST["correo"];
$usuario=$_POST["usuario"];
$contrasena=$_POST["contrasena"];
$dia=$_POST["dia"];
$mes=$_POST["mes"];
$ano=$_POST["ano"];




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

$sql = "INSERT INTO registro (correo, usuario , contrasena ,dia ,mes ,ano)
VALUES ('$correo', '$usuario', '$contrasena', '$dia', '$mes','$ano')";

if (mysqli_query($conn, $sql)) {
    header('Location:registro');
   
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>