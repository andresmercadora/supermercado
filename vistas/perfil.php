<?php
header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");
header("Cache-control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-control: post-check=0, pre-check=0", false);
header("pragma: no-cache");
include_once 'app/Redireccion.inc.php';
include_once 'app/ControlSesion.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/Productos.inc.php';
include_once 'app/RepositorioAdministrador.inc.php';

if (!ControlSesion::sesion_iniciada()) {
     Redireccion::redirigir(SERVIDOR);
}else{
    Conexion::abrir_conexion();
    $id = $_SESSION['cedula']; 
    $producto = RepositorioAdministrador::obtener_productos_por_cod_producto1(Conexion::obtener_conexion(), $id);
    $producto -> getCod_producto();
}

if (!ControlSesion::sesion_iniciada()) {
    Redireccion::redirigir(SERVIDOR);
}else{
    Conexion::abrir_conexion();
}
if (isset($_POST['guardar_imagen']) && !empty($_FILES['archivo_subido']['tmp_name'])) {
    $directorio = DIRECTORIO_RAIZ."/subidas/";
    $carpeta_objetivo = $directorio.basename($_FILES['archivo_subido']['name']);
    $subida_correcta = 1;
    $tipo_imagen = pathinfo($carpeta_objetivo, PATHINFO_EXTENSION);
    
    $comprobacion = getimagesize($_FILES['archivo_subido']['tmp_name']);
    if ($comprobacion !==false) {
        $subida_correcta = 1;
    } else {
        $subida_correcta = 0;
    }
    if ($_FILES['archivo_subido']['size'] > 1000000) {
        echo "El archivo no puede ocupar mas de 100kb";
        $subida_correcta = 0;
    }
    if ($tipo_imagen != "jpg" && $tipo_imagen != "png" && $tipo_imagen != "jpeg" && $tipo_imagen != "gif") {
        echo "Solo se admiten los formatosJPG, PNG , JPEG, GIF";
        $subida_correcta = 0;
    }
    if ($subida_correcta == 0) {
        echo "Tu imagen no sepuede subir";
    } else {
        if (move_uploaded_file($_FILES['archivo_subido']['tmp_name'], 
                DIRECTORIO_RAIZ."/subidas/".$producto -> getCod_producto())) { 
        } else {
            echo "Ha ocurrido un error";
        }
    }
}

$titulo = 'Perfil de usuario';

include_once 'plantillas/inicioHTML.inc.php';
include_once 'plantillas/navbar.inc.php';
?>

<div class="container perfil">
    <div class="row">
        <div class="col-md-3">
            <br><br>
            <?php
            if (file_exists(DIRECTORIO_RAIZ."/subidas/".$producto -> getCod_producto())) {
                ?>
                    <img src="<?php echo SERVIDOR.'/subidas/'.$producto -> getCod_producto();?>" class="img-responsive"/>
                <?php
            } 
            ?> 
            <br>
            <form class="text-center" action="<?php echo RUTA_PERFIL;?>" method="POST" 
                  enctype="multipart/form-data">
                <label for="archivo_subido" id="label_archivo">Subir una imagen</label>
                <input type="file" name="archivo_subido" id="archivo_subido" class="boton_subir"/>
                <br><br> 
                <input type="submit" value="Guardar" name="guardar_imagen" class="form-control"/>
            </form>
        </div>
         <div class="col-md-9">
	       <h4><small>Nombre del producto</small></h4>
               <h4><small><?php echo $producto -> getNombre_producto();?></small></h4>
	       <br>
	       <h4><small>Unidades</small></h4>
               <h4><small><?php echo $producto -> getCantidad_producto();?></small></h4>
	       <br>
	       <h4><small>Precio</small></h4>
               <h4><small><?php echo $producto -> getPrecio_unidad();?></small></h4>
	       <br>
	       <h4><small>Descripcion</small></h4>
               <h4><small><?php echo $producto -> getDescripcion();?></small></h4>
	       <br>
	       <h4><small>Marca</small></h4>
               <h4><small><?php echo $producto -> getMarca();?></small></h4>
	  </div>
    </div>
</div>

<?php
include_once 'plantillas/cierreHTML.inc.php';
?>
