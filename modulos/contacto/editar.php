<?php
    include "../../conexion.php"





?>


<?php include "../../templates/header.php"?>
<form action="" method="post">
      <div class="modal-body">
         <label for="">Nombre</label>
         <input type="text" class="form-control" name="nombre" value="" placeholder="Ingresa tu nombre">
         <label for="">Telefono</label>
         <input type="text" class="form-control" name="telefono" value="" placeholder="Ingresa tu telefono">
         <label for="">Fecha</label>
         <input type="date" class="form-control" name="fecha" value="">
      </div>
      <div class="modal-footer">
        <a href="/modulos/contacto" class="btn btn-danger">Cancelar</a>
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </div>
</form>

<?php include "../../templates/footer.php"?>