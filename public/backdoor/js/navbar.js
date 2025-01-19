
$('li.dropdown').hover(function () {
    //jQuery('.navbar  .dropdown').hover(function () {
    $(this).find('ul.ddl').stop(true, true).delay(100).slideDown();
}, function () {
    $(this).find('ul.ddl').stop(true, true).delay(100).slideUp();
});

$('li.dropdown-submenu').hover(function () {
    //jQuery('.navbar  .dropdown').hover(function () {
    $(this).find('ul.sub-ddl').stop(true, true).delay(100).slideDown();
}, function () {
    $(this).find('ul.sub-ddl').stop(true, true).delay(100).slideUp();
});


$('.carousel').carousel({
    interval: 5000
});


(function ($) {
    // Backbone code in here
    $(".carousel .carousel-item:first").addClass("active");
    $("#carouselExampleIndicators .carousel-item:first").addClass("active");
    $(".carousel-indicators  li:first").addClass("active");
})(jQuery);


$(document).ready(function () {
    $("#respMenu").aceResponsiveMenu({
        resizeWidth: '991', // Set the same in Media query
        animationSpeed: 'medium', //slow, medium, fast
        accoridonExpAll: false //Expands all the accordion menu on click
    });
});


$('body').append(' <div class="progress-wrap">\n\
<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102"> \n\
<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>  </svg>  \n\
</div>');


/* Please ❤ this if you like it! */
(function (jQuery) {
    jQuery(document).ready(function () {
        "use strict";
        //Scroll back to top
        var progressPath = document.querySelector('.progress-wrap path');
        var pathLength = progressPath.getTotalLength();
        progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
        progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
        progressPath.style.strokeDashoffset = pathLength;
        progressPath.getBoundingClientRect();
        progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';
        var updateProgress = function () {
            var scroll = jQuery(window).scrollTop();
            var height = jQuery(document).height() - jQuery(window).height();
            var progress = pathLength - (scroll * pathLength / height);
            progressPath.style.strokeDashoffset = progress;
        }
        updateProgress();
        jQuery(window).scroll(updateProgress);
        var offset = 50;
        var duration = 550;
        jQuery(window).on('scroll', function () {
            if (jQuery(this).scrollTop() > offset) {
                jQuery('.progress-wrap').addClass('active-progress');
            } else {
                jQuery('.progress-wrap').removeClass('active-progress');
            }
        });
        jQuery('.progress-wrap').on('click', function (event) {
            event.preventDefault();
            jQuery('html, body').animate({
                scrollTop: 0
            }, duration);
            return false;
        })
    });
})(jQuery);

