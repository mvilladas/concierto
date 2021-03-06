<?php
require_once("conexion.php");

session_start();
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
    case "guardarCompra":
        guardarCompra();
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
        $url = "../html/puestos.php?u=".$link->insert_id;
        echo "<script>
            window.location.href='$url';
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
    $usuario = $_POST["usuario"];
    $numEntradas = $_POST["entradas"];
    header("Location: ../html/entradas.php?ev=".$evento."&ne=".$numEntradas."&u=".$usuario);
}

function guardarCompra(){
    $_SESSION["entradasRegistradas"] = array();
    $link = conectar();

    $localidad = $_POST["localidad"];
    $evento = $_POST["evento"];
    $usuario = $_POST["usuario"];
    $numEntradas = $_POST["numEntradas"];

    for($i = 1; $i <= $numEntradas; $i++){
        $silla = $_POST["entrada".$i];
        $link->query("INSERT INTO entrada(id, lugar, asiento, evento_id, usuario_id) VALUES (NULL, '$localidad','$silla','$evento','$usuario')");
        array_push($_SESSION["entradasRegistradas"],$link->insert_id);
    }
    echo "<script>
            alert('Entradas registradas correctamente');
            </script>";

    header("Location: ../html/boleta.php");
}

function consultarBoletas(){
    $link = conectar();
    $entradas = array();
    foreach($_SESSION["entradasRegistradas"] as $id){
        $entrada = $link->query("SELECT lugar,asiento, nombre, artista, fecha, hora,nombres,apellidos FROM entrada join evento on evento.id=evento_id join usuario on usuario.id = usuario_id WHERE entrada.id = '$id'")->fetch_object();
        array_push($entradas,$entrada);
    }

    return $entradas;
}