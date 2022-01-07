
<?php

    require "funciones/conexion.php";
    require "funciones/productos.php";
    require "funciones/categorias.php";
    // $productos = listarProductos();
    // $categorias = listarCategorias();
    // // $marcas = listarMarcas();
    // print_r($resultado);
	include 'includes/header.html';  
	include 'includes/nav.php';
    //ARMAR FUNCION CATEGORIA


    ?>

    <main class="container">
        <h1>Modificar Configuracion</h1>


    <div class='alert bg-light p-4 col-8 mx-auto border shadow-sm'>
        <form action="modificarConfig.php" id="formDatos" method="post">
                <div class='form-group'>
                    <label for="nombreCfg">Nombre del Producto</label>
                    <input type="text" name="nombrePrd" class='form-control' id="nombrePrd" value="<?=$productos["nombre"]?>">
                </div>
                <div class="form-group mb-4">
                    <label for="precio">Precio</label>
                    <input type="number"  name="precio" class="form-control" min="0" id="precio" value="<?=$productos["precio"] ?>">
                </div>

                <div class="form-group mb-4">
                    <label for="precio">Sku</label>
                    <input type="number"  name="sku" class="form-control" min="0" id="sku" value="<?=$productos["sku"] ?>">
                </div>

                <div class='form-group'>
                    <label for="descripcionPrd">Nombre del Producto</label>
                    <input type="text" name="descripcion" class='form-control' id="descripcion" value="<?=$config["descripcion"]?>">
                </div>

                <div class='form-group'>
                    <label for="descripcionPrd">Nombre del Producto</label>
                <select name="id_categoria" id="id_categoria">
                    <?php foreach($categorias as $categoria): ?>
                    <option value="<?=$categoria["id_categoria"] ?>"> <?=$categoria["nombre"] ?> </option>
                    <?php endforeach?>
                </select>
    
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