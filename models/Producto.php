<?php

require_once __DIR__ . "/../config/conexion.php";

class Producto
{
    private $conexion;

    public function __construct()
    {
        global $conexion;
        $this->conexion = $conexion;
    }

    // Registrar un producto
    public function registrarProducto($nombre, $categoria, $precio, $cantidad, $descripcion)
    {
        $sql = "INSERT INTO productos 
                (nombre, categoria, precio, cantidad, descripcion, fecha_registro)
                VALUES (?, ?, ?, ?, ?, CURDATE())";

        $stmt = $this->conexion->prepare($sql);

        $stmt->bind_param(
            "ssdis",
            $nombre,
            $categoria,
            $precio,
            $cantidad,
            $descripcion
        );

        return $stmt->execute();
    }

    // Consultar todos los productos
    public function obtenerProductos()
    {
        $sql = "SELECT * FROM productos ORDER BY id DESC";

        $resultado = $this->conexion->query($sql);

        return $resultado;
    }
}
?>