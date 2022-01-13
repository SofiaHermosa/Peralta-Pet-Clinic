(function() {
    $(document).ready(function() {
        // $('.tooltip').tooltipster({
        //     trigger: 'hover',
        //     animation: 'fade',
        //     delay: 50,
        //     theme: 'tooltipster-borderless',
        //     position: 'bottom'
        // });

         
    });

    $(window).click(function(e) {
        $('.toggle-cont').filter(":visible").filter('div[role="menu"]').fadeOut("easing");
    });
    $(document).on('click', '.close-modal', function(e) {
        var menu = $(this).data('toggle');
        var menuTarget = $(menu);
        menuTarget.fadeOut("easing");
    });

    $(document).on('click', '.toggle-menu', function(e) {
        $('.toggle-cont').filter(":visible").fadeOut("easing");
        e.stopPropagation();
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
    $("#apt_card1").load(location.href + " #apt_card1");
    $("#apt_card2").load(location.href + " #apt_card2");
    $("#apt_card3").load(location.href + " #apt_card3");
    $("#inq_card").load(location.href + " #inq_card");
    $("#pt_card").load(location.href + " #pt_card");
    $("#nav_notif").load(location.href + " #nav_notif");
    $("#mobile_notif").load(location.href + " #mobile_notif");
    $("#todays_inquiries").load(location.href + " #todays_inquiries");
    $("#mobile_notif").load(location.href + " #mobile_notif");
    $("#apt_notif").load(location.href + " #apt_notif_cont");
    $("#inq_notif").load(location.href + " #inq_notif_cont");
}, 5000);

$(document).on('click', '.archive', function(){
    var id    = $(this).data('id');
    var url   = $(this).data('url');
    var title = $(this).data('type');

    Swal.fire({
        icon: 'warning',
        title: 'Are you sure?',
        text: 'this record will be archived',
        showCancelButton: true,
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes',
        customClass: {
            confirmButton: 'bg-indigo-700',
            container: 'bg-white backdrop-filter backdrop-blur-md bg-opacity-20'
        }
    }).then((result) => {
        if (result.isConfirmed) {
            $.post(url, {id:id}).done(function(){
                var table = $("#datatable").DataTable();
                table.ajax.reload();

                Swal.fire({
                    icon: 'success',
                    text: `${title} successfully archived`,
                    showCancelButton: false,
                    confirmButtonText: 'ok',
                    customClass: {
                        confirmButton: 'bg-indigo-700',
                        container: 'bg-white backdrop-filter backdrop-blur-md bg-opacity-20'
                    },
                });
            });
        }
    });        
});

$(document).on('click', '.showPass', function(){
    var target = $(this).data('target');
    var type   = $(document).find(`input[name=${target}]`).attr('type');

    if(type == 'password'){
        $(this).closest('.flex').find(`input[name=${target}]`).attr('type', 'text');
        $(this).html(`<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
      </svg>`);
    }else{
        $(this).closest('.flex').find(`input[name=${target}]`).attr('type', 'password');
        $(this).html(`  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 stroke-current" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
        </svg>`);
    }
});

$('.summernote').summernote();
    