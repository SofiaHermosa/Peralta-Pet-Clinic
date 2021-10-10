$("#formRegistration").validate({
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
            remote: `/validate/duplicates`
        },
        username: {
            required: true,
            minlength: 5,
            remote: `/validate/duplicates`
        },
        password : {
            minlength : 5,
            required: true
        },
        confirm_password : {
            required : true,
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
        console.log(currentIndex, newIndex, stepDirection);
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
