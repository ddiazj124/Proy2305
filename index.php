<?php
    session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>
            <?php
                if(isset($_SESSION["Usuario"])){
            ?>
            <div align="center"><button><a href="controladores/CerrarSesion.php">Cerrar Sesion</a></button></div>
            <a href="formularios/FormIngresoProducto.php">Ingresar Producto</a><br>
            <a href="formularios/FormActualizarClave.php">Cambiar Clave</a>
            <?php
                }
            ?>
        </div>
        <?php
            if(!isset($_SESSION["Usuario"])) {
        ?>
        <form method="post" action="controladores/IniciarSesion.php">
            <table>
                <tr>
                    <td>
                        NOMBRE
                    </td>
                    <td>
                        <input type="text" name="nombre">
                        
                    </td>
                </tr>

                <tr>
                    <td>
                        CONTRASEÑA
                    </td>
                    <td>
                        <input type="password" name="pass">                        
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Verificar">
                    </td>
                </tr>
                    
                </tr
            </table>
            
        </form>
                
        <?php
            }
        ?>
        
    </body>
</html>
