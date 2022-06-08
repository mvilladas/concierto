<?php
require_once("conexion.php");

if(isset($_POST["funcion"])){
    $funcion = $_POST["funcion"];
}else{
    $funcion = "";
};

switch ($funcion) {
    case "agregarUsuario":
        agregarUsuario();
        break;
    case "seleccionarEvento":
        seleccionarEvento();
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

    if ($link->error != null) {
        alert('Hubo un error al guardar el usuario');
    } else {
        echo "<script>
            window.location.href='../html/puestos.php';
            </script>";
    }


}

function consultarEventos(){
    $link = conectar();

    $eventos = $link->query("SELECT * FROM evento")->fetch_all();

    return $eventos;
}

function seleccionarEvento(){
    $evento = $_POST["evento"];
    $numEntradas = $_POST["entradas"];
    header("Location: ../html/puestos.php?ev=".$evento."&ne=".$numEntradas);
}