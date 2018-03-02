<?php
include_once 'app/Conexion.inc.php';
include_once 'app/RepositorioAdministrador.inc.php';
$titulo = 'Supermercado';
include_once 'plantillas/inicioHTML.inc.php';
include_once 'plantillas/navbar.inc.php';
?>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12 main">
            <div class="row text-center">
                <div class="col-md-4 gg_elemento" id="gg_entradas">
                    <h5>Abarrotes</h5>
                    <hr>
                    <a class="nav-link" href="<?php echo RUTA_GESTOR_1_1; ?>"> <IMG src="img/1.jpg" width="250" height="200"/></a>
                </div>
                <div class="col-md-4 gg_elemento" id="gg_comentarios">
                    <h5>Carnes Frías</h5>
                    <hr>
                    <a class="nav-link" href="<?php echo RUTA_GESTOR_2_1; ?>"> <IMG src="img/2.jpg" width="250" height="200"/></a>
                </div>
                <div class="col-md-4 gg_elemento" id="gg_favoritos">
                    <h5>Dulces y Parvas</h5>
                    <hr>
                    <a class="nav-link" href="<?php echo RUTA_GESTOR_3_1; ?>"> <IMG src="img/3.jpg" width="250" height="200"/></a>
                </div>
            </div>
            <hr>
            <div class="row text-center">
                <div class="col-md-4 gg_elemento" id="gg_favoritos">
                    <h5>Lácteos</h5>
                    <hr>
                    <a class="nav-link" href="<?php echo RUTA_GESTOR_4_1; ?>"> <IMG src="img/4.jpg" width="250" height="200"/></a>
                </div>
                <div class="col-md-4 gg_elemento" id="gg_entradas">
                    <h5>Congelados</h5>
                    <hr>
                    <a class="nav-link" href="<?php echo RUTA_GESTOR_5_1; ?>"> <IMG src="img/5.jpg" width="250" height="200"/></a>
                </div>
                <div class="col-md-4 gg_elemento" id="gg_comentarios">
                    <h5>Frutas</h5>
                    <hr>
                    <a class="nav-link" href="<?php echo RUTA_GESTOR_6_1; ?>"> <IMG src="img/6.jpg" width="250" height="200"/></a>
                </div>
            </div>
            <hr>
            <div class="row text-center">
                <div class="col-md-4 gg_elemento" id="gg_favoritos">
                    <h5>Cigarrillos y Licores</h5>
                    <hr>
                    <a class="nav-link" href="<?php echo RUTA_GESTOR_7_1; ?>"> <IMG src="img/7.jpg" width="250" height="200"/></a>
                </div>
                <div class="col-md-4 gg_elemento" id="gg_favoritos">
                    <h5>Pollos y Pescados</h5>
                    <hr>
                    <a class="nav-link" href="<?php echo RUTA_GESTOR_8_1; ?>"> <IMG src="img/8.jpg" width="250" height="200"/></a>
                </div>
                <div class="col-md-4 gg_elemento" id="gg_entradas">
                    <h5>Varios</h5>
                    <hr>
                    <a class="nav-link" href="<?php echo RUTA_GESTOR_9_1; ?>"> <IMG src="img/9.jpg" width="250" height="200"/></a>
                </div>
            </div><hr>
            <div class="row text-center">
                <div class="col-md-4 gg_elemento" id="gg_comentarios">
                    <h5>Refrigerados</h5>
                    <hr>
                    <a class="nav-link" href="<?php echo RUTA_GESTOR_10_1; ?>"> <IMG src="img/10.jpg" width="250" height="200"/></a>
                </div>
                <div class="col-md-4 gg_elemento" id="gg_favoritos">
                    <h5>Aseo Hogar</h5>
                    <hr>
                    <a class="nav-link" href="<?php echo RUTA_GESTOR_11_1; ?>"> <IMG src="img/11.jpg" width="250" height="200"/></a>
                </div>
                <div class="col-md-4 gg_elemento" id="gg_favoritos">
                    <h5>Aseo Personal</h5>
                    <hr>
                    <a class="nav-link" href="<?php echo RUTA_GESTOR_12_1; ?>"> <IMG src="img/12.jpg" width="250" height="200"/></a>
                </div>
            </div>
            <br><br>
        </div>
    </div>
</div>      
<?php
include_once 'plantillas/cierreHTML.inc.php';
?>
