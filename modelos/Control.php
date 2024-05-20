<?php
require 'Conexion.php';

class Control extends Conexion
{
    public $ctrl_id;
    public $ctrl_nombre_elemento;
    public $ctrl_menu;
    public $ctrl_fecha;
    public $ctrl_tiempo_comida;
    public $ctrl_servidor;


    public function __construct($args = [])
    {
        $this->ctrl_id = $args['ctrl_id'] ?? '';
        $this->ctrl_nombre_elemento = $args['ctrl_nombre_elemento'] ?? '';
        $this->ctrl_menu = $args['ctrl_menu'] ?? '';
        $this->ctrl_fecha = $args['ctrl_fecha'] ?? '';
        $this->ctrl_tiempo_comida = $args['ctrl_tiempo_comida'] ?? '';
        $this->ctrl_servidor = $args['ctrl_servidor'] ?? '';
    }

    // METODO PARA INSERTAR
    public function guardar()
    {
        $sql = "INSERT into rancho (ctrl_nombre_elemento, ctrl_menu, ctrl_fecha, ctrl_tiempo_comida, ctrl_servidor) values ('$this->ctrl_nombre_elemento','$this->ctrl_menu',' $this->ctrl_fecha',' $this->ctrl_tiempo_comida','$this->ctrl_servidor')";
        $resultado = $this->ejecutar($sql);
        return $resultado;
    }
}
