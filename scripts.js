document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");

    if (form) {
        form.addEventListener("submit", function (event) {
            let titulo = document.querySelector("input[name='titulo']").value.trim();
            let autor = document.querySelector("input[name='autor']").value.trim();
            let precio = document.querySelector("input[name='precio']").value.trim();
            let cantidad = document.querySelector("input[name='cantidad']").value.trim();

            if (!titulo || !autor) {
                alert("Los campos de Título y Autor no pueden estar vacíos.");
                event.preventDefault();
                return;
            }

            if (isNaN(precio) || precio <= 0) {
                alert("El precio debe ser un número positivo.");
                event.preventDefault();
                return;
            }

            if (isNaN(cantidad) || cantidad <= 0) {
                alert("La cantidad debe ser un número positivo.");
                event.preventDefault();
            }
        });
    }
});
