
<html lang="es-MX">

<head>
    <!--Metadatos relevantes-->
    <title>Biblíon</title>                                          <!--Modificar Titulo de Página-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/index.css">                        <!--Modificar los estilos-->
    <script type="text/javascript" src="scripts/index.js" defer></script>  <!--Modificar los scripts-->
    <link rel="shortcut icon" href="images/icono.png" type="image/png">

    <!--Metadatos "irrelevantes"-->
    <meta name="description" content="Esta es la pagina de Inicio de Biblíon">
    <meta name="author" content="Jacob Emmanuel Díaz Rodríguez, 
    Gomez Vargas Jorge Damian, Heredia Avila Luis Antonio,
    Maldonado Mora Aleida Judith, Zuñiga Zepeda Isaac Emmanuel">
</head>

<!--Cuerpo-->
<body id="cuerpo">
    <!--Barra Superior-->
    <header class="cabecera">
        <div class="btn-menu">
            <label for="btn-menu" class="icon-menu"><img class="img-menu" src="images/menu.png" alt="menú" onclick="barra()"></label>
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
            <label for="btn-menu" class="icon-equis">
                <img class="img-menu-cerrar" src="images/cancelar.png" alt="cerrar" onclick="barraX()">
            </label>
        </div>
    </div>

    <?php
    header("Content-Type: text/html;charset=utf-8");
    $conexion = mysqli_connect("localhost", "Administrador", "9XRhqVbLCrSSnC1Z", "biblion" );
    $acentos = $conexion->query("SET NAMES 'utf8'");

    global $iterador, $iteradorS, $autor, $titulo, $editorial, $fecha, $isbn, $descripcion, $nombres;
    $iterador = 0;
    $iteradorS = 0;
    $nombres[0] = "American Gods 10ED.";
    $nombres[1] = "Redes Privadas Virtuales";
    $nombres[2] = "El Lórax";
    $nombres[3] = "El Fin de la Eternidad";
    $nombres[4] = "La voz de las Espadas";
    $nombres[5] = "Capital e Ideología";
    $nombres[6] = "De vuelta a casa";
    $nombres[7] = "El gato ensombrerado";
    $nombres[8] = "Python 3 al Descubierto";
    $nombres[9] = "El Señor de los Anillos";
    $nombres[10] = "Juego de Tronos";
    $nombres[11] = "El Juego de Ender";
    

    while ($iterador < 12){

        $sql = "SELECT `Autor`, `Titulo`, `Editorial`, `Fecha`, `ISBN`, `Descripcion` FROM `libros` WHERE Titulo = '$nombres[$iterador]'";
        $ejecu = mysqli_query($conexion, $sql);

        $libro=mysqli_fetch_array($ejecu);
         
            $autor[$iterador] = $libro ["Autor"];
            $titulo[$iterador] = $libro ["Titulo"];
            $editorial[$iterador] = $libro ["Editorial"];
            $fecha[$iterador] = $libro ["Fecha"];
            $isbn[$iterador] = $libro ["ISBN"];
            $descripcion[$iterador] = $libro ["Descripcion"];
            $iterador++;
        
        
    }
    ?>

    <!--Contenido Principal-->
    <main>
        <div class="div-vert">
            <h1 class="titulo">ADMINISTRADOR</h1>
            <div class="div-hor">
                <ul>
                    <?php
                        echo '<li class="tarjeta-esq">';
                            echo '<a class="hyperef" href="book.php?titulo='. $titulo[0] .'">';
                                echo '<img src="images/ACA-Diseño-Mexico.jpg" alt="" class="tarjeta-img">';
                                echo '<div class="tarjeta-cont">';
                                    echo '<p class="tarjeta-titulo">' . str_ireplace('&aacute;','a', $titulo[0]) . '</p>';
                                    echo '<p class="tarjeta-autor">' . str_ireplace('&aacute;','a', $autor[0]) . '</p>';
                                echo '</div>';
                            echo '</a>';
                        echo '</li>';
                    ?>
                    <?php
                        echo '<li class="tarjeta">';
                            echo '<a class="hyperef" href="book.php?titulo='. $titulo[1] .'">';
                                echo '<img src="images/ACA-Diseño-Mexico.jpg" alt="" class="tarjeta-img">';
                                echo '<div class="tarjeta-cont">';
                                    echo '<p class="tarjeta-titulo">' . str_ireplace('&aacute;','a', $titulo[1]) . '</p>';
                                    echo '<p class="tarjeta-autor">' . str_ireplace('&aacute;','a', $autor[1]) . '</p>';
                                echo '</div>';
                            echo '</a>';
                        echo '</li>';
                    ?>
                    <?php
                        echo '<li class="tarjeta">';
                            echo '<a class="hyperef" href="book.php?titulo='. $titulo[2] .'">';
                                echo '<img src="images/ACA-Diseño-Mexico.jpg" alt="" class="tarjeta-img">';
                                echo '<div class="tarjeta-cont">';
                                    echo '<p class="tarjeta-titulo">' . str_ireplace('&aacute;','a', $titulo[2]) . '</p>';
                                    echo '<p class="tarjeta-autor">' . str_ireplace('&aacute;','a', $autor[2]) . '</p>';
                                echo '</div>';
                            echo '</a>';
                        echo '</li>';
                    ?>
                    <?php
                        echo '<li class="tarjeta">';
                            echo '<a class="hyperef" href="book.php?titulo='. $titulo[3] .'">';
                                echo '<img src="images/ACA-Diseño-Mexico.jpg" alt="" class="tarjeta-img">';
                                echo '<div class="tarjeta-cont">';
                                    echo '<p class="tarjeta-titulo">' . str_ireplace('&aacute;','a', $titulo[3]) . '</p>';
                                    echo '<p class="tarjeta-autor">' . str_ireplace('&aacute;','a', $autor[3]) . '</p>';
                                echo '</div>';
                            echo '</a>';
                        echo '</li>';
                    ?>
                </ul>
            </div>
            <div class="div-hor">
                <ul>
                <?php
                        echo '<li class="tarjeta-esq">';
                            echo '<a class="hyperef" href="book.php?titulo='. $titulo[4] .'">';
                                echo '<img src="images/ACA-Diseño-Mexico.jpg" alt="" class="tarjeta-img">';
                                echo '<div class="tarjeta-cont">';
                                    echo '<p class="tarjeta-titulo">' . str_ireplace('&aacute;','a', $titulo[4]) . '</p>';
                                    echo '<p class="tarjeta-autor">' . str_ireplace('&aacute;','a', $autor[4]) . '</p>';
                                echo '</div>';
                            echo '</a>';
                        echo '</li>';
                    ?>
                    <?php
                        echo '<li class="tarjeta">';
                            echo '<a class="hyperef" href="book.php?titulo='. $titulo[5] .'">';
                                echo '<img src="images/ACA-Diseño-Mexico.jpg" alt="" class="tarjeta-img">';
                                echo '<div class="tarjeta-cont">';
                                    echo '<p class="tarjeta-titulo">' . str_ireplace('&aacute;','a', $titulo[5]) . '</p>';
                                    echo '<p class="tarjeta-autor">' . str_ireplace('&aacute;','a', $autor[5]) . '</p>';
                                echo '</div>';
                            echo '</a>';
                        echo '</li>';
                    ?>
                    <?php
                        echo '<li class="tarjeta">';
                            echo '<a class="hyperef" href="book.php?titulo='. $titulo[6] .'">';
                                echo '<img src="images/ACA-Diseño-Mexico.jpg" alt="" class="tarjeta-img">';
                                echo '<div class="tarjeta-cont">';
                                    echo '<p class="tarjeta-titulo">' . str_ireplace('&aacute;','a', $titulo[6]) . '</p>';
                                    echo '<p class="tarjeta-autor">' . str_ireplace('&aacute;','a', $autor[6]) . '</p>';
                                echo '</div>';
                            echo '</a>';
                        echo '</li>';
                    ?>
                    <?php
                        echo '<li class="tarjeta">';
                            echo '<a class="hyperef" href="book.php?titulo='. $titulo[7] .'">';
                                echo '<img src="images/ACA-Diseño-Mexico.jpg" alt="" class="tarjeta-img">';
                                echo '<div class="tarjeta-cont">';
                                    echo '<p class="tarjeta-titulo">' . str_ireplace('&aacute;','a', $titulo[7]) . '</p>';
                                    echo '<p class="tarjeta-autor">' . str_ireplace('&aacute;','a', $autor[7]) . '</p>';
                                echo '</div>';
                            echo '</a>';
                        echo '</li>';
                    ?>
                </ul>
            </div>
            <div class="div-hor">
                <ul>
                <?php
                        echo '<li class="tarjeta-esq">';
                            echo '<a class="hyperef" href="book.php?titulo='. $titulo[8] .'">';
                                echo '<img src="images/ACA-Diseño-Mexico.jpg" alt="" class="tarjeta-img">';
                                echo '<div class="tarjeta-cont">';
                                    echo '<p class="tarjeta-titulo">' . str_ireplace('&aacute;','a', $titulo[8]) . '</p>';
                                    echo '<p class="tarjeta-autor">' . str_ireplace('&aacute;','a', $autor[8]) . '</p>';
                                echo '</div>';
                            echo '</a>';
                        echo '</li>';
                    ?>
                    <?php
                        echo '<li class="tarjeta">';
                            echo '<a class="hyperef" href="book.php?titulo='. $titulo[9] .'">';
                                echo '<img src="images/ACA-Diseño-Mexico.jpg" alt="" class="tarjeta-img">';
                                echo '<div class="tarjeta-cont">';
                                    echo '<p class="tarjeta-titulo">' . str_ireplace('&aacute;','a', $titulo[9]) . '</p>';
                                    echo '<p class="tarjeta-autor">' . str_ireplace('&aacute;','a', $autor[9]) . '</p>';
                                echo '</div>';
                            echo '</a>';
                        echo '</li>';
                    ?>
                    <?php
                        echo '<li class="tarjeta">';
                            echo '<a class="hyperef" href="book.php?titulo='. $titulo[10] .'">';
                                echo '<img src="images/ACA-Diseño-Mexico.jpg" alt="" class="tarjeta-img">';
                                echo '<div class="tarjeta-cont">';
                                    echo '<p class="tarjeta-titulo">' . str_ireplace('&aacute;','a', $titulo[10]) . '</p>';
                                    echo '<p class="tarjeta-autor">' . str_ireplace('&aacute;','a', $autor[10]) . '</p>';
                                echo '</div>';
                            echo '</a>';
                        echo '</li>';
                    ?>
                    <?php
                        echo '<li class="tarjeta">';
                            echo '<a class="hyperef" href="book.php?titulo='. $titulo[11] .'">';
                                echo '<img src="images/ACA-Diseño-Mexico.jpg" alt="" class="tarjeta-img">';
                                echo '<div class="tarjeta-cont">';
                                    echo '<p class="tarjeta-titulo">' . str_ireplace('&aacute;','a', $titulo[11]) . '</p>';
                                    echo '<p class="tarjeta-autor">' . str_ireplace('&aacute;','a', $autor[11]) . '</p>';
                                echo '</div>';
                            echo '</a>';
                        echo '</li>';
                    ?>
                </ul>
            </div>
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