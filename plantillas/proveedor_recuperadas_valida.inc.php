<input type="hidden" id="id-proveedor" name="id-proveedor" value="<?php  echo $id_proveedor;?>" />
<div class="form-group">
    <label for="nombre"><b>Nombre</b></label>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre del proveedor"
         value="<?php echo $validador -> getNombre();?>"/> 
    <input type="hidden" id="nombre-producto-original" name="nombre-original" value="<?php  echo $proveedor_recuperados -> getNombre();?>" />
    <?php $validador->setError_nombre(); ?>
</div>
<div class="form-group">
    <label for="direccion"><b>Direccion</b></label>
    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingrese la direccion"
        value="<?php echo $validador -> getDireccion();?>"/> 
    <input type="hidden" id="nombre-producto-original" name="direccion-original" value="<?php  echo $proveedor_recuperados -> getDireccion();?>" />
    <?php $validador->setError_direccion(); ?>
</div>
<div class="form-group">
    <label for="telefono"><b>Telefono</b></label>
    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingrese el telefono del proveedor"
       value="<?php echo $validador -> getTelefono();?>"/> 
    <input type="hidden" id="telefono-original" name="telefono-original" value="<?php  echo $proveedor_recuperados -> getTelefono();?>" />
    <?php $validador->setError_telefono(); ?>
</div>
<div class="form-group">
    <label for="email"><b>email</b></label>
    <input type="text" class="form-control" id="email" name="email" placeholder="Ingrese el email del proveedor"
        value="<?php echo $validador -> getEmail();?>"/> 
    <input type="hidden" id="telefono-original" name="email-original" value="<?php  echo $proveedor_recuperados -> getEmail();?>" />
    <?php $validador->setError_email(); ?>
</div>
<br>
<button type="submit" class="btn btn-primary" name="guardar_cambios_proveedor">Guardar proveedor</button>
<br><br>
