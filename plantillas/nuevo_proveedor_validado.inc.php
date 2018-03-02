<div class="form-group">
    <label for="nombre_producto"><b>Nombre</b></label>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre del proveedor"
           <?php $validador->setNombre(); ?>/> 
    <?php $validador->setError_nombre(); ?>
</div>
<div class="form-group">
    <label for="cantidad_producto"><b>Direccion</b></label>
    <input type="text" class="form-control" id="cantidad_producto" name="direccion" placeholder="Ingrese la direccion"
           <?php $validador->setDireccion(); ?>/> 
    <?php $validador->setError_direccion(); ?>
</div>
<div class="form-group">
    <label for="Precio"><b>Telefono</b></label>
    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingrese el telefono del proveedor"
           <?php $validador->setTelefono(); ?>/> 
    <?php $validador->setError_telefono(); ?>
</div>
<div class="form-group">
    <label for="marca"><b>email</b></label>
    <input type="text" class="form-control" id="email" name="email" placeholder="Ingrese el email del proveedor"
           <?php $validador->setEmail(); ?>/> 
    <?php $validador->setError_email(); ?>
</div>
<br>
<button type="submit" class="btn btn-primary" name="guardar_proveedor">Guardar proveedor</button>
<br><br>
