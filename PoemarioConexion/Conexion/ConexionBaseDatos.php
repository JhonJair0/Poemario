<?php

session_start();

$Host = "localhost";
$User = "root";
$Password = "";
$BaseDatos = "Poemario";


$Conexion = mysqli_connect($Host,$User,$Password,$BaseDatos);
