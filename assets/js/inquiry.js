// function events() {
//     $(document).on('click', '#sendInquiry', sendInquiry);
// }

function sendInquiry() {
    var url = $('#sendInquiry').data('url');

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
    $('.form_input').removeClass('valid');
    Swal.fire({
        title: 'Sending Inquiry ....',
        text: 'please do not reload the page.',
        allowOutsideClick: false,
        showCancelButton: false,
        showConfirmButton: false,
    });
}

$(function() {
    $("#formInquiry").submit(function(e) {
        e.preventDefault();
    }).validate({
        rules: {
            name: "required",
            email: {
                required: true,
                email: true
            },
            contact_no: {
                required: true,
                maxlength: 12,
                minlength: 11,
            },
            content: "required"
        },
        messages: {
            name: "Please enter your name",
            content: "Please enter your concerns",
            contact_no: {
                required: "Please provide a contact no",
                maxlength: "Please enter valid contact no",
                minlength: "Please enter valid contact no"
            },
            email: "Please enter a valid email address"
        },
        submitHandler: function(form) {
            sendInquiry();
        }
    });
});

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