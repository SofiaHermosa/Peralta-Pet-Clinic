(function() {

    $('.toggle-menu').on('click', function() {
        var menu = $(this).data('toggle');
        var menuTarget = $(menu);
        var ifModal = $(this).data('modal');

        menuTarget.fadeToggle("easing");
        $(this).toggleClass('ring-2');
        $(this).toggleClass('ring-offset-0');
        $(this).toggleClass('ring-white');

        if (typeof ifModal != 'undefined') {
            if (ifModal == true) {
                $('body').toggleClass('overflow-hidden');
            }
        }
    });
})();


var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        document.querySelector(".nav").style.top = "0";
    } else {
        document.querySelector(".nav").style.top = "-100px";
    }
    prevScrollpos = currentScrollPos;
}

$(".nav--link").click(function(e) {
    e.preventDefault();
    var div = $(this).attr('href');
    $('html, body').animate({
        scrollTop: $(div).offset().top
    }, 2000);
});