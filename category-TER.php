
<html lang="es-MX">

<head>
    <!--Metadatos relevantes-->
    <title>Libros de Terror</title>                                          <!--Modificar Titulo de Página-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/category.css">                        <!--Modificar los estilos-->
    <script type="text/javascript" src="scripts/category.js" defer></script>  <!--Modificar los scripts-->
    <link rel="shortcut icon" href="images/icono.png" type="image/png">

    <!--Metadatos "irrelevantes"-->
    <meta name="description" content="En esta página se encuentran los libros del género Terror">
    <meta name="author" content="Jacob Emmanuel Díaz Rodríguez, 
    Gomez Vargas Jorge Damian, Heredia Avila Luis Antonio,
    Maldonado Mora Aleida Judith, Zuñiga Zepeda Isaac Emmanuel">
</head>

<?php
    header("Content-Type: text/html;charset=utf-8");
    $conexion = mysqli_connect("localhost", "Administrador", "9XRhqVbLCrSSnC1Z", "biblion" );
    $acentos = $conexion->query("SET NAMES 'utf8'");
    
    $sql = "SELECT `Autor`, `Titulo`, `Editorial`, `Fecha`, `ISBN`, `Descripcion` FROM `libros` WHERE Genero = 'Académico'";
    $ejecu = mysqli_query($conexion, $sql);

    global $iterador, $autor, $titulo, $editorial, $fecha, $isbn, $descripcion;
    $iterador = 0;


    while ($libro=mysqli_fetch_array($ejecu)){
         
        
        $autor[$iterador] = $libro ["Autor"];
        $titulo[$iterador] = $libro ["Titulo"];
        $editorial[$iterador] = $libro ["Editorial"];
        $fecha[$iterador] = $libro ["Fecha"];
        $isbn[$iterador] = $libro ["ISBN"];
        $descripcion[$iterador] = $libro ["Descripcion"];
        $iterador++;
        }

    
?>

<!--Cuerpo-->
<body id="cuerpo">
    <!--Barra Superior-->
    <header class="cabecera">
        <div class="btn-menu" >
            <label for="btn-menu" class="icon-menu" ><img class="img-menu" src="images/menu.png" alt="menú" onclick="barra()"></label>
            <a href="index.html">                                            <!--Hipervínculo-->
                <img class="icono" src="images/icono.png" alt="ícono">
            </a>
            <h1 class="nombre">Biblíon</h1>

            <!--Formulario de Búsqueda-->
            <form action=".php" method="" target="" class="buscar">
               <input type="search" name="busqueda" list="" class="buscar-input">
               <input type="submit" value="Buscar" class="buscar-btn">
            </form>

            <ul class="login">
                <li><a href="login.html" class="log-a">Iniciar Sesión</a></li><br>              <!--Agregar Hipervínculo-->
                <li><a href="sign-up.html" class="log-a">Registrarse</a></li>                     <!--Agregar Hipervínculo-->
            </ul>
        </div>
    </header>
    
    <!--Menú-->
    <input type="checkbox" id="btn-menu">
    <div class="container-menu">
        <div class="cont-menu">
            <nav>
                <a href="index.php">Inicio</a>                      <!--Agregar Hipervínculo-->           
                <a href="category-ACA.php">Académicos</a>                      <!--Agregar Hipervínculo-->
                <a href="category-CIFI.php">Ciencia Ficción</a>                      <!--Agregar Hipervínculo-->
                <a href="category-FAN.php">Fantasía</a>                      <!--Agregar Hipervínculo-->
                <a href="category-INF.php">Infantiles</a>                      <!--Agregar Hipervínculo-->
                <a href="category-TER.php">Terror</a>                      <!--Agregar Hipervínculo-->
            </nav>
            <label for="btn-menu" class="icon-equis" >
                <img class="img-menu-cerrar" src="images/cancelar.png" alt="cerrar" onclick="barraX()">
            </label>
        </div>
    </div>

    <!--Contenido Principal-->
    <main>
       <div class="cont">
            <h1 class="head">Terror</h1>
            <ul>
            <?php
                $index = 0;
                while ($index < 15){
                echo '<li>'; 
                    $tit = str_ireplace('&aacute;','a', $titulo[$index]);
                
                    echo '<a  href="book.php?titulo='. $tit .'">';
                        
                        echo '<div class="tarjeta">';                       
                            echo '<img src="images/ACA-Diseño-Mexico.jpg" alt="" class="tarjeta-img">';
                            echo '<input type="submit" name="titulo" class="tarjeta-titulo" value= "' . $tit . '" >';
                            echo '<p class="tarjeta-autor">' . str_ireplace('&aacute;','a', $autor[$index]) . '</p>';
                            echo '<p class="tarjeta-edit">' . str_ireplace('&aacute;','a', $editorial[$index]) . '</p>';
                            echo '<button type="button" class="apartar">Apartar</button>';   
                        echo '</div></a>';
                echo '</li>';
                $index++;}
                ?>
                
            </ul>
       </div>
    </main>
    
    <!--Pie de Página-->
    <footer>
        <p class="info">
            Iconos diseñados por 
            <a href="https://www.flaticon.es/autores/pixel-perfect" title="Pixel perfect" class="footer-a">Pixel perfect</a>,
            <a href="https://www.flaticon.es/autores/freepik" title="Freepik" class="footer-a">Freepik</a>,
            <a href="https://www.flaticon.es/autores/anatoly" title="Anatoly" class="footer-a">Anatoly</a>
            from <a href="https://www.flaticon.es/" title="Flaticon" class="footer-a">www.flaticon.es</a>
        </p>
    </footer>

</body>
</html>