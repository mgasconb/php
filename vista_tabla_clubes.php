<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="STYLESHEET" type="text/css" href="vista_tabla_clubes.css"/>
    </head>
    <body>
        <?php
        //Crear conexión
        $con = mysql_connect("localhost", "root", "root");
        mysql_select_db("d1_gasbiumi", $con);
        $queryClubes = "SELECT * FROM proy_clubes ORDER BY nombre ASC;";
        $resultClubes = mysql_query($queryClubes, $con) or die(mysql_error($con));
        $totalClubes = mysql_num_rows($resultClubes);
        echo '<h3 id="titulo">Lista de clubes:</h3>';
        echo '<div id="caja_principal">';
        echo '<h4 id="nombre_club">Nombre del club:</h4>';
        $i = 0;
        $j = 0;
        while ($row = mysql_fetch_array($resultClubes)) {
            echo '<div id="fila_'.$i.'" class="fila_'.$i%2 .'">';
            echo '<div id="fila_'.$i.$j.'">';
            if ($row['Nombre']===null){
                    echo "nulo";
                }
            else{
                echo $row['Nombre'];
            }
            
            echo '</div>';
            $j++;
            /*-----------------------------*/
            echo '<div id="fila_'.$i.$j.'">';
            if ($row['id_federacion']===null){
                    echo "nulo";
                }
            else{
                echo $row['id_federacion'];
            }
            
            echo '</div>';
            $j++;
            /*-----------------------------*/
            echo '<div id="fila_'.$i.$j.'">';
            if ($row['Provincia']===null){
                    echo "nulo";
                }
            else{
                echo $row['Provincia'];
            }
            
            echo '</div>';
            $j++;
            /*-----------------------------*/
            echo '<div id="fila_'.$i.$j.'">';
            if ($row['Comunidad']===null){
                    echo "nulo";
                }
            else{
                echo $row['Comunidad'];
            }
            
            echo '</div>';
            $j++;
            /*-----------------------------*/
            echo '<div id="fila_'.$i.$j.'">';
            if ($row['Ciudad']===null){
                    echo "nulo";
                }
            else{
                echo $row['Ciudad'];
            }
            
            echo '</div>';
            $j++;
            $j=0;
            $i++;
            
            echo '</div>';
            //echo "<br />";
        }
        echo '</div>';
        mysql_close($con);
        ?>
    </body>
</html>


