<?php
    require "funciones/conexion.php";
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">

        <h1>Agregar Configuración</h1>

        <div class="alert bg-light p-4 col-8 mx-auto border shadow-sm">
            <form action="agregarConfig.php" method="post" id="formDatos" enctype="multipart/form-data">

                <div class="form-group mb-4">
                    <label for="nomPr">Nombre</label>
                    <input type="text" name="nombreCfg"
                           class="form-control" id="nomcfg">
                </div>

                <div class="form-group mb-4">
                    <label for="estadoCfg">Estado</label>
                    <input type="number" placeholder="1 PARA ACTIVADO Y 0 PARA DESACTIVADO." name="estadoCfg" class="form-control" id="estadoCfg">
                </div>

                <div id="errorOculto">
                    El numero del estado debe ser 1 o 0
                </div>
                <button class="btn btn-info mr-3 px-4">Agregar Configuraciones</button>
                <a href="adminConfig.php" class="btn btn-outline-info">
                    Volver a panel de configuraciones
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

        if(estado.value > 2){
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