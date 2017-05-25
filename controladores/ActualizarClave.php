<?php
    session_start();
?>
<?php

include '../lib/Conexion.php';
include '../dto/Usuario.php';


    if(isset($_SESSION["Usuario"])){
        $oUsr = new Usuario();        
        $oUsr=$_SESSION['Usuario'];
        
        
        $passAntigua = $_POST['passAntigua'];
        
        if(strcmp ($oUsr->clave , $passAntigua ) == 0)
        {
            
            $passNueva = md5($_POST['passNueva']);
            $passNuevaConfirma = md5($_POST['passNuevaConfirma']);
            if(strcmp ($passNueva , $passNuevaConfirma ) == 0)
            {
                $oConexion = new Conexion();
                if($oConexion->Conectar()){
            
                $db=$oConexion->objconn;
                
                $sql="UPDATE acceso SET PWDUSUARIO='$passNueva' WHERE NOMUSUARIO='$oUsr->nombre' and PWDUSUARIO='$passAntigua';";
                $resultado= $db->query($sql);
                echo 'Contraseña Cambiada';
                
            }
                echo 'Contraseña nueva no coincide, intente nuevamente';                
            }
            echo 'Contraseña actual no coincide, intente nuevamente'; 
        }
        
    }
    else
    {
        header('location:http://localhost:8081/Proy2305/index.php');
    }

