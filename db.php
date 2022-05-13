<?php
    function conectardb() {
        $servidor = 'localhost';
        $usuario = 'root';
        $contraseña = '';
        $personadb = 'docente';

        $conexion = mysqli_connect($servidor, $usuario, $contraseña, $personadb);

        return $conexion;
    }
?>