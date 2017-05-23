<?php
    class Usuario{
        var $idUsuario;
        var $nombre;
        var $clave;
        
        //Valida la existencia del usuario
        function VerificarUsuario(){
            $oConexion = new Conexion();
            if($oConexion->Conectar()){
            
                $db=$oConexion->objconn;
                
                $sql="Select * From acceso where nomusuario='$this->nombre'";
                $resultado= $db->query($sql);
                if($resultado->num_rows>=1)
                {
                    return true;
                }
                else
                {
                    return false;
                }
            }
            else{
            
                return false;
            }
        }   
        
        
        function VerificarUsuarioContrasenna(){
            $oConexion = new Conexion();
            if($oConexion->Conectar()){
            
                $db=$oConexion->objconn;
                $claveMD5=  md5($this->clave);
                $sql="Select * From acceso where nomusuario='$this->nombre' and PWDUSUARIO='$claveMD5'";
                $resultado= $db->query($sql);
                if($resultado->num_rows>=1)
                {
                    return true;
                }
                else
                {
                    return false;
                }
            }
            else{
            
                return false;
            }
        }  
    }
?>
