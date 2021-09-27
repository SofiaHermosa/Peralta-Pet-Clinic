$("#formRepInquiry").validate({
    rules: {
        inq_subject: "required",
        inq_email: {
            required: true,
            email: true
        },
        reply_content: "required"
    },
    messages: {
        inq_subject: "Please enter your email subject",
        reply_content: "Please enter your email content",
        inq_email: "Please enter a valid email address"
    },
});

$('.sendReplyBtn').on('click', function() {
    if ($("#formRepInquiry").valid()) {
        sendReply();
    }
});


function sendReply() {
    Swal.fire({
        icon: 'warning',
        title: 'Are you sure?',
        text: 'this will send email respond to the recepeint',
        showCancelButton: true,
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes',
        customClass: {
            confirmButton: 'bg-indigo-700',
            container: 'bg-white backdrop-filter backdrop-blur-md bg-opacity-20'
        }
    }).then((result) => {
        if (result.isConfirmed) {
            $("#formRepInquiry").submit();
        }
    })
}

$(document).on('click', '.reply-btn', function() {
    var data = $(this).data('inquiry');
    data = jQuery.parseJSON(atob(data));

    $('input[name="inq_id"]').val(data.id);
    $('input[name="inq_name"]').val(data.name);
    $('input[name="inq_email"]').val(data.email);

});