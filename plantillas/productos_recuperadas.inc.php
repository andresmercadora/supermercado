<input type="hidden" id="id-producto" name="id-producto" value="<?php  echo $id_producto?>" />
<div class="form-group">
    <label for="nombre_producto"><b>Nombre del producto</b></label>
    <input type="text" class="form-control" id="nombre_producto" name="nombre_producto" placeholder="Ingrese el nombre del producto"
           value="<?php echo $productos_recuperados -> getNombre_producto();?>"/> 
    <input type="hidden" id="nombre-producto-original" name="nombre-producto-original" value="<?php  echo $productos_recuperados -> getNombre_producto();?>" />
</div>
<div class="form-group">
    <label for="cantidad_producto"><b>Cantidad de producto</b></label>
    <input type="text" class="form-control" id="cantidad_producto" name="cantidad_producto" placeholder="Ingrese la cantidad de producto"
           value="<?php echo $productos_recuperados -> getCantidad_producto();?>"/>
    <input type="hidden" id="cantidad-producto-original" name="cantidad-producto-original" value="<?php  echo $productos_recuperados -> getCantidad_producto();?>" />
</div>
<div class="form-group">
    <label for="Precio"><b>Precio</b></label>
    <input type="text" class="form-control" id="Precio" name="Precio" placeholder="Ingrese el precio del producto"
           value="<?php echo $productos_recuperados -> getPrecio_unidad();?>"/>
    <input type="hidden" id="precio-unidad-original" name="precio-unidad-original" value="<?php  echo $productos_recuperados -> getPrecio_unidad();?>" />
</div>
<div class="form-group">
    <label for="marca"><b>Marca</b></label>
    <input type="text" class="form-control" id="marca" name="marca" placeholder="Ingrese la marca del producto"
           value="<?php echo $productos_recuperados -> getMarca();?>"/>
    <input type="hidden" id="marca-origin" name="marca-origin" value="<?php  echo $productos_recuperados -> getMarca;?>" />
</div>
<div class="form-group">
    <label for="descripcion"><b>Descriva el producto</b></label>
    <textarea class="form-control" rows="10" id="contenido" name="descripcion" placeholder="Ingresa la descripcion del producto"><?php echo $productos_recuperados -> getDescripcion();?></textarea>
    <input type="hidden" id="descripcion-origin" name="descripcion-origin" value="<?php  echo $productos_recuperados -> getDescripcion();?>" />
</div>
<br>
<button type="submit" class="btn btn-primary" name="guardar_cambios_producto">Guardar cambios</button>
<br><br>