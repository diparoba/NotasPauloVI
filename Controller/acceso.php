<?php
session_start();
include("../Model/DB.php");

if(isset($_POST['btnlogin'])!=""){
$usu=$_POST['user'];
$pas=$_POST['pass'];

$sql="SELECT * FROM Empleado where correoInstitucional='$usu' and clave='$pas'";
$result=Conectar()->query($sql);

/*  una opcion para cerrar el foreach
foreach($result as $res):
endforeach;*/

//$perfil=0;

#segunda opcion pero no recomendable poner @


foreach($result as $res){
    @$perfil=$res['Rol_Empleado_idRolEmpleado'];
}

$_SESSION['perfil']=$perfil;

if(@$perfil){
    #echo "Usuario Correcto";
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
echo "Usuario incorrecto";
//echo "<script>alert('Usuario/Password incorrecto');
            //location.href='../Vista/login.php'; </script>";
}



}
?>