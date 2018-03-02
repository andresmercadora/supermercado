<div class="row gestor_entrada">
    <div class="col-md-12">
        <h2 class="text-center">Proveedores</h2>
        <a href="<?php echo RUTA_NUEVA_PROVEEDOR;?>" class="btn btn-sm btn-primary" role="button" id="btnNuevaEntrada">Ingresar Proveedor</a><br><br>
    </div>
</div>
<br><br><br>
<div class="row gestor_entrada1">
    <div class="col-md-12">
        <?php
        if (count($array_proveedor) > 0) {
            ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th><th>Direccion</th><th>Telefono</th><th>Email</th><th></th><th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        for($i = 0; $i < count($array_proveedor); $i++) {
                            $entrada_actual = $array_proveedor[$i][0];
                        ?>
                            <tr>
                                <td><?php echo $entrada_actual -> getNombre();?></td>
                                <td><?php echo $entrada_actual -> getDireccion();?></td>
                                <td><?php echo $entrada_actual -> getTelefono();?></td>
                                <td><?php echo $entrada_actual -> getEmail();?></td>
                                <td>
                                    <form method="POST" action="<?php echo RUTA_EDITAR_PROVEEDOR;?>">
                                        <input type="hidden" name="id_editar" value="<?php echo $entrada_actual -> getNit();?>"/>
                                        <button type="submit" class="btn btn-default btn-xs" name="editar_proveedor">Editar</button>
                                    </form>
                                </td>
                                <td>
                                    <form method="POST" action="<?php echo RUTA_BORRAR_PROVEEDOR;?>">
                                        <input type="hidden" name="id_borrar" value="<?php echo $entrada_actual -> getNit();?>"/>
                                        <button type="submit" class="btn btn-default btn-xs" name="borrar_proveedor">Borrar</button>
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
            <h3 class="text-center">Todavia no se aingresado proveedores</h3><br>
            <?php
        }
        ?> 
    </div>
</div>
