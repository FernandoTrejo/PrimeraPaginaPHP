<?php
//Declaracion y asignacion por defecto
$nombre = "";
$apellido = "";
$direccion = "";
$telefono = "";
$mensaje = "";
$promedioTexto = "";
$informacion = array();
$notas = array();
$caracteresMensajeTexto = "";

if (isset($_POST["btnEnviar"])) {
    //recibir datos por post y convertirlos a mayusculas
    $nombre = strtoupper($_POST["nombre"]);
    $apellido = strtoupper($_POST["apellido"]);

    //recibir dato por post y convertirlo a minusculas
    $direccion = strtolower($_POST["direccion"]);

    //recibir datos por post
    $telefono = $_POST["telefono"];
    $mensaje = $_POST["mensaje"];
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $nota3 = $_POST["nota3"];

    //calcular promedio de notas y aplicar la funcion round para redondear a 2 decimales
    $promedio = round(($nota1 + $nota2 + $nota3) / 3, 2);

    //creacion del array asociativo
    $informacion = [
        "nombre" => $nombre,
        "apellido" => $apellido,
        "direccion" => $direccion,
        "telefono" => $telefono
    ];

    //creacion del array indexado
    $notas = [$nota1, $nota2, $nota3, $promedio];

    //contar la cantidad de caracteres en el mensaje
    $cantidadCaracteresMensaje = strlen($mensaje);

    //preparar el texto a mostrar para el promedio y los caracteres del mensaje
    $promedioTexto = "($nota1 + $nota2 + $nota3) / 3 = $promedio";
    $caracteresMensajeTexto = "El mensaje '$mensaje' tiene $cantidadCaracteresMensaje caracteres.";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background: #283c86;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #45a247, #283c86);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #45a247, #283c86);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            color: #fff;
        }
    </style>
    <title>Resultados</title>
</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <h3 class="text-center">RESULTADOS</h3>
            <div class="col-md-2">
                <img class="img-fluid" src="img/resultados.png" alt="">
            </div>
            <div class="col-md-8">
                <div class="table-responsive">
                    <table class="table text-light">
                        <tr>
                            <th>Informacion</th>
                            <th>Valor</th>
                        </tr>
                        <tr>
                            <td>Nombre</td>
                            <td><?= $nombre ?></td>
                        </tr>
                        <tr>
                            <td>Apellido</td>
                            <td><?= $apellido ?></td>
                        </tr>
                        <tr>
                            <td>Direccion</td>
                            <td><?= $direccion ?></td>
                        </tr>
                        <tr>
                            <td>Telefono</td>
                            <td><?= $telefono ?></td>
                        </tr>
                        <tr>
                            <td>Promedio</td>
                            <td><?= $promedioTexto ?></td>
                        </tr>
                        <tr>
                            <td>Array Asociativo</td>
                            <td><?= "<pre>" . var_export($informacion, true) . "</pre>" ?></td>
                        </tr>
                        <tr>
                            <td>Caracteres del mensaje</td>
                            <td><?= $caracteresMensajeTexto ?></td>
                        </tr>
                        <tr>
                            <td>Array Indexado</td>
                            <td><?= "<pre>" . var_export($notas, true) . "</pre>" ?></td>
                        </tr>
                    </table>
                </div>

            </div>

        </div>

        <footer>
            <?php echo "<h3 class='text-center mt-5'>Pie de Pagina: Ronald Fernando Gomez Trejo</h3>"; ?>
        </footer>
</body>

</html>