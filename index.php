<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <title>Formulario</title>
</head>

<body>
    <div class="container mt-3">

        <div class="row justify-content-center">
            <div class="col-md-5" style="border-right: 1px dashed #fff;">
                <?php
                echo "<h1>Actividad Evaluada 01</h1>";

                echo "1. Impresion con echo <pre>Desarrollo Web con Software Libre</pre>";

                echo "<br/>";

                print "2. Impresion con Print <pre>Desarrollo Web con Software Libre</pre>";

                echo "<br/>";

                echo "3. Impresion con var_dump <br>";
                var_dump("Desarrollo Web con Software Libre");

                echo "<br/><br/>";

                echo "4. Impresion con var_export<br>";
                var_export("Desarrollo Web con Software Libre", false);

                
                echo "<br/><br/>";

                echo "5. Impresion con print_r<br>";
                print_r("Desarrollo Web con Software Libre");

                ?>
            </div>
            <div class="col-md-7">
                <form method="post" action="ProcesarDatos.php">
                    <h4 class="text-center"><i class="fa fa-info-circle"></i> Ingresar Informacion</h4>
                    <div class="d-flex justify-content-around">
                        <div class="mb-3 col-md-5">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" required>
                        </div>
                        <div class="mb-3 col-md-5">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input type="text" class="form-control" name="apellido" id="apellido" required>
                        </div>
                    </div>
                    <div class="d-flex justify-content-around">
                        <div class="mb-3 col-md-5">
                            <label for="direccion" class="form-label">Direccion</label>
                            <input type="text" class="form-control" name="direccion" id="direccion" required>
                        </div>
                        <div class="mb-3 col-md-5">
                            <label for="correo" class="form-label">Correo</label>
                            <input type="email" name="correo" class="form-control" id="correo" required>
                        </div>
                    </div>
                    <div class="d-flex justify-content-around">
                        <div class="mb-3 col-md-5">
                            <label for="telefono" class="form-label">Telefono</label>
                            <input type="tel" pattern="[0-9]{4}-[0-9]{4}" class="form-control" name="telefono" id="telefono" required>
                            <small>Format: ####-####</small>
                        </div>
                        <div class="mb-3 col-md-5">
                            <label for="mensaje" class="form-label">Mensaje</label>
                            <textarea name="mensaje" id="mensaje" class="form-control" required></textarea>
                        </div>
                    </div>
                    <h4 class="text-center mt-3">Ingresar Notas</h4>
                    <div class="d-flex justify-content-around">

                        <div class="mb-3">
                            <label for="nota1" class="form-label">Nota 1</label>
                            <input type="number" step="0.01" min=0 max=10 class="form-control" name="nota1" id="nota1" required>
                        </div>
                        <div class="mb-3">
                            <label for="nota2" class="form-label">Nota 2</label>
                            <input type="number" step="0.01" min=0 max=10 class="form-control" name="nota2" id="nota2" required>
                        </div>
                        <div class="mb-3">
                            <label for="nota3" class="form-label">Nota 3</label>
                            <input type="number" step="0.01" min=0 max=10 class="form-control" name="nota3" id="nota3" required>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="col-md-2">
                            <button type="submit" name="btnEnviar" class="btn btn-primary">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>




    <footer>
        <?php echo "<h3 class='text-center mt-5'>Pie de Pagina: Ronald Fernando Gomez Trejo</h3>"; ?>
    </footer>

</body>

</html>