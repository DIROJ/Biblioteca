
<html lang="es-MX">

    <head>
        <!--Metadatos relevantes-->
        <title>Libro</title>                                          <!--Modificar Titulo de Página-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles/book.css">                        <!--Modificar los estilos-->
        <script type="text/javascript" src="scripts/book.js" defer></script>  <!--Modificar los scripts-->
        <link rel="shortcut icon" href="images/icono.png" type="image/png">

        <!--Metadatos "irrelevantes"-->
        <meta name="description" content="Esta página contiene la información del libro">
        <meta name="author" content="Jacob Emmanuel Díaz Rodríguez, 
        Gomez Vargas Jorge Damian, Heredia Avila Luis Antonio,
        Maldonado Mora Aleida Judith, Zuñiga Zepeda Isaac Emmanuel">
    </head>

    <?php
        header("Content-Type: text/html;charset=utf-8");
        $conexion = mysqli_connect("localhost", "Administrador", "9XRhqVbLCrSSnC1Z", "biblion" );
        $acentos = $conexion->query("SET NAMES 'utf8'");
        $recibido =$_GET["titulo"];
        $sql = "SELECT `Autor`, `Titulo`, `Editorial`, `Fecha`, `ISBN`, `Descripcion` FROM `libros` WHERE Titulo = '$recibido'";
        $ejecucion = mysqli_query($conexion, $sql);
        
        global $info;
        $info = mysqli_fetch_array($ejecucion);
        
        
    ?>

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
                    <form action="book.php" method="POST" class="buscar" target="">
                       <input type="search" name="busqueda" list="" class="buscar-input" >
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

            <!--Libro--> 
            <main>
            <img id="Img-libro" class="efectolupa" src="https://www.picarona.net/wp-content/uploads/2020/05/Las_aventuras_de_Pinocho.jpg">
                <article id="info-libro">
                    
                    <?php
                    header("Content-Type: text/html;charset=utf-8");
                    echo '<p id="titulo"><b>' . str_ireplace('&aacute;','a', $info['Titulo']) . '</b></p>';
                    echo '<p id="autor">' . str_ireplace('&aacute;','a', $info['Autor']) . '</p>';
                    echo '<p id="descripcion">';
                    echo '<b>Editorial: </b>';
                    echo str_ireplace('&aacute;','a', $info['Editorial']) ;
                    echo '<br><b>Publicación: </b>';
                    echo $info['Fecha'] ;
                    echo '<br><b>ISBN: </b>';
                    echo $info['ISBN'] ;
                    echo '<br><br><b>Descripción: </b>';
                    echo str_ireplace('&aacute;','a', $info['Descripcion']); 
                    echo '</p>' ;
                    
                    ?>
                    <a id="apartar" href="apartar.html">Apartar</a>

                    <form id="calific">
      		<p class="clasificacion">
        	<input id="radio1" type="radio" name="estrellas" value="5"><!--
        	--><label for="radio1">★</label><!--
        	--><input id="radio2" type="radio" name="estrellas" value="4"><!--
        	--><label for="radio2">★</label><!--
        	--><input id="radio3" type="radio" name="estrellas" value="3"><!--
        	--><label for="radio3">★</label><!--
        	--><input id="radio4" type="radio" name="estrellas" value="2"><!--
        	--><label for="radio4">★</label><!--
        	--><input id="radio5" type="radio" name="estrellas" value="1"><!--
        	--><label for="radio5">★</label>
      		</p>
    				</form>
                    </article>
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