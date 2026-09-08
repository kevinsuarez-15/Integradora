<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registrar Producto</title>

    <link rel="stylesheet" href="../../css/estilos.css">
    <script src="../../js/validaciones.js"></script>
</head>

<body>

    <header>
        <h1>📦 Sistema de Inventario</h1>
        <p>Registro de productos</p>
    </header>

    <main class="contenedor">

        <section class="formulario">

            <h2>Registrar nuevo producto</h2>

            <form method="POST" action="../../controllers/ProductoController.php">

                <div class="campo">
                    <label for="nombre">Nombre del producto</label>
                    <input
                        type="text"
                        id="nombre"
                        name="nombre"
                        placeholder="Ej: Teclado inalámbrico">
                </div>

                <div class="campo">
                    <label for="categoria">Categoría</label>
                    <input
                        type="text"
                        id="categoria"
                        name="categoria"
                        placeholder="Ej: Tecnología">
                </div>

                <div class="fila">

                    <div class="campo">
                        <label for="precio">Precio</label>
                        <input
                            type="number"
                            id="precio"
                            name="precio"
                            step="0.01"
                            placeholder="Ej: 25.99">
                    </div>

                    <div class="campo">
                        <label for="cantidad">Cantidad</label>
                        <input
                            type="number"
                            id="cantidad"
                            name="cantidad"
                            placeholder="Ej: 10">
                    </div>

                </div>

                <div class="campo">
                    <label for="descripcion">Descripción</label>
                    <textarea
                        id="descripcion"
                        name="descripcion"
                        rows="4"
                        placeholder="Describe el producto..."></textarea>
                </div>

                <div class="botones-formulario">

                    <button type="submit" class="boton">
                        💾 Registrar producto
                    </button>

                    <a href="../../index.php" class="boton secundario">
                        ↩ Volver
                    </a>

                </div>

            </form>

        </section>

    </main>

    <footer>
        <p>Sistema de Inventario - Proyecto MVC con PHP y MySQL</p>
    </footer>

</body>

</html>