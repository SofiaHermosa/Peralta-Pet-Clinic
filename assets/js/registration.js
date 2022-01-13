jQuery.validator.addMethod("passwordCheck", function(value, element, param) {
    if (this.optional(element)) {
        return true;
    } else if (!/[A-Z]/.test(value)) {
        return false;
    } else if (!/[a-z]/.test(value)) {
        return false;
    } else if (!/[0-9]/.test(value)) {
        return false;
    }

    return true;
},
"Password must have atleast one uppercase, one digit (0-9)");

$("#formRegistration").validate({
    rules: {
        fname: "required",
        lname: "required",
        terms_condition: "required",
        contact_no: {
            required: true,
            maxlength: 11,
            minlength: 11,
        },
        gender: "required",
        address: "required",
        uname: "required",
        email: {
            required: true,
            email: true,
            remote: `/validate/duplicates`
        },
        username: {
            required: true,
            minlength: 5,
            remote: `/validate/duplicates`
        },
        password : {
            minlength : 5,
            required: true,
            passwordCheck: true
        },
        confirm_password : {
            required : true,
            equalTo : password
        }
    },
    messages: {
        fname: "Please enter your first name",
        lname: "Please enter your lase name",
        terms_condition: "Please click the checkbox if you agree in our terms and conditio",
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
            required  : "Please provide your password",
        },
        confirm_password : {
            required : "Re-enter your password",
            equalTo  : "Most be equal to password" 
        }
    },
});

function objectifyForm(formArray) {
    //serialize data function
    var returnArray = {};
    for (var i = 0; i < formArray.length; i++){
        returnArray[formArray[i]['name']] = formArray[i]['value'];
    }
    return returnArray;
}

$(document).on('submit', '#formRegistration', function(e){
    e.preventDefault();
    submitReg();
});

$('#registration').steps({
    onFinish: function() { 
        $("#formRegistration").submit();
    },
    onChange: function(currentIndex, newIndex, stepDirection) {
        if(stepDirection == 'forward' && currentIndex == 0 && newIndex == 1){
            if($("#formRegistration").valid()){
                return true;
            }else{
                return false;
            }
        }

        if(stepDirection == 'forward' && currentIndex == 1 && newIndex == 1){
            if($("#formRegistration").valid()){
               return true;
            }else{
               return false;
            }
        }
        
        return true;
    }
});

function submitReg(){
    var formData = $('#formRegistration').serializeArray();
    var data = objectifyForm(formData);
    $('.reg__finish').attr('disabled', true);
    $.post('/register', data).done(function(res){
        $('#reg__success').removeClass('hidden');
    });
}

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


$(document).on('click', '.close-modal', function(e) {
    var menu = $(this).data('toggle');
    var menuTarget = $(menu);
    menuTarget.fadeOut("easing");
});

$(document).on('click', '.termsCheck', function(){
    $(this).prop('checked', false);
    $('#termsConditionModal').fadeIn("easing");
});

$(document).on('click', '.agreeTerms', function(){
    $('.termsCheck').prop('checked', true);
    $('#termsConditionModal').fadeOut("easing");
});
