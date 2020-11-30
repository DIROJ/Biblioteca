<?php 
$conexion = mysqli_connect("localhost", "Administrador", "9XRhqVbLCrSSnC1Z", "biblion" );

if( isset($_POST['corr']) ) {
    $email = $_POST['corr'];

 }
 if( isset($_POST['contra']) ) {
    $password = $_POST['contra'];

 }
 

$val= "SELECT `Correo`, `Password`, `Nivel` FROM `usuarios` WHERE Correo = '$email' AND Password = '$password'";
$ejecucion=mysqli_query($conexion, $val);
$fila= mysqli_fetch_array ($ejecucion);


if ($fila [2] == 'Administrador'){
    header('location: index-admin.php');
}else if ($fila [2] == 'Usuario'){
    header('location: index.php');
}else{
    header('location: plantilla.html');
}
?>