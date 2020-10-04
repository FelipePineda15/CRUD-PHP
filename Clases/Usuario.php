<?php


/**
 * Description of Usuario
 *
 * @author usuario
 */
class Usuario {
    //put your code here
    public function Registrar($Conexion, $name, $surname, $email, $password, $cargoId) {
        $query = "INSERT INTO `usuario` (nombre, apellido, correo, contrasena, cargoId) VALUES('$name', '$surname', '$email', '$password', $cargoId)";
        $response = mysqli_query($Conexion, $query);
        
        if ($response){
            $text = "Registrado con exito";
        }else{
            $text = "Problema con el registro";
        }
        
        return $text;
    }

    public function Consultar($Conexion){
        $query="SELECT * FROM `usuario`";
        $response = mysqli_query($Conexion,$query);
        return $response;
    }
    
    public function ConsultarID($Conexion, $idUsuario){
        $query = "SELECT * FROM `usuario` WHERE idUsuario = $idUsuario";
        $response = mysqli_query($Conexion,$query);
        return $response;
    }
    
    public function Editar($idUsuario, $Conexion, $name, $surname, $email, $password, $idCargo) {
       $query = "UPDATE `usuario` SET nombre ='$name', apellido = '$surname' , correo ='$email', contrasena = '$password', cargoId = $idCargo WHERE idUsuario = $idUsuario";
       $response = mysqli_query($Conexion, $query);
       
       if ($response){
            $text = "Modificado con exito";
        } else {
            echo $query;
            $text = "Problema al actualizar";
        }
        return $text;
    }
    
    public function Eliminar($idUsuario, $Conexion){
        $query= "DELETE FROM `usuario` WHERE idUsuario = $idUsuario";
        $response = mysqli_query($Conexion, $query);
        if ($response){
            $text = "Eliminado con exito";
        } else {
            echo $query;
            $text = "Problema al eliminar";
        }
        return $text;
    }
    
}