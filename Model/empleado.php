<?php
include("DB.php");
class Empleado{
    function getEmpleado(){
        $sql="SELECT * FROM empleado INNER JOIN persona  ON empleado.Persona_idPersona=persona.idPersona  WHERE empleado.estado='A'";
        $res=Conectar()->query($sql);
        return $res;
    }
    function createEmpleado($tipoIdent, $numIdent, $nombres, $apellidos, $correoPersonal, $genero, $perAdd){
        $sql="INSERT INTO persona(tipoIdentificacion,numIdentificacion,nombres,apellidos,correoPersonal,genero,perAdd) VALUE('$tipoIdent','$numIdent','$nombres','$apellidos','$correoPersonal','$genero','$perAdd') ";
        $res=Conectar()->query($sql);
        return $res;
    }
}

?>