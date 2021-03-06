$("#formSettings").validate({
    rules: {
        comp_name: "required",
        comp_email: {
            required: true,
            email: true
        },
        comp_no: {
            required: true,
            maxlength: 12,
            minlength: 11,
        },
        comp_address: "required"
    },
    messages: {
        comp_name: "Please enter your company name",
        comp_address: "Please enter your address",
        comp_no: {
            required: "Please provide a company contact no",
            maxlength: "Please enter valid contact no",
            minlength: "Please enter valid contact no"
        },
        comp_email: "Please enter a valid email address"
    },
});

$('.saveSettings').on('click', function() {
    if ($("#formSettings").valid()) {
        saveSettings();
    }
});


function saveSettings() {
    Swal.fire({
        icon: 'warning',
        title: 'Are you sure?',
        text: 'Changes will apply to your whole branding',
        showCancelButton: true,
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes',
        customClass: {
            confirmButton: 'bg-indigo-700',
            container: 'bg-white backdrop-filter backdrop-blur-md bg-opacity-20'
        }
    }).then((result) => {
        if (result.isConfirmed) {
            $("#formSettings").submit();
        }
    })
}

$('#logo-upload').on('change', function() {
    var file = $("#logo-upload").get(0).files[0];

    if (file) {
        var reader = new FileReader();

        reader.onload = function() {
            $("#logo-prev").attr("src", reader.result);
        }

        reader.readAsDataURL(file);
    }
});