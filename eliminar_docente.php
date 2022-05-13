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

require 'db.php';

$conexiondb = conectardb();
$query = "DELETE FROM docente";
$respuesta = mysqli_query($conexiondb, $query);

if ($respuesta) {
    echo ("Se borraron los datos de la persona");
    //echo ("<br>");
    //echo ("<a href='./listar_docente.php'>Listado de Docente</a>");
} else {
    echo ("Error: no se puede borrar la persona");
    //echo ("<br>");
    //echo ("<a href='./listar_docente.php'>Listado de Docente</a>");
}
?>