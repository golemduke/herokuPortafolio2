<?php 
	require_once "Conexion.php";

	class Producto extends Conexion
	{
		public $id;
		public $nombre;
		public $descripcion;
		public $precioBase;
		public float $tasaImpuestos;
		public $estado;
		public $cantidadEnInventario;
		

		public function save()
		{
			$this->abrir();
			$consulta = $this->conexion->prepare("INSERT INTO productos VALUES(null, ?, ?, ?, ?, ?, ?)");
			$consulta->bindParam(1, $this->nombre);
			$consulta->bindParam(2, $this->descripcion);
			$consulta->bindParam(3, $this->precioBase);
			$consulta->bindParam(4, $this->tasaImpuestos);
			$consulta->bindParam(5, $this->estado);
			$consulta->bindParam(6, $this->cantidadEnInventario);
			$consulta->execute();
			$filas = $consulta->rowCount();
			$this->cerrar();
			return $filas;
		}

		public function all()
		{
			$this->abrir();
			$consulta = $this->conexion->prepare("SELECT * FROM productos");
			$consulta->setFetchMode(PDO::FETCH_OBJ);
			$consulta->execute();
			$productos = $consulta->fetchAll();
			$this->cerrar();
			return $productos;
		}

		public function find($id)
		{
			$this->abrir();
			$consulta = $this->conexion->prepare("SELECT * FROM productos WHERE id=?");
			$consulta->bindParam(1, $id);
			$consulta->setFetchMode(PDO::FETCH_OBJ);
			$consulta->execute();
			$productos = $consulta->fetchAll();
			$this->cerrar();
			return $productos[0];
		}

		public function update()
		{
			$this->abrir();
			$consulta=$this->conexion->prepare("UPDATE productos SET nombre=?, descripcion=?, precioBase=?, tasaImpuestos=?, estado=?, cantidadEnInventario=? WHERE id=?");
			$consulta->bindParam(1, $this->nombre);
			$consulta->bindParam(2, $this->descripcion);
			$consulta->bindParam(3, $this->precioBase);
			$consulta->bindParam(4, $this->tasaImpuestos);
			$consulta->bindParam(5, $this->estado);
			$consulta->bindParam(6, $this->cantidadEnInventario);
			$consulta->bindParam(7, $this->id);
			$consulta->execute();
			$filas=$consulta->rowCount();
			$this->cerrar();
			return $filas;
		}

		public function delete(){
			$this->abrir();
			$consulta=$this->conexion->prepare("DELETE FROM productos WHERE id=?");
			$consulta->bindParam(1, $this->id);
			$consulta->execute();
			$filas=$consulta->rowCount();
			$this->cerrar();
			return $filas;
		}

		public function updateCant()
		{
			$this->abrir();
			$consulta=$this->conexion->prepare("UPDATE productos SET nombre=?, descripcion=?, precioBase=?, tasaImpuestos=?, estado=?, cantidadEnInventario=? WHERE id=?");
			$consulta->bindParam(1, $this->nombre);
			$consulta->bindParam(2, $this->descripcion);
			$consulta->bindParam(3, $this->precioBase);
			$consulta->bindParam(4, $this->tasaImpuestos);
			$consulta->bindParam(5, $this->estado);
			$consulta->bindParam(6, $this->cantidadEnInventario);
			$consulta->bindParam(7, $this->id);
			$consulta->execute();
			$filas=$consulta->rowCount();
			$this->cerrar();
			return $filas;
		}
	}
?>