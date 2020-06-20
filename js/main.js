$(function () {

    /*--------------------------------------------
    1. Configurando el script rdNavbar
    ---------------------------------------------*/
    // inicializando la libreria
    $('.rd-navbar').RDNavbar({
        stickUpClone: false,  //quitamos el clonado de navbar que crea por defecto

        // establecemos en que tamaños se expandira el navbar
        responsive: {
            0: {
                layout: 'rd-navbar-fixed'
            },
            768: {
                layout: 'rd-navbar-static',
                // asemos que la barra no se pege a la parte superior
                stickUp: false
            },
            // cambiamos el navbar fijo del default
            992: {
                // asemos que la barra no se pege a la parte superior
                stickUp: false
            }
        }
    });


    // Inicializando el Universal-Parallax
    new universalParallax().init({
        speed: 9.8
    });




})