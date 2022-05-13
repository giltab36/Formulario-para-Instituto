<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Docentes</title>
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
    $query = "SELECT * FROM docente";
    $resultado = mysqli_query($conexiondb, $query);
    mysqli_close($conexiondb);
    ?>

    <div class="col-sm-6 offset-sm-3">
        <h1 class="text-center  mt-5">Listado de Personas</h1>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">N</th>
                    <th scope="col">Cédula</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Fecha de Nacimiento</th>
                    <th scope="col">Profesión</th>
                    <!--<th scope="col">Materia</th>-->
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $index = 1;
                while ($persona = mysqli_fetch_assoc($resultado)) {
                    echo "<tr>";
                    echo "<th scope='row'>" . $index++ . "</th>";
                    echo "<td>" . $persona['cedula'] . "</td>";
                    echo "<td>" . $persona['nombre'] . "</td>";
                    echo "<td>" . $persona['apellido'] . "</td>";
                    echo "<td>" . $persona['nacimiento'] . "</td>";
                    echo "<td>" . $persona['profesion'] . "</td>";
                    //echo "<td>" . $materia['nombre_m'] . "</td>";
                    echo "<td>";
                    echo "<a href='/wep_app/editar_docente.php?cedula=" . $persona['cedula'] . "' class='btn btn-success mx-1 my-1'> <i class='fas fa-pen'></i> </a>";
                    echo "<a href='/wep_app/eliminar_docente.php?cedula=" . $persona['cedula'] . "' class='btn btn-danger mx-1 my-1'> <i class='fas fa-trash'></i> </a>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <link rel="stylesheet" href="./css/index.css">

</body>

</html>