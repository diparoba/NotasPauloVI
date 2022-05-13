<?php
session_start();
include("../Model/DB.php");

if(isset($_POST['btnlogin'])!=""){
$usu=$_POST['user'];
$pas=$_POST['pass'];

$sql="SELECT * FROM Empleado where correoInstitucional='$usu' and clave='$pas'";
$result=Conectar()->query($sql);

foreach($result as $res){
    @$perfil=$res['Rol_Empleado_idRolEmpleado'];
}

$_SESSION['perfil']=$perfil;

if(@$perfil){
    switch ($perfil) {
        case 1:
            echo "<script>alert('Administrador');
            location.href='../View/inicio.php'; </script>";
            break;
        case 2:
            echo "<script>alert('Administrativo');
            location.href='../View/inicio.php'; </script>";
            break;
        case 3:
            echo "<script>alert('Docente');
            location.href='../View/inicio.php'; </script>";
            break;       
    }
}else{
echo "<script>alert('Usuario/Password incorrecto');
            location.href='../View/login.php'; </script>";
}



}
?>