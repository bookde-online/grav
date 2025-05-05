var isTouch = window.DocumentTouch && document instanceof DocumentTouch;

function scrollHeader() {
    // Has scrolled class on header
    var zvalue = $(document).scrollTop();
    if ( zvalue > 75 )
        $("#header").addClass("scrolled");
    else
        $("#header").removeClass("scrolled");
}

function parallaxBackground() {
    $('.parallax').css('background-positionY', ($(window).scrollTop() * 0.3) + 'px');
}

jQuery(document).ready(function($){

    scrollHeader();

    // Scroll Events
    if (!isTouch){
        $(document).scroll(function() {
            scrollHeader();
            parallaxBackground();
        });
    };

    // Touch scroll
    $(document).on({
        'touchmove': function(e) {
            scrollHeader(); // Replace this with your code.
        }
    });

    //Smooth scroll to start
    $('#to-start').click(function(){
        var start_y = $('#start').position().top;
        var header_offset = 45;
        window.scroll({ top: start_y - header_offset, left: 0, behavior: 'smooth' });
        return false;
    });

    //Smooth scroll to top
    $('#to-top').click(function(){
        window.scroll({ top: 0, left: 0, behavior: 'smooth' });
        return false;
    });

    // Responsive Menu
    $('#toggle').click(function () {
        $(this).toggleClass('active');
        $('#overlay').toggleClass('open');
        $('body').toggleClass('mobile-nav-open');
    });

    // Tree Menu
    $(".tree").treemenu({delay:300});

});

if (typeof window !== 'undefined') {
    function scrollToSectionOnLoad(hash, path, sectionId) {
        const currentPath = window.location.pathname.replace('/grav', ''); // Remove '/grav' prefix if present
        if (window.location.hash === hash && currentPath === path) {
            const targetSection = document.querySelector(sectionId);
            if (targetSection) {
                setTimeout(() => {
                    targetSection.scrollIntoView({ behavior: 'smooth' });
                }, 300); // Slight delay to ensure DOM is fully loaded
            }
        }
    }

    document.addEventListener('DOMContentLoaded', function () {
        // Handle specific URL for trang-chu#dich-vu
        scrollToSectionOnLoad('#dich-vu', '/trang-chu', '#services');

        // Smooth scroll when clicking on links with #services or #dich-vu
        const serviceLinks = document.querySelectorAll('a[href$="#services"], a[href$="#dich-vu"]');

        serviceLinks.forEach(link => {
            link.addEventListener('click', function (event) {
                event.preventDefault(); // Prevent page reload
                const targetSection = document.querySelector('#services');
                if (targetSection) {
                    targetSection.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });
    });
}
