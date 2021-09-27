(function() {
    $(document).ready(function() {
        $('.tooltip').tooltipster({
            trigger: 'hover',
            animation: 'fade',
            delay: 50,
            theme: 'tooltipster-borderless',
            position: 'bottom'
        });
    });

    $(window).click(function() {
        $('.toggle-cont').filter(":visible").fadeOut("easing");
    });

    $(document).on('click', '.toggle-menu', function(e) {
        e.stopPropagation();
        $('.toggle-cont').fadeOut("easing");
        var menu = $(this).data('toggle');
        var menuTarget = $(menu);
        var ifModal = $(this).data('modal');

        menuTarget.fadeToggle("easing");
        menuTarget.addClass('toggle-cont');
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

setInterval(function() {
    $("#apt_card").load(location.href + " #apt_card");
    $("#inq_card").load(location.href + " #inq_card");
    $("#pt_card").load(location.href + " #pt_card");
    $("#nav_notif").load(location.href + " #nav_notif");
    $("#mobile_notif").load(location.href + " #mobile_notif");
    $("#todays_inquiries").load(location.href + " #todays_inquiries");
    $("#mobile_notif").load(location.href + " #mobile_notif");
    $("#apt_notif").load(location.href + " #apt_notif_cont");
    $("#inq_notif").load(location.href + " #inq_notif_cont");
}, 5000);