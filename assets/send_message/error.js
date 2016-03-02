/**
 * Created by Mohammad Amin on 03/02/2016.
 */
var base_url;


function initialize_error(url) {
    base_url = url;
}

function checkUsername() {
    $('#error_username').hide();
    $('#error_username_duplicate').hide();
    if ($('#username').val().length < 6) {
        $('#error_username').show();
    } else {
        $.post(base_url + "question/isUsernameExist", {username: $('#username').val()}, function (data) {
            if(data == 'TRUE'){
                $('#error_username_duplicate').show();
            }
        });
    }

}

function checkPassword() {
    $('#error_password').hide();
    if ($('#password').val().length < 6) {
        $('#error_password').show();
    }

}

function checkEmail() {
    $('#error_email').hide();
    if($('#email').val()!=''){
        $.post(base_url + "question/isEmailExist", {email: $('#email').val()}, function (data) {
            if(data == 'TRUE'){
                $('#error_email').show();
            }
        });
    }
}