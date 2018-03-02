<?php
include_once 'app/configuracion.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/Proveedores.inc.php';
include_once 'app/RepositorioAdministrador.inc.php';
include_once 'app/ValidadorProveedor.inc.php';
include_once 'app/Redireccion.inc.php';
include_once 'app/ControlSesion.inc.php';

if (isset($_POST['guardar_proveedor'])) {
    Conexion::abrir_conexion();
    $validador = new ValidadorProveedor($_POST['nombre'], $_POST['direccion'], 
        $_POST['telefono'], $_POST['email'], Conexion::obtener_conexion());
    if ($validador->registro_valido()) {
        if (ControlSesion::sesion_iniciada()) {
            $proveedor_insertado = RepositorioAdministrador::insertar_proveedor(Conexion::obtener_conexion(), $validador->getNombre(), $validador->getDireccion(), $validador->getTelefono()
                    , $validador->getEmail(), $_SESSION['cedula']);
            if ($proveedor_insertado) {
                Redireccion::redirigir(RUTA_GESTOR);
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
            <form class="form_nueva_entrada" method="POST" action="<?php echo RUTA_NUEVA_PROVEEDOR; ?>">
                <?php
                if (isset($_POST['guardar_proveedor'])) {
                    include_once 'plantillas/nuevo_proveedor_validado.inc.php';
                } else {
                    include_once 'plantillas/nueva_proveedor_vacio.inc.php';
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
