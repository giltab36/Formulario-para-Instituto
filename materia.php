<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Institución</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div id="navegacion">
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="./images/logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                    Instituto
                </a>
                <a class="nav-link" href="./materia.php">Registrar Materia</a>
                <a class="nav-link" href="./listar_docente.php">Listado de Docentes</a>
                <a class="nav-link" href="./reporte_docente.php">Reportes</a>
            </div>
        </nav>
    </div>

    <?php
    include 'db.php';
    $conexiondb = conectardb();
    $query = "SELECT * FROM docente ORDER BY nombre ASC";
    $resultado = mysqli_query($conexiondb, $query);
    mysqli_close($conexiondb);
    ?>

    <div id="formu">
        <h1 id="titulo_principal" class="text-center">Registro de Materias</h1>

        <div class="col-sm-4 offset-sm-4">
            <br>
            <form action="guardar_materia.php" method="post">

                <!--<input type="hidden" name="">


                <div class="mb-2">
                    <th><b><label for="">Cedula:</label></b></th>
                    <th><input class="form-control" type="text" name="cedula" id=""></th>
                </div>-->


                <div class="mb-3">
                    <th><b><label for="">Materia:</label></b></th>
                    <th><input class="form-control" type="text" name="nombre_m" id=""></th>
                </div>

                <div class="mb-3">
                    <th><b><label for="">Horas Catedras:</label></b></th>
                    <th><input class="form-control" type="text" name="horas_c" id=""></th>
                </div>

                <!--<div class="mb-3">
                    <th><b><label for="">Fecha de Nacimiento:</label></b></th>
                    <th><input class="form-control" type="text" name="nacimiento" id=""></th>
                </div>

                <div class="mb-3">
                    <th><b><label for="">Profesión:</label></b></th>
                    <th><input class="form-control" type="text" name="profesion" id=""></th>
                </div>-->

                <div class="mb-3">
                    <th><b><label for="">Docente:</label></b></th>
                    <th>
                        <select name="docente_id" class=" form-control" id="inputGroupSelect01">
                            <?php
                            while ($docente_id = mysqli_fetch_assoc($resultado)) {
                                echo "<option value='" . $docente_id['id'] . "'>" . $docente_id['nombre'] . "</option>";
                            }
                            ?>
                        </select>
                    </th>
                </div>

                <input type="hidden" name="editar" id="" value='no' readonly>
                <input class="btn btn-outline-primary" type="submit" value="GUARDAR">
            </form>
        </div>
    </div>

    <link rel="stylesheet" href="./css/index.css">

</body>

</html>