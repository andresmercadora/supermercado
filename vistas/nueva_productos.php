<?php
include_once 'app/configuracion.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/Productos.inc.php';
include_once 'app/RepositorioAdministrador.inc.php';
include_once 'app/ValidadorProducto.inc.php';
include_once 'app/Redireccion.inc.php';
include_once 'app/ControlSesion.inc.php';

if (isset($_POST['guardar_producto'])) {
    Conexion::abrir_conexion();
    $validador = new ValidadorProducto($_POST['nombre_producto'], $_POST['cantidad_producto'], 
        $_POST['Precio'], $_POST['descripcion'], $_POST['marca'], Conexion::obtener_conexion());
    $T_PRO = $_POST['Tipo_de_productos'];
    if ($validador->entrada_valida()) {
        if (ControlSesion::sesion_iniciada()) {
            $producto_insertado = RepositorioAdministrador::insertar_productos(Conexion::obtener_conexion(), $validador->getNombre_producto(), $validador->getCantidad_producto(), $validador->getPrecio_unidad()
                    , $validador->getDescripcion(), $validador->getMarca(), $T_PRO, $_SESSION['cedula']);
            if ($producto_insertado) {
                Redireccion::redirigir(RUTA_GESTOR."/".$T_PRO);
            }
        } else {
            Redireccion::redirigir(RUTA_LOGIN);
        }
        Conexion::cerrar_conexion();
    }
}

$titulo = 'Nuevas productos';
include_once 'plantillas/inicioHTML.inc.php';
include_once 'plantillas/navbar.inc.php';
?><br><br><br>
<div class="container colorFondo"><br>
    <div class="rwo">
        <div class="col-md-12">
            <form class="form_nueva_entrada" method="POST" action="<?php echo RUTA_NUEVA_PRODUCTOS; ?>">
                <?php
                if (isset($_POST['guardar_producto'])) {
                    include_once 'plantillas/nuevo_productos_validado.inc.php';
                } else {
                    include_once 'plantillas/nueva_productos_vacio.inc.php';
                }
                ?>
            </form>
        </div>
    </div>
</div>
<br><br><br>
<?php
include_once 'plantillas/cierreHTML.inc.php';
?>
