<?php
    session_start();
?>
<?php

include '../lib/Conexion.php';
include '../dto/Usuario.php';

    if(isset($_SESSION["Usuario"])){
        $oUsr = new Usuario();        
        $oUsr->nombre=$_SESSION['nombre'];
        $oUsr->clave=$_SESSION['pass'];
        
        $passAntigua = $_POST['passAntigua'];
        
        if(strcmp ($oUsr->nombre , $passAntigua ) == 0)
        {
            $passNueva = $_POST['passNueva'];
            $passNuevaConfirma = $_POST['passNuevaConfirma'];
            if(strcmp ($passNueva , $passNuevaConfirma ) == 0)
            {
                
            }
        }
        
    }

