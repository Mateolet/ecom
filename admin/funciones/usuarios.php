<?php


function listarUsuarios () {

    $link = conectar();


    $sql = "SELECT * FROM usuarios";

    $resultados = mysqli_query($link,$sql) or die(mysqli_error($link));


    return $resultados;

    

}