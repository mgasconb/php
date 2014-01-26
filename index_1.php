
<HTML>

    <HEAD>

        <TITLE>Cap 4 ejemplo 1</TITLE>

    </HEAD>

    <BODY>    
        <?php
        if (strlen($_POST["nombre"]) > 0) {

            echo "<BR/>Tu nombre es ";

            echo $_POST["nombre"];
        }



        if (strlen($_POST["email"]) > 0) {

            echo "<BR/>Tu email es ";

            echo $_POST["email"];
        }
        ?>

    </BODY>

</HTML>