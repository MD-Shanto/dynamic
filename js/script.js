$(document).ready(function () {
    // Sticky Meuu 
    $(".sticky-menu-location").waypoint(function (location) {
        if (location == 'down') {
            $("nav").addClass('sticky');
            $(".navbar-nav").addClass('customize');
            $(".navbar-nav").css('margin-top', '-4px');
            $(".navbar-brand").addClass('toggle-top');
            $(".extra-list").css('display', 'none');
            $(".collapse").css('marginLeft', '0rem');
            $(".nav-item").css('marginRight', '2rem');
            $("#navbarSupportedContent").css('margin-top', '0rem');
            $("a.navbar-brand").css('padding', '1.5rem');

        } else {
            $("nav").removeClass('sticky');
            $(".navbar-brand").removeClass('toggle-top');
            $(".navbar-nav").removeClass('customize');
            $(".extra-list").css('display', 'block');
            $(".collapse").css('marginLeft', '0');
            $(".nav-item").css('marginRight', '0');
            $(".navbar-nav").removeClass('customize');
            $("#navbarSupportedContent").css('margin-top', '0');
            $("a.navbar-brand").css('padding', '4rem');
            $(".navbar-nav").css('margin-top', '0');
        }
    });
});