<?php
include_once 'app/configuracion.inc.php';
include_once 'app/Redireccion.inc.php';
include_once 'app/ControlSesion.inc.php';

ControlSesion::cerrar_sesion();
Redireccion::redirigir(SERVIDOR);
