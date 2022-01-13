$("#formUpdateProfile").validate({
    rules: {
        fname: "required",
        lname: "required",
        contact_no: {
            required: true,
            maxlength: 12,
            minlength: 11,
        },
        gender: "required",
        address: "required",
        uname: "required",
        email: {
            required: true,
            email: true,
        },
        username: {
            required: true,
            minlength: 5,
        },
        password : {
            minlength : 5,
        },
        confirm_password : {
            equalTo : password
        }
    },
    messages: {
        fname: "Please enter your first name",
        lname: "Please enter your lase name",
        contact_no: {
            required: "Please provide contact no",
            maxlength: "Please enter valid contact no",
            minlength: "Please enter valid contact no"
        },
        gender: "Please select gender",
        address: "Please enter your address",
        email: {
            email: "Please enter a valid email",
            required : "Please provide your email",
            remote: "Email already used"
        },
        username: {
            minlength: "Username most be atleast 5 character",
            required : "Please provide your username",
            remote: "Username already used"
        },
        password : {
            minlength : "Password most be atleast 5 character",
        },
        confirm_password : {
            equalTo  : "Most be equal to password" 
        }
    },
});

$('.updateProfileBtn').on('click', function() {
    if ($("#formUpdateProfile").valid()) {
        updateUser();
    }
});

$(document).on('click', '.edit--profile', function(){
    var data = $(this).data('profile');
    data = jQuery.parseJSON(atob(data));

    console.log(data);

    $('#editProfileModal').find('input[name="id"]').val('').val(data.id).removeClass('valid');
    $('#editProfileModal').find('input[name="fname"]').val('').val(data.first_name).removeClass('valid');
    $('#editProfileModal').find('input[name="lname"]').val('').val(data.last_name).removeClass('valid');
    $('#editProfileModal').find('input[name="mname"]').val('').val(data.middle_name).removeClass('valid');
    $('#editProfileModal').find('input[name="uname"]').val('').val(data.uname).removeClass('valid');
    $('#editProfileModal').find('textarea[name="address"]').val('').val(atob(data.address)).removeClass('valid');
    $('#editProfileModal').find('input[name="contact_no"]').val('').val(data.contact_no).removeClass('valid');
    $('#editProfileModal').find('select[name="gender"]').val('').val(data.gender).removeClass('valid');
    $('#editProfileModal').find('input[name="email"]').val('').val(data.email).removeClass('valid');
    $('#editProfileModal').find('input[name="username"]').val('').val(data.uname).removeClass('valid');
    $('#editProfileModal').find('input[name="password"]').val('').removeClass('valid');
    $('#editProfileModal').find('input[name="confirm_password"]').val('').removeClass('valid');
    if(typeof data.profile != 'undefined'){
        $('#editProfileModal').find("#logo-prev").attr("src", '../../../'+data.profile);
    }
});


function updateUser(){
    Swal.fire({
        icon: 'warning',
        title: 'Are you sure?',
        text: 'profile details and credentials will be updated.',
        showCancelButton: true,
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes',
        customClass: {
            confirmButton: 'bg-indigo-700',
            container: 'bg-white backdrop-filter backdrop-blur-md bg-opacity-20'
        }
    }).then((result) => {
        if (result.isConfirmed) {
            $('.updateUserBtn').attr('disabled', true);

            $('#formUpdateProfile')[0].submit();
        }
    });        
}