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
    <link rel="stylesheet" href="./css/index.css">

</head>

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

$nombre_m = $_POST['nombre_m'];
$horas_c = $_POST['horas_c'];
$editar = $_POST['editar'];
$docente_id = $_POST['docente_id'];

$conexiondb = conectardb();

if ($editar == "si") {
    $query = "UPDATE materia SET nombre_m='" . $nombre_m . "', horas_c='" . $horas_c . "'";
} else {
    $query = "INSERT INTO materia (nombre_m, horas_c, docente_id) VALUES 
        ('$nombre_m', '$horas_c', $docente_id)";
}

$respuesta = mysqli_query($conexiondb, $query);

if ($respuesta) {
    if ($editar == "si") {
        echo ("Se Actualizaron los datos de la Materia");
    } else {
        echo ("Se Registro los datos de la Materia");
    }
} else {
    if ($editar == "si") {
        echo ("No se pudo actualizar los datos de la Materia");
    } else {
        echo ("No se pudo registrar los datos de la Materia");
    }
}

mysqli_close($conexiondb);
