<?php

include_once 'plantillas/inicioHTML.inc.php';
include_once 'plantillas/navbar.inc.php';
$array_productos = RepositorioAdministrador::obtener_productos(Conexion::obtener_conexion(), 1234567890, 11);
?>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12 main">
            <div class="row gestor_entrada">
                <div class="col-md-12">
                    <h2 class="text-center">Aseo Hogar</h2>
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
                                    <th>Nombre</th><th>Cantidad</th><th>Precio</th><th>descripcion</th><th>Marca</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                for ($i = 0; $i < count($array_productos); $i++) {
                                    $entrada_actual = $array_productos[$i][0];
                                    ?>
                                    <tr>
                                        <td><?php echo $entrada_actual->getNombre_producto(); ?></td>
                                        <td><?php echo $entrada_actual->getCantidad_producto(); ?></td>
                                        <td><?php echo $entrada_actual->getPrecio_unidad(); ?></td>
                                        <td><?php echo $entrada_actual->getDescripcion(); ?></td>
                                        <td><?php echo $entrada_actual->getMarca(); ?></td>
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
        </div>
    </div>
</div>