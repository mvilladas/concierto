<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ingresar datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="bg-image"
     style="background-image: url('../images/fondo2.png');
            height: 100vh;
        background-repeat: no-repeat;
        background-size: 100% auto;
        background-attachment: fixed;"
>
    <div class="container pt-5">
        <?php
        require_once "../logica/funciones.php";

        $boletas = consultarBoletas();

        foreach ($boletas

        as $boleta){
        ?>


        <div class="card">

            <div class="card-body">
                <h3 class="card-title" name="evento">Evento: <?php echo $boleta->nombre ?></h3>
                <h6 class="card-subtitle mb-2 text-muted" name="artista">Artista: <?php echo $boleta->artista ?></h6>
                <div class="d-flex justify-content-end pr-2">
                    <p class="card-text" name="fecha">Fecha: <?php echo $boleta->fecha ?></p>
                </div>
                <div class="d-flex justify-content-end  mr-2">
                    <p class="card-text" name="hora">Hora: <?php echo $boleta->hora ?></p>
                </div>
                <div class="d-flex justify-content-around">
                    <p class="card-text display-6" name="localidad">Localidad: <?php echo $boleta->lugar ?></p>
                    <p class="card-text display-6" name="localidad">Silla: <?php echo $boleta->asiento ?></p>
                </div>

            </div>
        </div><br>

        <?php }
        ?>
    </div>

</div>
</body>
</html>