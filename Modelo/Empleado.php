<?php
require_once '../Modelo/Conexion.php';
class Empleado {
    private $conexion;
    public function __construct() {
        $this->conexion = new Conexion();
    }
    public function crearEmpleado($nombre) {
        $consulta = "INSERT INTO empleado(NOMBRE) VALUES('$nombre');";
        $declaracion = $this->conexion->prepare($consulta);
        $declaracion->execute();
    }
    
    public function getId($nombre) {
        $consulta = "select DISTINCT ID_EMPLEADO from empleado where NOMBRE = '$nombre'";
        $resultado = $this->conexion->query($consulta);
        $idEmpleado = $resultado->fetchColumn();
        /*$ids = $resultado->fetchAll();
            foreach ($resultado as $row) {
                echo $row["Id"];
            }
         */
        return $idEmpleado;
    }
    
    public function getNombre($id) {
        $consulta = "select DISTINCT NOMBRE from empleado where ID_EMPLEADO = '$id'";
        $resultado = $this->conexion->query($consulta);
        $nombre = $resultado->fetchColumn();
        return $nombre;
    }
}
