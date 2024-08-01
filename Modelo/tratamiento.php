<?php
class Tratamiento
{
    // Definición de Atributos
    private $nombre;
    private $duracion;
    private $costo;
    private $Conexion;

    // Método Constructor
    public function crearTratamiento($nombre, $duracion, $costo)
    {
        $this->nombre = $nombre;
        $this->duracion = $duracion;
        $this->costo = $costo;
    }

    // Definición de Métodos Accesores-Consultores o Modificadores-Fijadores
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getNombre()
    {
        return ($this->nombre);
    }

    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;
    }

    public function getDuracion()
    {
        return ($this->duracion);
    }

    public function setCosto($costo)
    {
        $this->costo = $costo;
    }

    public function getCosto()
    {
        return ($this->costo);
    }

    // Método para obtener la conexión (para depuración)
    public function getConexion()
    {
        return $this->Conexion;
    }

    // Métodos Asociados al CRUD y Otros
    public function agregarTratamiento()
    {
        $this->Conexion = Conectarse();
        $sql = "INSERT INTO tratamiento (tratNombre, tratDuracion, tratCosto) 
                VALUES ('$this->nombre', '$this->duracion', '$this->costo')";
        $resultado = $this->Conexion->query($sql);
        if (!$resultado) {
            error_log("Error en la consulta: " . $this->Conexion->error);
        }
        $this->Conexion->close();
        return $resultado;
    }

    public function consultarTratamiento($nombre)
    {
        $this->Conexion = Conectarse();
        $sql = "SELECT * FROM tratamiento WHERE tratNombre='$nombre'";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;
    }

    public function actualizarTratamiento()
    {
        $this->Conexion = Conectarse();
        $sql = "UPDATE tratamiento SET tratNombre='$this->nombre', tratDuracion='$this->duracion', tratCosto='$this->costo' 
                WHERE tratNombre='$this->nombre'";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;
    }

    public function listarTratamientos()
    {
        $this->Conexion = Conectarse();
        $sql = "SELECT * FROM tratamiento";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;
    }
}
?>
