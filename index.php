<?php
require_once("conexion.php");

$funcion = $_POST["funcion"];

switch ($funcion) {
    case "agregarUsuario":
        agregarUsuario();
        break;
}


function agregarUsuario()
{
    $nombres = $_POST["nombre"];
    $apellidos = $_POST["apellido"];
    $documento = $_POST["documento"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $edad = $_POST["edad"];

    $link = conectar();

    $link->query("INSERT INTO usuario(id, nombres, apellidos, documento, telefono, correo,  edad) VALUES (NULL, '$nombres','$apellidos','$documento','$telefono','$correo','$edad')");

    if ($link->error != null){
        echo "Hubo une error al guardar el usuario";
    }
}


