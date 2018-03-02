<input type="hidden" id="id-producto" name="id-proveedor" value="<?php  echo $id_proveedor;?>" />
<div class="form-group">
    <label for="nombre"><b>Nombre</b></label>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre del proveedor"
         value="<?php echo $proveedor_recuperados -> getNombre();?>"/> 
    <input type="hidden" id="nombre-producto-original" name="nombre-original" value="<?php  echo $proveedor_recuperados -> getNombre();?>" />
</div>
<div class="form-group">
    <label for="direccion"><b>Direccion</b></label>
    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingrese la direccion"
        value="<?php echo $proveedor_recuperados -> getDireccion();?>"/> 
    <input type="hidden" id="nombre-producto-original" name="direccion-original" value="<?php  echo $proveedor_recuperados -> getDireccion();?>" />
</div>
<div class="form-group">
    <label for="telefono"><b>Telefono</b></label>
    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingrese el telefono del proveedor"
       value="<?php echo $proveedor_recuperados -> getTelefono();?>"/> 
    <input type="hidden" id="telefono-original" name="telefono-original" value="<?php  echo $proveedor_recuperados -> getTelefono();?>" />
</div>
<div class="form-group">
    <label for="email"><b>email</b></label>
    <input type="text" class="form-control" id="email" name="email" placeholder="Ingrese el email del proveedor"
        value="<?php echo $proveedor_recuperados -> getEmail();?>"/> 
    <input type="hidden" id="telefono-original" name="email-original" value="<?php  echo $proveedor_recuperados -> getEmail();?>" />
</div>
<br>
<button type="submit" class="btn btn-primary" name="guardar_cambios_proveedor">Guardar proveedor</button>
<br><br>
