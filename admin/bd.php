<?php

$servidor="localhost";
$baseDeDatos="bdFormulario";
$usuario="root";
$contrasenia="";

try {
    $conexion=new PDO("mysql:host=$servidor;dbname=$baseDeDatos",$usuario,$contrasenia);
    echo "Conexion realizada...";
} catch (Exception $error) {
    echo $error->getMessage();
}




?>