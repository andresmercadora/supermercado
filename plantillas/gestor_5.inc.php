<div class="row gestor_entrada">
    <div class="col-md-12">
        <h2 class="text-center">Congelados</h2>
        <a href="<?php echo RUTA_NUEVA_PRODUCTOS;?>" class="btn btn-sm btn-primary" role="button" id="btnNuevaEntrada">Ingresar Producto</a><br><br>
    </div>
</div>
<br><br><br>
<div class="row gestor_entrada1">
    <div class="col-md-12">
        <?php
        if (count($array_productos) > 0) {
            ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th><th>Cantidad</th><th>Precio</th><th>descripcion</th><th>Marca</th><th></th><th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        for($i = 0; $i < count($array_productos); $i++) {
                            $entrada_actual = $array_productos[$i][0];
                        ?>
                            <tr>
                                <td><?php echo $entrada_actual -> getNombre_producto();?></td>
                                <td><?php echo $entrada_actual -> getCantidad_producto();?></td>
                                <td><?php echo $entrada_actual -> getPrecio_unidad();?></td>
                                <td><?php echo $entrada_actual -> getDescripcion();?></td>
                                <td><?php echo $entrada_actual -> getMarca();?></td>
                                <td>
                                    <form method="POST" action="<?php echo RUTA_EDITAR_PRODUCTOS;?>">
                                        <input type="hidden" name="id_editar" value="<?php echo $entrada_actual -> getCod_producto();?>"/>
                                        <button type="submit" class="btn btn-default btn-xs" name="editar_entrada">Editar</button>
                                    </form>
                                </td>
                                <td>
                                    <form method="POST" action="<?php echo RUTA_BORRAR_PRODUCTOS;?>">
                                        <input type="hidden" name="id_borrar" value="<?php echo $entrada_actual -> getCod_producto();?>"/>
                                        <input type="hidden" name="tp_borrar" value="<?php echo $entrada_actual -> getT_producto();?>"/>
                                        <button type="submit" class="btn btn-default btn-xs" name="borrar_productos">Borrar</button>
                                    </form>
                                </td>
                            </tr>
                        <?php  
                        }
                    ?> 
                </tbody>
            </table>
            <?php
        } else {
            ?>
            <h3 class="text-center">Todavia no se aingresado producto</h3><br>
            <?php
        }
        ?> 
    </div>
</div>