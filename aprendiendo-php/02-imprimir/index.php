<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Imprimir por pantalla - Curso PHP</title>
    </head>
    <body>
        <h1>Curso PHP Intermedio - <?php echo "CID"?> </h1>
        
        <?="Bienvenidos al curso intermedio de PHP"?>
        <?php
        
        //TITULO DE LA SECCIÓN
        echo "<h3>Listado de videojuegos:</h3>";
        /*
        ESTA ES UNA LISTA
        DE VIDEOJUEGOS
        MODERNOS
         * 
         */
        echo "<ul>"
                . "<li>GTA</li>"
                . "<li>FIFA</li>"
                . "<li>Mario Bros</li>"
                . "</ul>";
        //echo "<br>Hola hola hola<br>";
            //pARRAFO EXPLICATIVO     
            echo '<p> Esta es toda'.'  - '.'la lista de juegos</p>';
        ?>
    </body>    
</html>



