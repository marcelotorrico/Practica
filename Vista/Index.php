<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registro de Asistencia</title>
        <link rel="stylesheet" href="../Librerias/Bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../Estilos/principal.css" />
    </head>
    <body>
        <section class="jumbotron">
            <div class="container">
                <center><h2>Registro de Asistencia </h2></center>
            </div>
        </section>
        <br>
        <div class="container">
            <form action="../Controlador/RegistroDiasNoTrabajados.php" method="post">
                <div class="row">
                    <div class="col-md-9">
                        <div class ="form-group formulario">
                            <div class="input-group">
                                <label class="input-group-addon addonGroup required" for="Nombre">Nombre:</label>
                                <input type="text" id="nombre" name="nombre" required="required" placeholder="Ingrese el nombre" 
                                       class="form-control input-inline form" title="Nombre del empleado" pattern=".*[A-Z]{1}[a-zñáéíóú]{2,20}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        <div class ="form-group formulario">
                            <div class="input-group">
                                <label class="input-group-addon addonGroup required" for="Nombre">PSGH:</label>
                                <input type="text" id="psgh" name="psgh" required="required" placeholder="Ingrese el psgh" 
                                       class="form-control input-inline form" title="PSGH del empleado">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        <div class ="form-group formulario">
                            <div class="input-group">
                                <label class="input-group-addon addonGroup required" for="Nombre">Falla:</label>
                                <input type="text" id="falla" name="falla" required="required" placeholder="Ingrese la falla" 
                                       class="form-control input-inline form" title="Falla del empleado">
                            </div>
                        </div>
                    </div>
                </div>
                <div class ="form-group formulario">
                    <button type="submit" id ="enviar" name="enviar" class="btn btn-primary"> Registrar</button>
                </div>
            </form>
        </div>
    </body>
</html>
