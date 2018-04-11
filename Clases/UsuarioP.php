<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author usuario
 */
class Usuario {
    //put your code here
    public function Registrar($Conexion, $Nombre, $Correo, $Password) {
        $query = "INSERT INTO Usuario (Nombre, Correo, Password) Values('$Nombre', '$Correo', '$Password')";
        $Consulta = mysqli_query($Conexion, $query);
        
        if ($Consulta){
            $Respuesta = "Registrado con exito";
        }else{
            $Respuesta = "Problema con el registro";
        }
        
        return $Respuesta;
    }

    public function Consultar($Conexion){
        $query="SELECT * FROM Usuario";
        $Consulta = mysqli_query($Conexion,$query);
        return $Consulta;
    }
    
    public function ConsultarID($Conexion, $ID){
        $query = "SELECT * FROM Usuario WHERE IDUsuario = $ID";
        $Consulta = mysqli_query($Conexion, $query);
        return $Consulta;
    }
    
    public function Editar($Conexion, $Nombre, $Correo, $ID) {
       $query = "UPDATE Usuario SET Nombre ='$Nombre', Correo ='$Correo' WHERE IDUsuario ='$ID'";
       $Consulta = mysqli_query($Conexion, $query);
       
       if ($Consulta){
            $Respuesta = "Modificado con exito";
        } else {
            $Respuesta = "Problema al actualizar";
        }
        return $Respuesta;
    }
    
    public function Eliminar($ID, $Conexion){
        $query= "DELETE FROM Usuario WhERE IDUsuario = $ID";
        $Consulta = mysqli_query($Conexion, $query);
        if ($Consulta){
            $Respuesta = "Eliminado con exito";
        } else {
            $Respuesta = "Problema al eliminar";
        }
        return $Respuesta;
    }
    
}
