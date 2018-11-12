$ = jQuery.noConflict();

console.log("Hello");

$('.menu').on('click', function () {
    $('.menu__line').toggleClass('active');
    $('.gnav').fadeToggle();
})