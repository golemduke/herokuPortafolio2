<?php 
	require_once "Conexion.php";

	class Compra extends Conexion
	{
		public $id;
		public $nombreProducto;
		public $descripcionProducto;
		public $precioBaseProducto;
		public $tasaImpuestosProducto;
		public $estadoProducto;
		public $cantidadEnInventario;
        public $cantidadProducto;
        public $productoId;
        public $usuarioNumero;
        public $totalCarrito;
		public $carritoId;
        public $fechaCompra;
		public $totalCompra;

		

		public function save()
		{
			$this->abrir();
			$consulta = $this->conexion->prepare("INSERT INTO compras VALUES(null, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
			$consulta->bindParam(1, $this->nombreProducto);
			$consulta->bindParam(2, $this->descripcionProducto);
			$consulta->bindParam(3, $this->precioBaseProducto);
			$consulta->bindParam(4, $this->tasaImpuestosProducto);
			$consulta->bindParam(5, $this->estadoProducto);
			$consulta->bindParam(6, $this->cantidadEnInventario);
            $consulta->bindParam(7, $this->cantidadProducto);
            $consulta->bindParam(8, $this->productoId);
            $consulta->bindParam(9, $this->usuarioNumero);
            $consulta->bindParam(10,$this->totalCarrito);
			$consulta->bindParam(11, $this->carritoId);
            $consulta->bindParam(12, $this->fechaCompra);
            $consulta->bindParam(13,$this->totalCompra);
			$consulta->execute();
			$filas = $consulta->rowCount();
			$this->cerrar();
			return $filas;
		}

		public function all()
		{
			$this->abrir();
			$consulta = $this->conexion->prepare("SELECT * FROM compras");
			$consulta->setFetchMode(PDO::FETCH_OBJ);
			$consulta->execute();
			$compras = $consulta->fetchAll();
			$this->cerrar();
			return $compras;
		}

		public function find($id)
		{
			$this->abrir();
			$consulta = $this->conexion->prepare("SELECT * FROM compras WHERE id=?");
			$consulta->bindParam(1, $id);
			$consulta->setFetchMode(PDO::FETCH_OBJ);
			$consulta->execute();
			$compras = $consulta->fetchAll();
			$this->cerrar();
			return $compras[0];
		}

		public function update()
		{
			$this->abrir();
			$consulta=$this->conexion->prepare("UPDATE carrito SET cantidadProducto=? WHERE id=?");
            $consulta->bindParam(1, $this->cantidadProducto);
			$consulta->execute();
			$filas=$consulta->rowCount();
			$this->cerrar();
			return $filas;
		}

		public function delete(){
			$this->abrir();
			$consulta=$this->conexion->prepare("DELETE FROM compras WHERE id=?");
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

		public function buscar($fecha1, $fecha2)
		{
			$this->abrir();
			$consulta = $this->conexion->prepare("SELECT * FROM compras WHERE fechaCompra BETWEEN ? and ?");
			$consulta->bindParam(1, $fecha1);
			$consulta->bindParam(2, $fecha2);
			$consulta->setFetchMode(PDO::FETCH_OBJ);
			$consulta->execute();
			$compras = $consulta->fetchAll();
			$this->cerrar();
			return $compras[0];
		}
	}
?>