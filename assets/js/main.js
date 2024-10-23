/* --------------------------------------------------
 * © Copyright 2023 - UpTech by Designesia
 * --------------------------------------------------*/
(function ($) {
    'use strict';

    // Configuraciones predeterminadas
    var preloader = 'on'; // 'on' para habilitar preloader, 'off' para deshabilitar preloader

    // --------------------------------------------------
    // Preloader | Ocultar preloader si está deshabilitado
    // --------------------------------------------------
    if (preloader === "off") {
        jQuery("#de-loader").hide();
    }

    // --------------------------------------------------
    // Preloader | Agregar animación de preloader a #de-loader
    // --------------------------------------------------
    $('#de-loader').prepend($('<div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>'));

    // --------------------------------------------------
    // Preloader | Ocultar preloader después de la carga de la ventana
    // --------------------------------------------------
    $(window).on('load', function () {
        jQuery('#de-loader').fadeOut(500);
    });

})(jQuery);
