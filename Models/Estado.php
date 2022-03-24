<?php 
	require_once "Conexion.php";

	class Estado extends Conexion
	{
		public $id;
		public $estado;
		

		public function save()
		{
			$this->abrir();
			$consulta = $this->conexion->prepare("INSERT INTO estados VALUES(null, ?)");
			$consulta->bindParam(1, $this->nombre);
			$consulta->execute();
			$filas = $consulta->rowCount();
			$this->cerrar();
			return $filas;
		}

		public function all()
		{
			$this->abrir();
			$consulta = $this->conexion->prepare("SELECT * FROM estados");
			$consulta->setFetchMode(PDO::FETCH_OBJ);
			$consulta->execute();
			$estados = $consulta->fetchAll();
			$this->cerrar();
			return $estados;
		}

		public function find($id)
		{
			$this->abrir();
			$consulta = $this->conexion->prepare("SELECT * FROM estados WHERE id=?");
			$consulta->bindParam(1, $id);
			$consulta->setFetchMode(PDO::FETCH_OBJ);
			$consulta->execute();
			$estados = $consulta->fetchAll();
			$this->cerrar();
			return $estados[0];
		}
		public function update(){
			$this->abrir();
			$consulta=$this->conexion->prepare("UPDATE estados SET estado=? WHERE id=?");
			$consulta->bindParam(1, $this->estado);
			$consulta->bindParam(2, $this->id);
			$consulta->execute();
			$filas=$consulta->rowCount();
			$this->cerrar();
			return $filas;
		}

		public function delete(){
			$this->abrir();
			$consulta=$this->conexion->prepare("DELETE FROM estados WHERE id=?");
			$consulta->bindParam(1, $this->id);
			$consulta->execute();
			$filas=$consulta->rowCount();
			$this->cerrar();
			return $filas;
		}
	}
?>