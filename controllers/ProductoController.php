<?php

require_once __DIR__ . "/../models/Producto.php";

$producto = new Producto();

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nombre = trim($_POST["nombre"] ?? "");
    $categoria = trim($_POST["categoria"] ?? "");
    $precio = $_POST["precio"] ?? 0;
    $cantidad = $_POST["cantidad"] ?? 0;
    $descripcion = trim($_POST["descripcion"] ?? "");

    $resultado = $producto->registrarProducto(
        $nombre,
        $categoria,
        $precio,
        $cantidad,
        $descripcion
    );

    if ($resultado) {
        header("Location: ../views/productos/listar.php?mensaje=Producto registrado correctamente");
        exit;
    } else {
        echo "Error al registrar el producto.";
    }
}

?>