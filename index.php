<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Inventario</title>

    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>

    <header>
        <h1>📦 Sistema de Inventario</h1>
        <p>Gestión básica de productos</p>
    </header>

    <main class="contenedor">

        <section class="bienvenida">

            <h2>Bienvenido al Sistema de Inventario</h2>

            <p>
                Administra los productos registrados en el sistema,
                consulta la información y mantén actualizado tu inventario.
            </p>

            <div class="botones">

                <a href="views/productos/crear.php" class="boton">
                    ➕ Registrar producto
                </a>

                <a href="views/productos/listar.php" class="boton secundario">
                    📋 Ver productos
                </a>

            </div>

        </section>

    </main>

    <footer>
        <p>Sistema de Inventario - Proyecto MVC con PHP y MySQL</p>
    </footer>

</body>

</html>