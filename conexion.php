<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "bdFormulario";

//$conn = new PDO("mysql:host=$server;dbname=$db",$username,$password);
$conn = new mysqli($server, $username, $password, $db);

// try{

//     $conexion=new PDO("mysql:host=$server,$username,$password,$db");
//     echo "Conexion Realizada"

// }catch(Exeption $error){
//     echo $error->getMessage(); 
// }
?>