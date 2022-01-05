<?php

    require "funciones/conexion.php";
    require "funciones/configuraciones.php";
    $resultados = listarConfig();
    include "includes/nav.php";
    include "includes/header.html";
?>





    <main class="container">

    <h3>Panel de administracion de Configuraciones</h3>



    <table class="table table-bordered  table-hover">

    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Estado</th>
            <th scope="col" class="centrado-columna"> 
                <a href="formAgregarConfig.php" class="btn btn-outline-success">Agregar</a>
            </th>
        </tr>
    </thead>

    <tbody> 

    <?php

    foreach($resultados as $config):
    ?>
        <tr>
            <td><?=$config['id_config']?></td>
            <td><?=$config['nombre'] ?></td>
            <td><?=$config['estado'] ?></td>
            <td><a href="formModificarConfig.php?id_config=<?=$config["id_config"] ?> " class="btn btn-outline-info">Modificar</a></td>
            <td><a href="formEliminarConfig.php?id_config=<?=$config["id_config"] ?>" class="btn btn-outline-danger">Eliminar</a> </td>
        </tr>

        <?php

    endforeach;


?>
    </tbody>

    </table>


    <a href="index.php" class="btn btn-info my-2"> Volver al Panel</a>
    </main>





<?php include "includes/footer.php" ?>