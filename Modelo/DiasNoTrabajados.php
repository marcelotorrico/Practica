<?php

require_once '../Modelo/Conexion.php';
class DiasNoTrabajados {
    
    private $conexion;
    public function __construct() {
        $this->conexion = new Conexion();
    }
    
    public function crearDiasNoTrabajados($diasNoTrabaj, $falla, $idEmpleado, $pesosFalla, $pesosPsgh, $psgh) {
        $consulta = "INSERT INTO asistencia(DIAS_NO_TRABAJADOS, FALLA, ID_EMPLEADO, PESOS_FALLA, PESOS_PSGH, PSGH)"
                . " VALUES('$diasNoTrabaj', '$falla', '$idEmpleado', '$pesosFalla', '$pesosPsgh', '$psgh');";
        $declaracion = $this->conexion->prepare($consulta);
        $declaracion->execute();
    }
    
    public function getDiasNoTrabajados() {
        $consulta = "SELECT * FROM asistencia";
        $resultado = $this->conexion->query($consulta);
        $diasNoTrabajados = $resultado->fetchAll();
        return $diasNoTrabajados;
    }
}
