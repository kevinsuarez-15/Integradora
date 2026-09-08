document.addEventListener("DOMContentLoaded", function () {

    const formulario = document.querySelector("form");

    formulario.addEventListener("submit", function (evento) {

        const nombre = document.getElementById("nombre").value.trim();
        const categoria = document.getElementById("categoria").value.trim();
        const precio = parseFloat(document.getElementById("precio").value);
        const cantidad = parseInt(document.getElementById("cantidad").value);
        const descripcion = document.getElementById("descripcion").value.trim();

        // Validar campos vacíos
        if (nombre === "" || categoria === "" || descripcion === "") {
            alert("Por favor, completa todos los campos.");
            evento.preventDefault();
            return;
        }

        // Validar longitud del nombre
        if (nombre.length < 3 || nombre.length > 100) {
            alert("El nombre debe tener entre 3 y 100 caracteres.");
            evento.preventDefault();
            return;
        }

        // Validar categoría
        if (categoria.length < 3 || categoria.length > 50) {
            alert("La categoría debe tener entre 3 y 50 caracteres.");
            evento.preventDefault();
            return;
        }

        // Validar precio
        if (isNaN(precio) || precio <= 0) {
            alert("El precio debe ser un número mayor que 0.");
            evento.preventDefault();
            return;
        }

        // Validar cantidad
        if (isNaN(cantidad) || cantidad < 1) {
            alert("La cantidad debe ser un número entero mayor o igual a 1.");
            evento.preventDefault();
            return;
        }

        // Validar descripción
        if (descripcion.length < 5) {
            alert("La descripción debe tener al menos 5 caracteres.");
            evento.preventDefault();
            return;
        }

        alert("Datos validados correctamente.");

    });

});