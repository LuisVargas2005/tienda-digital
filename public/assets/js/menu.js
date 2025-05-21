
// Selecciona el botón y el menú de servicios

document.addEventListener("DOMContentLoaded", function () {
    const button = document.getElementById("servicios-btn");
    const menu = document.getElementById("servicios-menu");

    // Mostrar al hacer hover o click
    function showMenu() {
        menu.classList.remove("hidden");
    }

    function hideMenu() {
        menu.classList.add("hidden");
    }

    // Mostrar menú al pasar el mouse
    button.addEventListener("mouseenter", showMenu);
    menu.addEventListener("mouseenter", showMenu);

    // Ocultar al salir del área
    button.addEventListener("mouseleave", () => {
        setTimeout(() => {
            if (!menu.matches(":hover")) hideMenu();
        }, 100);
    });

    menu.addEventListener("mouseleave", hideMenu);

    // Mostrar/Ocultar al hacer clic (útil en móviles)
    button.addEventListener("click", function (e) {
        e.preventDefault();
        menu.classList.toggle("hidden");
    });
});