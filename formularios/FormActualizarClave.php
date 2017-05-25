<?php
    session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
                if(isset($_SESSION["Usuario"])){
            ?>
            <form method="POST" action="../controladores/ActualizarClave.php">
                <label>Clave Nueva</label><div><input type="password" name="passAntigua"></div>
                <label>Clave Antigua</label><div><input type="password" name="passNueva"></div>
                <label>Confirma Clave Nueva</label><div><input type="password" name="passNuevaConfirma"></div>
                <input type="submit" value="Cambiar Clave">
            </form>
            <?php
                }
            ?>
        <?php
            if(!isset($_SESSION["Usuario"])) {
                header('location:http://localhost:8081/Proy1605/index.php');
            }
        ?>
        
    </body>
</html>
