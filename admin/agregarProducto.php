<?php  
    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    $resultados = agregarProducto();
    // $ultimoProducto = agregarProductoVerUltino();
	include 'includes/header.html';  
	include 'includes/nav.php';  

    echo $ultimoProducto;
    exit;
    
?>

    <main class="container">
        <h1>ALTA PRODUCTO</h1>
    <?php

    $css = "danger";
    $mensaje = "No se pudo agregar el producto.";

    if($resultados)
    {
        $css = "success";
        $mensaje = "Producto agregado correctamente.";
    }
?>

    <div class="alert alert-<?= $css ?> col-8 mx-auto">
        <?= $mensaje ?>
        <a href="adminProductos.php" class="btn btn-outline-secondary">Volver a panel</a>
    </div>



    </main>

<?php  include 'includes/footer.php';  ?>