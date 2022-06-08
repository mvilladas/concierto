<?php

function conectar(){
    $host= "localhost";
    $user = "root";
    $password ="";
    $link = mysqli_connect($host,$user,$password)or die ("Error en conexion");
    $dbname = "taquillabd";

    mysqli_select_db($link,$dbname)or die ( "Error al conectar en base de datos");

    return $link;
}
