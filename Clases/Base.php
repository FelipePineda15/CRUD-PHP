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
        $sql = "SELECT usuario, password FROM administrador WHERE usuario = '$usuario' and password = $password";
        $Datos = mysqli_query($Conexion, $sql);
        return $Datos;
    }
    
    public function VerificarCargo($usuario, $password, $conexion){
        $sql = "SELECT cargo.IDcargo FROM cargo INNER JOIN cargoUsuario ON cargo.IDcargo = cargoUsuario.IDcargo"
             . " INNER JOIN administrador ON administrador.IDusuario = cargoUsuario.IDusuario "
             . " WHERE administrador.usuario = '$usuario' and administrador.password = $password";
        $datos = mysqli_query($conexion, $sql);
        $rol = mysqli_fetch_array($datos);
        return $rol['IDcargo'];
    }
}