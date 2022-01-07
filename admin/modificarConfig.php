<?php  
    require 'funciones/conexion.php';
    require 'funciones/configuraciones.php';
    $resultado = modificarConfig();
	include 'includes/header.html';  
	include 'includes/nav.php';      
?>

    <main class="container">
        <h1>Modificación de una Configuracion</h1>
    <?php

    $css = "danger";
    $mensaje = "No se pudo modificar la configuración.";

    if($resultado)
    {
        $css = "success";
        $mensaje = "Configuración modificada correctamente.";
    }
?>

    <div class="alert alert-<?= $css ?> col-8 mx-auto">
        <?= $mensaje ?>
        <a href="adminConfig.php" class="btn btn-outline-secondary">Volver a panel</a>
    </div>



    </main>

<?php  include 'includes/footer.php';  ?>