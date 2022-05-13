<?php
include("../Model/empleado.php");

$tipoIdent=$_POST['cbTipoIdent'];
$NumIdent=$_POST['txtNumIdent'];
$Nombres=$_POST['txtNombres'];
$Apellidos=$_POST['txtApellidos'];
$CorreoPersonal=$_POST['txtCorreoPersonal'];
$Genero=$_POST['cbGenero'];
$fechaNow = new DateTime();
$fechaNow->format("Y-m-d H:i:s");
$emp = new Empleado();
$resultado= $emp->createEmpleado($tipoIdent,$NumIdent,$Nombres,$Apellidos,$CorreoPersonal,$Genero,$fechaNow);
?>