<?php
include_once 'app/configuracion.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/RepositorioAdministrador.inc.php';
include_once 'app/Redireccion.inc.php';
include_once 'app/ValidadorLogin.inc.php';
include_once 'app/ControlSesion.inc.php';
if (ControlSesion::sesion_iniciada()) {
    Redireccion::redirigir(SERVIDOR);
}
if (isset($_POST['Login'])) {
    Conexion::abrir_conexion();
    $validador = new ValidadorLogin($_POST['emailLogin'], $_POST['claveLogin'], Conexion::obtener_conexion());
    if ($validador->getError() === '' && !is_null($validador->getEmail())) {
        ControlSesion::iniciar_sesion($validador->getEmail()->getCedula(), $validador->getEmail()->getEmail());
        Redireccion::redirigir(SERVIDOR);
    }
    Conexion::cerrar_conexion();
}
$titulo = 'Login';
include_once 'plantillas/inicioHTML.inc.php';
include_once 'plantillas/navbar.inc.php';
?>
<br>
<br>
<br>
<div class="container colorFondo">
    <br>
    <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
            <div class="panel panel-defaul">
                <div class="panel-heading text-center">
                    <h4>Iniciar sesion</h4>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form"
                          action="<?php echo RUTA_LOGIN; ?>" method="POST">
                        <label class="text-lefh">Email</label>
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i
                                    class="glyphicon glyphicon-envelope"></i></span> <input
                                id="email" type="email" class="form-control" name="emailLogin"
                                placeholder="Ingrese su email" required autofocus <?php
                                if (isset($_POST['Login']) && isset($_POST['emailLogin']) && !empty($_POST['emailLogin'])) {
                                    echo 'value="' . $_POST['emailLogin'] . '"';
                                }
                                ?>/>
                        </div>
                        <label class="text-lefh">Contraceña</label>
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i
                                    class="glyphicon glyphicon-lock"></i></span> <input id="clave"
                                                                                type="password" class="form-control" name="claveLogin"
                                                                                placeholder="Ingrese su contrace&nacute;a" required/>
                        </div>
                        <?php
                        if (isset($_POST['Login'])) {
                            $validador->setError();
                        }
                        ?>
                        <div style="margin-top: 10px" class="form-group text-center">
                            <div class="col-md-12 controls">
                                <button id="btn-login" type="submit" class="btn btn-log btn-primary btn-block"
                                        name="Login">Iniciar sesion</button>
                            </div>
                        </div>
                    </form>
                    <br>
                    <div class="text-center">
                        <a href="<?php echo RUTA_RECUPERAR_PASSWORD; ?>">¿Has olvidado tu contrace&nacute;a?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
</div>
<?php
include_once 'plantillas/cierreHTML.inc.php';
?>
