<?php 
$conexion = mysqli_connect("localhost", "Administrador", "9XRhqVbLCrSSnC1Z", "biblion" );

$nombre       = $_POST["nombre"]; 
$apellido     = $_POST["apellido"];
$correo       = $_POST["correo"];
$sexo         = $_POST["sexo"];
$password     = $_POST["pass"];
$correoc      = $_POST["correoc"];
$nivel        = "Administrador";


$val= "SELECT `Nivel` FROM `usuarios` WHERE Correo = '$correoc'";
$ejecucion=mysqli_query($conexion, $val);
$fila= mysqli_fetch_array ($ejecucion);



if ($fila [0] == 'Administrador'){
    $sql = "INSERT INTO `usuarios`(`Nombre`, `Apellido`, `Correo`, `Sexo`, `Password`, `Nivel`)
     VALUES ('$nombre','$apellido','$correo','$sexo','$password', '$nivel')";

    $ejecucion2=mysqli_query($conexion, $sql);

    if($ejecucion2){
        header('Location: index-admin.php');
    }else{
        header('Location: plantilla.html');
    }
}else{
    header('Location: plantilla.html');
}


?>


