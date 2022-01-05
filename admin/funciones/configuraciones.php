<?php


function listarConfig(){

    $link = conectar();

    $sql = "SELECT * FROM configuraciones";

    $resultados = mysqli_query($link,$sql);
    
    


    return $resultados;
    
};


function agregarConfig(){

    $nombre = $_POST["nombreCfg"];
    $estado = $_POST["estadoCfg"];

    $link = conectar();

    $sql = "INSERT INTO configuraciones (id_config, nombre, estado) VALUES (DEFAULT,'".$nombre."',".$estado.")";

    $resultados = mysqli_query($link,$sql) 
                    or die(mysqli_error($link));

    return $resultados;
}



function listarConfigPorID(){

    $id = $_GET["id_config"];
    
    $link = conectar();


    $sql = "SELECT id_config,nombre,estado FROM configuraciones WHERE id_config = ".$id;

     $resultado = mysqli_query($link,$sql)
                 or die(mysqli_error($link));

    return $resultado;

}


function eliminarConfig(){


    $id = $_POST["id_config"];

    $link = conectar();


    $sql = "DELETE FROM configuraciones WHERE id_config = $id ";

    $resultado = mysqli_query($link,$sql) or die(mysqli_error($link));


    return $resultado;
}