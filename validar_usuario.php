<?php

//Crear conexión
$con = mysqli_connect("localhost", "root", "root", "d1_gasbiumi") or die("Error " . mysqli_error($con));

$usr = $_POST['usuario'];
$pw = $_POST['password'];
//Obtengo la version encriptada del password
$pw_enc = md5($pw);

$sql = "
			select username, password, nombre, apellidoPaterno, 
                        apellidoMaterno, correo, dt_registro
			from usuarios
			where username = '$usr'
		";
$result = [];
$result = mysqli_query($con, $sql) or die('Error de Conexión');
if (count($result) == 1) {
    while ($fila = mysqli_fetch_assoc($result)) {
        if ($fila["username"] == $usr && $fila["password"] == $pw_enc) {
            echo "Bienvenido " . $fila['nombre'] . " " . $fila['apellidoPaterno'] . " " . $fila['apellidoMaterno'];
            echo "<br/> Su email es: " . $fila['correo'] . " y se registro en la fecha: " . $fila['dt_registro'];
        } else {
            echo("El usuario o la contraseña no son correctos. Pulse aqui para volver atás.");
            echo("<a href='./portada.php'>Volver atrás</a>");
        }
    }
} 
else {
    echo "Ese usuario no existe.";
    echo "<a href='./portada.php'>Pinche aqui para volver al formulario de login</a> ";
}
/* liberar el resultset */
    $result->free();
?>