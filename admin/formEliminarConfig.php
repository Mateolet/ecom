
<?php
    require "funciones/conexion.php";
    require "funciones/configuraciones.php";
    $configuracion = listarConfigPorID();
	include 'includes/header.html';  
	include 'includes/nav.php';
    
    $config = mysqli_fetch_assoc($configuracion);
    
?>

    <main class="container">
        <h1>Eliminar Configuracion</h1>


    <div class='alert bg-light p-4 col-8 mx-auto border shadow-sm'>
        <form action="eliminarConfig.php" id="formDatos" method="post">
                <div class='listadoBorrar'>
                   <span>Nombre: <?=$config["nombre"]?></span>
                </div>
                <div class="listadoBorrar">
                    <span>Estado: <?=$config["estado"] ?></span>
                </div>

                <input type="hidden" name="id_config" value="<?=$config["id_config"] ?>">
            <button class='btn btn-info my-3 mr-3 px-4'>Eliminar</button>
            <a href="adminConfig.php" class='btn btn-outline-info'>
            Volver al panel de Marcas
            </a>
        </form>

    </div>



    </main>

<?php  include 'includes/footer.php';  ?>
