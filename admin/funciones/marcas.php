<?php

function listarMarcas(){

    $link = conectar();

    $sql = "SELECT id_marca, nombre FROM marcas";


    $resultados = mysqli_query($link,$sql);

    return $resultados;
}