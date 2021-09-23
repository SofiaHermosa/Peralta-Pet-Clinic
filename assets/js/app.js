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