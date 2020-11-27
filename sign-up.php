<?php 
$conexion = mysqli_connect("localhost", "Administrador", "9XRhqVbLCrSSnC1Z", "biblion" );

$nombre   = $_POST["nombre"]; 
$apellido = $_POST["apellido"];
$correo   = $_POST["correo"];
$sexo     = $_POST["sexo"];
$password = $_POST["pass"];

$sql = "INSERT INTO `usuarios`(`Nombre`, `Apellido`, `Correo`, `Sexo`, `Password`)
 VALUES ('$nombre','$apellido','$correo','$sexo','$password')";

$ejecucion=mysqli_query($conexion, $sql);

if($ejecucion){
    header('Location: sign-up.html');
}else{
    die (mysqli_error($conexion));
}