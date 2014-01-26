<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="STYLESHEET" type="text/css" href="portada.css"/>
    </head>
    <body>
        <?php
        echo '<div id="principal">';

        echo '<form action = "validar_usuario.php" method="post">';
        echo '<h2 id="nombre">Introduce tu nombre de usuario.</h2>';
        echo '<div id="caja_nombre"><input type = "text" name = "usuario"></div>';
        echo '<h2 id="clave">Introduce tu clave.</h2>';
        echo '<div id="caja_clave"><input type = "text" name = "password"></div>';
        echo '<input type = "submit" value = "Enviar">';
        echo '</form>';
        echo '</div id="principal">';
        ?>
    </body>
</html>
