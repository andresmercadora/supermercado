<?php
include_once 'app/ControlSesion.inc.php';
include_once 'app/configuracion.inc.php';
Conexion::abrir_conexion();
?>
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Este boton despliega la barra de navegacion</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo SERVIDOR; ?>">Supermercado</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <?php 
                if (!ControlSesion::sesion_iniciada()) {
             ?>
            <ul class="nav navbar-nav">
                <li><a href="#"><span aria-hidden="true"></span> Proveedores</a></li>
            </ul>
            <?php }?>
            <ul class="nav navbar-nav navbar-right">
                <?php if (ControlSesion::sesion_iniciada()) {
                    ?>
                    <li>
                        <a href="<?php echo RUTA_GESTOR; ?>"><span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span> Gesto</a>
                    </li>
                    <li>
                        <a href="<?php echo RUTA_LOGOUT; ?>">
                            <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Cerrar sesion
                        </a>
                    </li>
                    <?php
                } else {
                    ?>
                    <li><a href="<?php echo RUTA_LOGIN; ?>"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Administrador</a></li>
                        <?php }
                    ?>
            </ul>
        </div>
    </div>
</nav>