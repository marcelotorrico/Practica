<?php 
    include_once '../Modelo/DiasNoTrabajados.php';
    include_once '../Modelo/Empleado.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista</title>
        <link rel="stylesheet" href="../Librerias/Bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../Estilos/principal.css" />
    </head>
    <body>
        <section class="jumbotron">
            <div class="container">
                <center><h2>Lista de los dias no Trabajados </h2></center>
            </div>
        </section>
        <br>
        <div class="container">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Nombre del Empleado</th>
                            <th>PSGH</th>
                            <th>Pesos PSGH</th>
                            <th>Falla</th>
                            <th>Pesos Falla</th>
                            <th>Dias no Trabajados</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $diasNoTrabajados = new DiasNoTrabajados();
                            $empleado = new Empleado();
                            $resultados = $diasNoTrabajados->getDiasNoTrabajados();
                            foreach($resultados as $resultado){
                                $nombre = $empleado->getNombre($resultado["ID_EMPLEADO"]);
                            
                        ?>
                        <tr>
                            <td><?php echo $nombre ?></td>
                            <td><?php echo $resultado['PSGH']?></td>
                            <td><?php echo $resultado['PESOS_PSGH']?></td>
                            <td><?php echo $resultado['FALLA']?></td>
                            <td><?php echo $resultado['PESOS_FALLA']?></td>
                            <td><?php echo $resultado['DIAS_NO_TRABAJADOS']?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>    
                </table>
            </div>
        </div>
    </body>
</html>
