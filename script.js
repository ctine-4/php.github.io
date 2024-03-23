
document.addEventListener('DOMContentLoaded', function() {
    let menuIcon = document.querySelector('#menu-icon');
    let navbar = document.querySelector('.navbar');
    let icon = document.getElementById("mode-icon");

    menuIcon.onclick = () => {
        menuIcon.classList.toggle('bx-x');
        navbar.classList.toggle('active');
    }

    menuIcon.classList.remove('bx-x');
    navbar.classList.remove('active');

    let isLightMode = localStorage.getItem('lightMode') === 'true';

    document.body.classList.toggle("light-mode", isLightMode);
    icon.src = isLightMode ? "moon.png" : "sun.png";

    icon.onclick = function () {
        document.body.classList.toggle("light-mode");
        icon.src = document.body.classList.contains("light-mode") ? "moon.png" : "sun.png";
        localStorage.setItem('lightMode', document.body.classList.contains("light-mode"));
    }
});

  