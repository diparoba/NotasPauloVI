<?php

/*
$enlace = mysqli_connect("127.0.0.1","root","","pw1"); #1 forma funciones
$link = new mysqli("127.0.0.1","root","","pw1"); #2 forma clases

$mbd = new PDO('mysql:host=localhost;dbname=prueba')
*/

function Conectar(){ 
    $link = new mysqli("127.0.0.1:3307","root","admin.2109","sisacademicgbmpvi") or die("Error al conectar a la B.D");
    $link->set_charset("utf-8");  #para que me traiga los caracteres del idioma definido en la base de datos
    return $link;
}

$mysli=Conectar();

/*
if($mysli){

    echo "Conectado";
}else{
    echo "Error";
}
*/







?>