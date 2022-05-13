<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Persona</title>
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
    $respuesta = mysqli_query($conexiondb, $query);
    $persona = mysqli_fetch_row($respuesta);
    mysqli_close($conexiondb);
    ?>

    <div id="formul">
        <h1 class="text-center">Editar Docente</h1>
        <div class="col-sm-4 offset-sm-4">
            <br>
            <form action="guardar_docente.php" method="post">
                <table border="0">
                    <tr>
                        <th><b><label for="">Cedula:</label></b></th>
                        <th><input type="text" name="cedula" id="" value='<?php echo $persona[1]; ?>'></th>
                    </tr>

                    <tr>
                        <th><b><label for="">Nombre:</label></b></th>
                        <th><input type="text" name="nombre" id="" value='<?php echo $persona[2]; ?>'></th>
                    </tr>

                    <tr>
                        <th><b><label for="">Apellido:</label></b></th>
                        <th><input type="text" name="apellido" id="" value='<?php echo $persona[3]; ?>'></th>
                    </tr>

                    <tr>
                        <th><b><label for="">Fecha de N.:</label></b></th>
                        <th><input type="date" name="nacimiento" id="" value='<?php echo $persona[4]; ?>'></th>
                    </tr>

                    <tr>
                        <th><b><label for="">Profesión:</label></b></th>
                        <th><input type="text" name="profesion" id="" value='<?php echo $persona[5]; ?>'></th>
                    </tr>

                </table>
                <input type="hidden" name="editar" id="" value='si' readonly>
                <input type="submit" value="GUARDAR">
            </form>
        </div>
    </div>

    <link rel="stylesheet" href="./css/index.css">

</body>

</html>