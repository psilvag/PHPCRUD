

<?php
    include "../../conexion.php";
    
    $stm=$conexion->prepare("SELECT * FROM contactos");
    $stm->execute();
    $contactos=$stm->fetchAll(PDO::FETCH_ASSOC);
?>

<?php include "../../templates/header.php"?>
<?php include "./create.php"?>


<div class="table-responsive">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#crear">
  + Nuevo
</button> 
<br><br>
    <table class="table ">
        <thead class="table table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Telefono</th>
                <th scope="col">Fecha</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($contactos as $contacto){?>
            <tr class="">
                <td scope="row"><?php echo $contacto['id'];?></td>
                <td><?php echo $contacto['nombre'];?></td>
                <td><?php echo $contacto['telefono'];?></td>
                <td><?php echo $contacto['fecha'];?></td>
            </tr>
        <?php }?>
        </tbody>
       
    </table>
</div>



<?php include "../../templates/footer.php"?>