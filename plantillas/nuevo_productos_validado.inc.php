<div class="form-group">
    <label for="nombre_producto"><b>Nombre del producto</b></label>
    <input type="text" class="form-control" id="nombre_producto" name="nombre_producto" placeholder="Ingrese el nombre del producto"
        <?php $validador->setNombre_producto(); ?>/> 
    <?php $validador->setError_nombre_producto(); ?>
</div>
<div class="form-group">
    <label for="cantidad_producto"><b>Cantidad de producto</b></label>
    <input type="text" class="form-control" id="cantidad_producto" name="cantidad_producto" 
           placeholder="Ingrese la cantidad de producto" <?php $validador->setCantidad_producto(); ?>/> 
    <?php $validador->setError_cantidad_producto(); ?>
</div>
<div class="form-group">
    <label for="Precio"><b>Precio</b></label>
    <input type="text" class="form-control" id="Precio" name="Precio" 
        placeholder="Ingrese el precio del producto" <?php $validador->setPrecio_unidad(); ?>/> 
    <?php $validador->setError_precio_unidad(); ?>
</div>
<div class="form-group">
    <label for="marca"><b>Marca</b></label>
    <input type="text" class="form-control" id="marca" name="marca" 
        placeholder="Ingrese la marca del producto" <?php $validador->setMarca(); ?>/> 
    <?php $validador->setError_marca() ; ?>
</div>
<div class="form-group">
    <label for="descripcion"><b>Descriva el producto</b></label>
    <textarea class="form-control" rows="10" id="contenido" name="descripcion" 
              placeholder="Ingresa la descripcion del producto"><?php $validador->setDescripcion(); ?></textarea> 
    <?php $validador->setError_descripcion(); ?>
</div>
<div class="form-group">
    <select name="Tipo_de_productos">
        <option>Tipo de productos</option>
        <option value="1">Abarrotes</option>
        <option value="2">Carnes Frías</option>
        <option value="3">Dulces y Parvas</option>
        <option value="4">Lácteos</option>
        <option value="5">Congelados</option>
        <option value="6">Frutas</option>
        <option value="7">Cigarrillos y Licores</option>
        <option value="8">Pollos y Pescados</option>
        <option value="9">Varios</option>
        <option value="10">Refrigerados</option>
        <option value="11">Aseo Hogar</option>
        <option value="12">Aseo Personal</option>
    </select>
</div>
<br>
<button type="submit" class="btn btn-primary" name="guardar_producto">Guardar producto</button>
<br><br>
