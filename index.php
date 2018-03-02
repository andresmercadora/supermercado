<?php
session_start();
include_once 'app/configuracion.inc.php';
include_once 'app/Conexion.inc.php';

include_once 'app/Productos.inc.php';

include_once 'app/RepositorioAdministrador.inc.php';

$componentes_url = parse_url($_SERVER['REQUEST_URI']);
$ruta = $componentes_url['path'];
$partes_ruta = explode('/', $ruta);
$partes_ruta = array_filter($partes_ruta);
$partes_ruta = array_slice($partes_ruta, 0);
$ruta_elegida = 'vistas/404.php';

if ($partes_ruta[0] == 'supermercado') {
    if (count($partes_ruta) == 1) {
        $ruta_elegida = 'vistas/home.php';
    } else if (count($partes_ruta) == 2) {
        switch ($partes_ruta[1]) {
            case 'login':
                $ruta_elegida = 'vistas/login.php';
                break;
            case 'logout':
                $ruta_elegida = 'vistas/logout.php';
                break;
            case 'gestor':
                $ruta_elegida = 'vistas/gestor.php';
                $gestor_actual = '';
                break;
            case 'nueva_productos':
                $ruta_elegida = 'vistas/nueva_productos.php';
                break;
            case 'nueva_proveedor':
                $ruta_elegida = 'vistas/nueva_proveedor.php';
                break;
            case 'borrar_productos':
                $ruta_elegida = 'scripts/borrar_productos.php';
                break;
            case 'borrar_proveedor':
                $ruta_elegida = 'scripts/borrar_proveedor.php';
                break;
            case 'editar_productos':
                $ruta_elegida = 'vistas/editar-productos.php';
                break;
            case 'editar_proveedor':
                $ruta_elegida = 'vistas/editar-proveedor.php';
                break;
            case 'perfil':
                $ruta_elegida = 'vistas/perfil.php';
                break;
            case '1_1':
                    $gestor_actual = '1_1';
                    $ruta_elegida = 'vistas/gestor_1.php';
                    break;
            case '2_1':
                $gestor_actual = '2_1';
                $ruta_elegida = 'vistas/gestor_2.php';
                break;
            case '3_1':
                $gestor_actual = '3_1';
                $ruta_elegida = 'vistas/gestor_3.php';
                break;
            case '4_1':
                $gestor_actual = '4_1';
                $ruta_elegida = 'vistas/gestor_4.php';
                break;
            case '5_1':
                $gestor_actual = '5_1';
                $ruta_elegida = 'vistas/gestor_5.php';
                break;
            case '6_1':
                $gestor_actual = '6_1';
                $ruta_elegida = 'vistas/gestor_6.php';
                break;
            case '7_1':
                $gestor_actual = '7_1';
                $ruta_elegida = 'vistas/gestor_7.php';
                break;
            case '8_1':
                $gestor_actual = '8_1';
                $ruta_elegida = 'vistas/gestor_8.php';
                break;
            case '9_1':
                $gestor_actual = '9_1';
                $ruta_elegida = 'vistas/gestor_9.php';
                break;
            case '10_1':
                $gestor_actual = '10_1';
                $ruta_elegida = 'vistas/gestor_10.php';
                break;
            case '11_1':
                $gestor_actual = '11_1';
                $ruta_elegida = 'vistas/gestor_11.php';
                break;
            case '12_1':
                $gestor_actual = '12_1';
                $ruta_elegida = 'vistas/gestor_11.php';
                break;
        }
    } else if (count($partes_ruta) == 3) {
        if ($partes_ruta[1] == 'gestor') {
            switch ($partes_ruta[2]) {
                case '1':
                    $gestor_actual = '1';
                    $ruta_elegida = 'vistas/gestor.php';
                    break;
                case '2':
                    $gestor_actual = '2';
                    $ruta_elegida = 'vistas/gestor.php';
                    break;
                case '3':
                    $gestor_actual = '3';
                    $ruta_elegida = 'vistas/gestor.php';
                    break;
                case '4':
                    $gestor_actual = '4';
                    $ruta_elegida = 'vistas/gestor.php';
                    break;
                case '5':
                    $gestor_actual = '5';
                    $ruta_elegida = 'vistas/gestor.php';
                    break;
                case '6':
                    $gestor_actual = '6';
                    $ruta_elegida = 'vistas/gestor.php';
                    break;
                case '7':
                    $gestor_actual = '7';
                    $ruta_elegida = 'vistas/gestor.php';
                    break;
                case '8':
                    $gestor_actual = '8';
                    $ruta_elegida = 'vistas/gestor.php';
                    break;
                case '9':
                    $gestor_actual = '9';
                    $ruta_elegida = 'vistas/gestor.php';
                    break;
                case '10':
                    $gestor_actual = '10';
                    $ruta_elegida = 'vistas/gestor.php';
                    break;
                case '11':
                    $gestor_actual = '11';
                    $ruta_elegida = 'vistas/gestor.php';
                    break;
                case '12':
                    $gestor_actual = '12';
                    $ruta_elegida = 'vistas/gestor.php';
                    break;
                case 'gestorpv':
                    $gestor_actual = 'gestorpv';
                    $ruta_elegida = 'vistas/gestor.php';
                    break;
                }
        }
    }
}
include_once $ruta_elegida;
    