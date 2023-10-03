// jQuery example
$(document).ready(function () {
    $('.accordion-header').click(function () {
        // Toggle visibility of the next .accordion-content
        $(this).next('.accordion-content').slideToggle();
    });
});
