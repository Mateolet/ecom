
<?php

    require "funciones/conexion.php";
    require "funciones/configuraciones.php";
    $configuracion = listarConfigPorID();
	include 'includes/header.html';  
	include 'includes/nav.php';
    
    $config = mysqli_fetch_assoc($configuracion);
?>

    <main class="container">
        <h1>Modificar Configuracion</h1>


    <div class='alert bg-light p-4 col-8 mx-auto border shadow-sm'>
        <form action="modificarConfig.php" id="formDatos" method="post">
                <div class='form-group'>
                    <label for="nombreCfg">Nombre de la configuración</label>
                    <input type="text" name="nombreCfg" class='form-control' id="nombreCfg" value="<?=$config["nombre"]?>">
                </div>
                <div class="form-group mb-4">
                    <label for="estadoCfg">Estado</label>
                    <input type="number" placeholder="1 PARA ACTIVADO Y 0 PARA DESACTIVADO." name="estadoCfg" class="form-control" id="estadoCfg" value="<?=$config["estado"] ?>">
                </div>

                <div id="errorOculto">
                    El numero del estado debe ser 1 o 0
                </div>
                <input type="hidden" name="id_config" value="<?=$config["id_config"] ?>">
            <button class='btn btn-info my-3 mr-3 px-4'>Modificar Config</button>
            <a href="adminConfig.php" class='btn btn-outline-info'>
            Volver al panel de Marcas
            </a>
        </form>

    </div>



    </main>

<?php  include 'includes/footer.php';  ?>


<script>
    
    let nombre = document.getElementById("nomCfg");

    let estado = document.querySelector("#estadoCfg");

    let form = document.getElementById("formDatos");
    form.addEventListener("submit",(e) => {

        if(estado.value > 1){
            let cartelError = document.getElementById("errorOculto");
                cartelError.id = "error";
    
            setTimeout(function(){
              cartelError = document.getElementById("error");
                cartelError.id = "errorOculto";
            },3000)
            e.preventDefault();
            
        }
            
        })
</script>