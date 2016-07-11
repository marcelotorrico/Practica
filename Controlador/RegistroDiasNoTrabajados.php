<?php
    require_once '../Modelo/Empleado.php';
    require_once '../Modelo/DiasNoTrabajados.php';
    
    $nombreEmpleado = $_POST['nombre'];
    $psgh           = $_POST['psgh'];
    $falla          = $_POST['falla'];
    
    if(isset($nombreEmpleado) && isset($psgh) && isset($falla)){
        registrar($nombreEmpleado, $psgh, $falla);
        mostrar();
    }
    
    function mostrar() {
        echo"<script type=\"text/javascript\">alert('Se registro los dias no trabajados'); window.location='../Vista/Lista.php';</script>";
    }
    
    function registrar($nombre, $psgh, $falla) {
        $empleado = new Empleado();
        $diasNoTrabajados = new DiasNoTrabajados();
        $empleado->crearEmpleado($nombre);
        $pesosPsgh = calculoPesosPsgh($psgh);
        $pesosFalla = calculoPesosFalla($falla);
        $diasNoTrabaj = $pesosPsgh + $pesosFalla;
        $idEmpleado = $empleado->getId($nombre);
        $diasNoTrabajados->crearDiasNoTrabajados($diasNoTrabaj, $falla, $idEmpleado,
                $pesosFalla, $pesosPsgh, $psgh);
    }
    
    function calculoPesosPsgh($psgh) {
        $division = 3220/31;
        $multiplicacion = 1/6 * $division;
        $pesosPsgh = ($division + $multiplicacion) * $psgh;
        return $pesosPsgh;
    }
    
    function calculoPesosFalla($falla) {
        $division = 3220/31;
        $pesosFalla = $division * $falla + $division;
        return $pesosFalla;
    }