<?php

    require "funciones/conexion.php";
    require "funciones/productos.php";
    $resultados = listarProductos();
    include "includes/nav.php";
    include "includes/header.html";

    ?>
    <main class="container">

    <h3>Panel de administracion de Productos</h3>



    <table class="table table-bordered  table-hover">

    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Precio</th>
            <th scope="col">Sku</th>
            <th scope="col">Stock</th>
            <th scope="col">Descripción</th>
            <!-- <th scope="col">Imagen</th> -->
            <!-- <th scope="col">Fecha Alta</th> -->
            <th scope="col">Categoria</th>
            <th scope="col">Marca</th>
            <!-- <th scope="col">Estado</th> -->
            <th scope="col" class="centrado-columna"> 
                <a href="formAgregarproducto.php" class="btn btn-outline-success">Agregar</a>
            </th>
        </tr>
    </thead>

    <tbody> 

    <?php

    foreach($resultados as $producto):
    ?>
        <tr>
            <td><?=$producto['id_producto']?></td>
            <td><?=$producto['nombre'] ?></td>
            <td><?=$producto['precio'] ?></td>
            <td><?=$producto['stock'] ?></td>
            <td><?=$producto['descripcion'] ?></td>
            <!-- <td>img</td> -->
            <td><?=$producto['fecha_alta'] ?></td>
            <td><?=$producto['nombreCategoria'] ?></td>
            <td><?=$producto['nombreMarca'] ?></td>
            <!-- <td></td> -->
            <td><a href="formModificarproducto.php?id_producto=<?=$producto["id_producto"] ?> " class="btn btn-outline-info">Modificar</a></td>
            <td><a href="formEliminarproducto.php?id_producto=<?=$producto["id_producto"] ?>" class="btn btn-outline-danger">Eliminar</a> </td>
        </tr>

        <?php

    endforeach;


?>
    </tbody>

    </table>


    <a href="index.php" class="btn btn-info my-2"> Volver al Panel</a>
    </main>
    
<?php include "includes/footer.php" ?>