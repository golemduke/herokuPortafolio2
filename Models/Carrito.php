<?php 
	require_once "Conexion.php";

	class Carrito extends Conexion
	{
		public $id;
		public $nombreProducto;
		public $descripcionProducto;
		public float $precioBaseProducto;
		public float $tasaImpuestosProducto;
		public $estadoProducto;
		public $cantidadEnInventario;
        public $cantidadProducto;
        public $productoId;
        public $usuarioId;
        public $totalProducto;

		

		public function save()
		{
			$this->abrir();
			$consulta = $this->conexion->prepare("INSERT INTO carrito VALUES(null, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
			$consulta->bindParam(1, $this->nombreProducto);
			$consulta->bindParam(2, $this->descripcionProducto);
			$consulta->bindParam(3, $this->precioBaseProducto);
			$consulta->bindParam(4, $this->tasaImpuestosProducto);
			$consulta->bindParam(5, $this->estadoProducto);
			$consulta->bindParam(6, $this->cantidadEnInventario);
            $consulta->bindParam(7, $this->cantidadProducto);
            $consulta->bindParam(8, $this->productoId);
            $consulta->bindParam(9, $this->usuarioId);
            $consulta->bindParam(10,$this->totalProducto);
			$consulta->execute();
			$filas = $consulta->rowCount();
			$this->cerrar();
			return $filas;
		}

		public function all()
		{
			$this->abrir();
			$consulta = $this->conexion->prepare("SELECT * FROM carrito");
			$consulta->setFetchMode(PDO::FETCH_OBJ);
			$consulta->execute();
			$carrito = $consulta->fetchAll();
			$this->cerrar();
			return $carrito;
		}

		public function find($id)
		{
			$this->abrir();
			$consulta = $this->conexion->prepare("SELECT * FROM carrito WHERE id=?");
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
			$consulta=$this->conexion->prepare("UPDATE carrito SET cantidadProducto=? WHERE id=?");
            $consulta->bindParam(1, $this->cantidadProducto);
            $consulta->bindParam(2, $this->id);
			$consulta->execute();
			$filas=$consulta->rowCount();
			$this->cerrar();
			return $filas;
		}

		public function delete(){
			$this->abrir();
			$consulta=$this->conexion->prepare("DELETE FROM carrito WHERE id=?");
			$consulta->bindParam(1, $this->id);
			$consulta->execute();
			$filas=$consulta->rowCount();
			$this->cerrar();
			return $filas;
		}

	}
?>