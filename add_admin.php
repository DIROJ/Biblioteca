<?php 

$conexion = mysqli_connect("localhost", "Administrador", "9XRhqVbLCrSSnC1Z", "biblion" );

$titulo      = $_POST["titulo"]; 
$autor       = $_POST["autor"];
$editorial   = $_POST["editorial"];
$fecha       = $_POST["fecha"];
$ISBN        = $_POST["ISBN"];
$genero      = $_POST["genero"];
$descripcion = $_POST["descripcion"];



//datos del arhivo
$nombre_archivo = $_FILES['imagen']['name'];
$tipo_archivo = $_FILES['imagen']['type'];
$tamano_archivo = $_FILES['imagen']['size'];

//compruebo si las características del archivo son las que deseo
if (!((strpos($tipo_archivo, "png") || strpos($tipo_archivo, "jpeg") || strpos($tipo_archivo, "jpeg")) && ($tamano_archivo < 100000))) {
       echo "La extensión o el tamaño de los archivos no es correcta. <br><br><table><tr><td><li>Se permiten archivos .gif o .jpg<br><li>se permiten archivos de 100 Kb máximo.</td></tr></table>";
}else{
       if (move_uploaded_file($_FILES['imagen']['tmp_name'],  'c:/wamp/www/Biblíon/images/'.$nombre_archivo)){
              echo "El archivo ha sido cargado correctamente.";
       }else{
              echo "Ocurrió algún error al subir el fichero. No pudo guardarse.";
       }
}


$sql = "INSERT INTO `libros`(`Autor`, `Titulo`, `Editorial`, `Fecha`, `ISBN`, `Genero`, `Descripcion`)
VALUES ('$titulo','$autor','$editorial','$fecha','$ISBN','$genero','$descripcion')";

//ejecucuion de la sentencia
$ejecucion=mysqli_query($conexion, $sql);



?>
