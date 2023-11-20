// Code to switch between the desktop and mobile carousel images

$(document).ready(function () {
    function showHideImages() {
        
        // Check screen width
        var windowWidth = $(window).width();
        var isDesktop = windowWidth > 768;

        if (isDesktop) {
            $('.crsl-mobile').remove();
        } else {
            $('.crsl-desktop').remove();
        }
    }

    $(window).on('resize', function () {
        showHideImages();
    });

    showHideImages();
});


