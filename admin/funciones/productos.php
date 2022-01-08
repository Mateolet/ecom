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


   $nombre = $_POST["nombre"];
   $precio = $_POST["precio"];
   $sku = $_POST["sku"];
   $stock = $_POST["stock"];
   $descripcion = $_POST["descripcion"];
   $id_categoria = $_POST["id_categoria"];
   $id_marca = $_POST["id_marca"];
   
       $link = conectar();

    $sql = "INSERT INTO productos (id_producto,nombre,precio,sku,stock,descripcion,id_categoria,id_marca) 
            VALUES (DEFAULT,'".$nombre."',".$precio.",'".$sku."',".$stock.",'".$descripcion."',".$id_categoria.",".$id_marca.")";


    $resultado = mysqli_query($link,$sql) or die(mysqli_error($link));

    return $resultado;
}