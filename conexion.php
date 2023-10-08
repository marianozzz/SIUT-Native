<?php

function Conectar()
{
    $server = "localhost";
    $user = "root";
    $database = "app";
    $pass ="";

    $conexion = new mysqli($server,$user,$pass,$database);
    if($conexion->error)
    die("error en la conexion");

    return $conexion;
}

?>