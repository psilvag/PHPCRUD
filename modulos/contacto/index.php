

<?php
    include "../../conexion.php";

    $stm=$conexion->prepare("SELECT * FROM contactos");
    $stm->execute();
    $contactos=$stm->fetchAll(PDO::FETCH_ASSOC);

    //ELIMINAR CONTACTO
if(isset($_GET['id'])){
   $id=(isset($_GET['id']) ? $_GET['id']:"");
   $stm=$conexion->prepare("DELETE FROM contactos WHERE id=:id");  
   $stm->bindParam(":id",$id);
   $stm->execute();
   header("location:contacto");
}


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
                <td>
                <a href="contacto/editar.php?id=<?php echo $contacto['id'];?>" class="btn btn-success">Editar</a>
                <a href="contacto?id=<?php echo $contacto['id'];?>" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
        <?php }?>
        </tbody>
       
    </table>
</div>




<?php include "../../templates/footer.php"?>