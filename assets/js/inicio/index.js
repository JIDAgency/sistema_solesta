document.addEventListener("DOMContentLoaded", function () {
    new Swiper('.swiper', {
        loop: true,
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        pagination: false, // Desactiva la paginación
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
            enabled: false, // Desactiva los botones de navegación
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
    });
});