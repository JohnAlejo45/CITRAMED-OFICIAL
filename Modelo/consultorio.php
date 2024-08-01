<?php
class Consultorio
{
	//Definición de Atributos
	private $conNombre;
	private $Conexion;
	

	//Método Constructor
	public function crearConsultorio($conNombre)
	{
		$this->conNombre=$conNombre;
	}

	//Definición de Métodos 
	//Accesores-Consultores o Modificadores-Fijadores

	public function setConNombre($conNombre)
	{
		$this->conNombre=$conNombre;
	}
	
	public function getConNombre()
	{
		return ($this->conNombre);
	}
	

	//Métodos Asociados al CRUD y Otros
	public function agregarConsultorio()
	{	
		$this->Conexion=Conectarse();
		$sql="insert into consultorios(conNombre)
			values ('$this->conNombre')";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}

	public function buscarConsultorio($conNombre)
	{
		$this->Conexion=Conectarse();
		$sql="select * from consultorios where conNombre='$conNombre'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}

    public function ConsultarIdConsultorio($idConsultorio)
	{
		$this->Conexion=Conectarse();
		$sql="select * from consultorios where idConsultorio='$idConsultorio'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	public function actualizarConsultorio()
	{	
		$this->Conexion=Conectarse();
		$sql="update consultorios set conNombre='$this->conNombre' where conNombre='$this->conNombre'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}

	public function ListarConsultorios(){
		$this->Conexion=Conectarse();
		$sql="SELECT * from consultorios";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}	
}

?>