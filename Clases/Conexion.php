<?php
class Conexion {
    //put your code here
    public function Connect() {

        $link = mysqli_connect("localhost", "root", "root", "projectmann");

        if ($link === false){
            die("ERROR: Could not connect. " .mysqli_connect_error());
        }

        return $link;
    }
}
