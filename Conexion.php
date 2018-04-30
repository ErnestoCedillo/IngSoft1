<?php

class Conexion{
    function conectar(){
        return mysqli_connect("localhost", "Administrador", "admin");
    }
}

?>