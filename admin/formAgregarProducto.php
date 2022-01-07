<?php
    require "funciones/conexion.php";
    require "funciones/categorias.php";
    $categorias = listarCategorias();
    require "funciones/marcas.php";
    $marcas = listarMarcas();
    include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">


        <h1>Agregar Configuración</h1>

        <div class="alert bg-light p-4 col-8 mx-auto border shadow-sm">
            <form action="agregarProducto.php" method="post" id="formDatos" enctype="multipart/form-data">

                <div class="form-group mb-4">
                    <label for="nombreMarca">Nombre</label>
                    <input type="text" name="nombre"
                           class="form-control" id="nombre">
                </div>

                <div class="form-group mb-4">
                    <label for="Precio">Precio</label>
                    <input type="number" placeholder="" name="precio" class="form-control" id="precio">
                </div>
                
                <div class="form-group mb-4">
                    <label for="sku">Sku</label>
                    <input type="text" placeholder="" name="sku" class="form-control" id="sku">
                </div>

                
                <div class="form-group mb-4">
                    <label for="stock">Stock</label>
                    <input type="number" placeholder="" name="stock" class="form-control" id="stock">
                </div>

                <div class="form-group">
                    <label for="Descripcion">Descripción del Prodcuto</label>
                    <textarea class="form-control rounded-0"  name="descripcion" id="descripcion" rows="2"></textarea>
            </div>
        
            

                <div class='form-group mb-4'>
                    <label for="descripcionPrd">Categoria del Producto</label>
                <select name="id_categoria" id="id_categoria" class="form-select">
                    <option value="">Seleccionar Opcion</option>
                    <?php foreach($categorias as $categoria): ?>
                    <option value="<?=$categoria["id_categoria"] ?>"> <?=$categoria["nombre"] ?> </option>
                    <?php endforeach?>
                </select>
    
                </div>

                <div class='form-group mb-4'>
                    <label for="marcaPrd">Marca del Producto</label>
                <select name="id_marca" id="id_marca" class="form-select">
                    <option value="">Seleccionar Opcion</option>
                    <?php foreach($marcas as $marca): ?>
                    <option value="<?=$marca["id_marca"] ?>"> <?=$marca["nombre"] ?> </option>
                    <?php endforeach?>
                </select>
    
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