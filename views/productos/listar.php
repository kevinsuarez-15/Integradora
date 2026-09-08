<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lista de Productos</title>

    <link rel="stylesheet" href="../../css/estilos.css">
</head>

<body>

    <header>
        <h1>📦 Sistema de Inventario</h1>
        <p>Productos registrados</p>
    </header>

    <main class="contenedor">

        <section class="tabla-contenedor">

            <h2>📋 Lista de productos</h2>

            <?php if ($mensaje !== ""): ?>

                <div class="mensaje-exito">
                    <?= htmlspecialchars($mensaje) ?>
                </div>

            <?php endif; ?>

            <?php if ($productos && $productos->num_rows > 0): ?>

                <div class="tabla-responsive">

                    <table>

                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Categoría</th>
                                <th>Precio</th>
                                <th>Cantidad</th>
                                <th>Descripción</th>
                                <th>Fecha</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php while ($fila = $productos->fetch_assoc()): ?>

                                <tr>
                                    <td><?= htmlspecialchars($fila["id"]) ?></td>

                                    <td>
                                        <?= htmlspecialchars($fila["nombre"]) ?>
                                    </td>

                                    <td>
                                        <?= htmlspecialchars($fila["categoria"]) ?>
                                    </td>

                                    <td>
                                        $<?= number_format($fila["precio"], 2) ?>
                                    </td>

                                    <td>
                                        <?= htmlspecialchars($fila["cantidad"]) ?>
                                    </td>

                                    <td>
                                        <?= htmlspecialchars($fila["descripcion"]) ?>
                                    </td>

                                    <td>
                                        <?= htmlspecialchars($fila["fecha_registro"]) ?>
                                    </td>
                                </tr>

                            <?php endwhile; ?>

                        </tbody>

                    </table>

                </div>

            <?php else: ?>

                <div class="sin-productos">
                    <p>No hay productos registrados todavía.</p>
                </div>

            <?php endif; ?>

            <div class="botones-formulario">

                <a href="crear.php" class="boton">
                    ➕ Registrar producto
                </a>

                <a href="../../index.php" class="boton secundario">
                    🏠 Inicio
                </a>

            </div>

        </section>

    </main>

    <footer>
        <p>Sistema de Inventario - Proyecto MVC con PHP y MySQL</p>
    </footer>

</body>

</html>