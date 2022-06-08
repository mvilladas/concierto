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
<div class="bg-image"
     style="background-image: url('../images/fondo2.png');
            height: 100vh;
        background-repeat: no-repeat;
        background-size: 100% auto;">
    <div class="container pt-5 px-5">
        <div class="card tarjeta">
            <form class="p-4">
                <h2 class="m-2 my-4">Ingreso de datos</h2>

                <div class="mb-3 row">
                    <label  class="ml-5 form-label col-sm-2  ">Localidad</label>
                    <select class="form-select col" aria-label="Default select example">
                        <option selected>Escoge la localidad</option>
                        <option value="1">Diamante sur</option>
                        <option value="2">Diamante centro</option>
                        <option value="3">Diamante norte</option>
                        <option value="4">Platino sur</option>
                        <option value="5">Platino centro</option>
                        <option value="6">Platino norte</option>
                        <option value="7">Platea alta</option>
                        <option value="8">Platea baja</option>

                    </select>
                </div>
                <div class="mb-3 row">
                    <label for="puesto" class="form-label col-sm-2">Puesto</label>
                    <input type="text" class="form-control col" id="puesto"  placeholder="Ingrese el número de silla">
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