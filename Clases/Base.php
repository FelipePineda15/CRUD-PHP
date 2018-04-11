<?php

class Base {

    public function Conectar() {

        $link = mysqli_connect("localhost", "root", "", "latin_sports");

        if ($link === FALSE) {
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }

        return $link;
    }

    public function Login($Usuario, $Password, $Conexion) {
        $sql = "Select Usuario, Password FROM Administrador WHERE Usuario = '$Usuario' and Password = $Password";
        $Datos = mysqli_query($Conexion, $sql);
        return $Datos;
    }
    
    public function VerificarCargo($Usuario, $Password, $Conexion){
        $sql = "SELECT Cargo.IDCargo FROM Cargo INNER JOIN CargoUsuario ON Cargo.IDCargo = CargoUsuario.IDCargo"
             . " INNER JOIN Administrador ON Administrador.IDUsuario = CargoUsuario.IDUsuario "
             . " WHERE Administrador.Usuario = '$Usuario' and Administrador.Password = $Password";
        $Datos = mysqli_query($Conexion, $sql);
        $Rol = mysqli_fetch_array($Datos);
        return $Rol['IDCargo'];
    }
}