<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="img/supermercado.png">
<?php 
include_once 'app/configuracion.inc.php';
if(!isset($titulo) || empty($titulo)){
    $titulo = 'Supermercado';
}echo "<title>$titulo</title>" ?>
<link href="<?php echo RUTA_CSS;?>bootstrap.min.css" rel="stylesheet">
<link href="<?php echo RUTA_CSS;?>font-awesome.min.css" rel="stylesheet">
<link href="<?php echo RUTA_CSS;?>estilos.css" rel="stylesheet">
</head>
<body>