document.addEventListener("DOMContentLoaded", function () {
    new Swiper('.swiper', {
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            type: 'bullets',
            enabled: false, // Desactiva la paginación
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
            enabled: false, // Desactiva los botones de navegación
        },
    });
});
