function events() {
    $(document).on('click', '#sendInquiry', sendInquiry);
}

function sendInquiry() {
    var url = $(this).data('url');

    Swal.fire({
        text: 'Send Inquiry?',
        icon: 'question',
        showCancelButton: true,
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes',
        customClass: {
            confirmButton: 'bg-indigo-700',
            container: 'bg-white backdrop-filter backdrop-blur-md bg-opacity-20'
        }
    }).then((result) => {
        if (result.isConfirmed) {
            showLoading();
            sendRequest(url);
        }
    })
}

function showLoading() {
    Swal.fire({
        title: 'Sending Inquiry ....',
        text: 'please do not reload the page.',
        allowOutsideClick: false,
        showCancelButton: false,
        showConfirmButton: false,
    });
}

function sendRequest(url) {
    var name = $('input[name="name"]');
    var contact = $('input[name="contact_no"]');
    var email = $('input[name="email"]');
    var content = $('textarea[name="content"]');

    var data = {
        name: name.val(),
        contact_no: contact.val(),
        email: email.val(),
        content: content.val()
    };

    name.val('');
    contact.val('');
    email.val('');
    content.val('');

    $.post(url, data).done(function() {
        Swal.fire({
            icon: 'success',
            text: 'inquiry sent',
            showCancelButton: false,
            confirmButtonText: 'ok',
            customClass: {
                confirmButton: 'bg-indigo-700',
                container: 'bg-white backdrop-filter backdrop-blur-md bg-opacity-20'
            },
        })
    });
}

$(document).ready(function() {
    events();
});