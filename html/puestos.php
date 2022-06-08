<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ingresar datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="../css/style.css"  rel="stylesheet" type="text/css">
</head>
<body>
<?php require_once "../logica/funciones.php";?>
<div class="bg-image"
     style="background-image: url('../images/fondo2.png');
            height: 100vh;
        background-repeat: no-repeat;
        background-size: 100% auto;">
    <div class="container pt-5 px-5">
        <div class="card tarjeta">
            <form class="p-4" method="post" action="../logica/funciones.php">
                <input type="text" name="funcion" value="seleccionarEvento" hidden>
                <?php
                            $idUser = $_GET["u"];
                            echo "<input type='text' name='usuario' value='$idUser' hidden>";
                            ?>
                <h2 class="m-2 my-4">Ingreso de datos</h2>
                <div class="mb-3 row">
                    <label  class="form-label col-sm-2">Evento</label>
                    <select class="form-select col" aria-label="Default select example" name="evento">
                        <option selected>Escoge el evento que deseas</option>
                        <?php
                            $eventos = consultarEventos();

                            foreach ($eventos as $evento){
                                echo "<option value=$evento[0]> $evento[1] </option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="mb-3 row">
                    <label for="numero" class="form-label col-sm-2">Número de entradas</label>
                    <input type="number" class="form-control col" id="numero" name="entradas" placeholder="Ingrese el número entradas">
                </div>
                <div class="d-flex justify-content-around">
                    <button type="submit" class="btn btn-primary w-25">Enviar</button>
                </div>
            </form>
        </div>

    </div>
</div>


</body>
</html>