<?php
include("../Template/template.php");
include("../Model/empleado.php");
?>

<br>
<div class="container">
    <div class="card-header">
        <h3>Empleados</h3>

    </div>
    <div class="card-body">
        <table class="table table">
            <tr>
                <td>Nombres</td>
                <td>Apellidos</td>
                <td>Identificación</td>
                <td>Correo Personal</td>
                <td>Correo Institucional</td>
                <td>Detalles</td>
           
            </tr>
            <?php
            $emp=new Empleado();
            $res= $emp->getEmpleado();
            foreach($res as $row){
            ?>
            <tr>
                <td><?php echo $row['nombres']; ?></td>
                <td><?php echo $row['apellidos']; ?></td>
                <td><?php echo $row['numIdentificacion']; ?></td>
                <td><?php echo $row['correoPersonal']; ?></td>
                <td><?php echo $row['correoInstitucional']; ?></td>
                <td>
                    <input class="btn btn-primary" type="button" value="Det" data-bs-toggle="modal" data-bs-target="#contenido-modal">
                </td>
            </tr>
                
            <?php   
            }
            ?>
        </table>
    </div>
</div>
<div class="modal fade" id="contenido-modal" tabindex="-1">
    <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">

                </div>
            </div>
    </div>

</div>


<?php
include("../Template/footer.php")
?>