<?php



function listarCategorias(){

    $link = conectar();


    $sql = "SELECT id_categoria,nombre FROM categorias";

    $resultado = mysqli_query($link,$sql);


    return $resultado;
}


