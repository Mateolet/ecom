<?php  


function listarProductos(){


    $link = conectar();


    $sql = "SELECT p.id_producto, c.id_categoria,p.nombre,p.precio,p.sku,p.stock,p.descripcion,p.fecha_alta, c.nombre as nombreCategoria, m.nombre as nombreMarca FROM productos as p
            INNER JOIN  marcas as m ON m.id_marca = p.id_marca
            INNER JOIN  categorias as c ON c.id_categoria = p.id_categoria";

    $productos = mysqli_query($link,$sql) or die(mysqli_error($link));


    return $productos;
}


function agregarProducto(){


    $_POST["nombre"]

    $link = conectar();

    $sql = "INSERT INTO productos (id_producto,nombre,precio,sku,descripcion,id_categoria,id_marca) VALUES ()"
}