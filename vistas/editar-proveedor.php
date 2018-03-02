<?php
include_once 'app/configuracion.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/Proveedores.inc.php';
include_once 'app/RepositorioAdministrador.inc.php';
include_once 'app/ValidadorProveedor.inc.php';
include_once 'app/ValidadorProveedorEditados.inc.php';
include_once 'app/Redireccion.inc.php';
include_once 'app/ControlSesion.inc.php';

Conexion::abrir_conexion();
if (isset($_POST['guardar_cambios_proveedor'])) {
    $validador = new ValidadorProveedorEditados($_POST['nombre'], $_POST['nombre-original'], $_POST['direccion'], 
            $_POST['direccion-original'], $_POST['telefono'], $_POST['telefono-original'], $_POST['email'], $_POST['email-original'], Conexion :: obtener_conexion());

    if (!$validador->hay_cambios()) {
        Redireccion::redirigir(RUTA_GESTOR);
    } else {
        if ($validador->registro_valido()) {
            $cambios_realizados = RepositorioAdministrador :: actualizar_proveedor(Conexion::obtener_conexion(), $_POST['id-proveedor'],
                $validador -> getNombre(), $validador -> getDireccion(), $validador -> getTelefono(),
                $validador -> getEmail());
                Redireccion::redirigir(RUTA_GESTOR);
        }
    }
}

$titulo = 'Editar productos';
include_once 'plantillas/inicioHTML.inc.php';
include_once 'plantillas/navbar.inc.php';
?>
<br><br><br>
<div class="container colorFondo"><br>
    <div class="rwo">
        <div class="col-md-12">
            <form class="form_nueva_entrada" method="POST" action="<?php echo RUTA_EDITAR_PROVEEDOR; ?>">
                <?php
                if (isset($_POST['editar_proveedor'])) {
                    $id_proveedor = $_POST['id_editar'];
                    $proveedor_recuperados = RepositorioAdministrador::obtener_proveedor_por_cod_producto(
                            Conexion::obtener_conexion(), $id_proveedor);
                    include_once 'plantillas/proveedor_recuperadas.inc.php';
                    Conexion::cerrar_conexion();
                } else if(isset($_POST['guardar_cambios_proveedor'])){
                     $id_proveedor = $_POST['id-proveedor'];
                     $proveedor_recuperados = RepositorioAdministrador::obtener_proveedor_por_cod_producto(
                            Conexion::obtener_conexion(), $id_proveedor);
                     include_once 'plantillas/proveedor_recuperadas_valida.inc.php';
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
