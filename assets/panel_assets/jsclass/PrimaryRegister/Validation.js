/**
 * Created by Mohammad Amin on 26/02/2016.
 */
function checkM() {
    var c = document.getElementById("national_id").value;
    if (c == "") {
        $("#national_id").addClass("alert-danger");
    } else {
        if (!checkMelli(c)) {
            $("#national_id").addClass("alert-danger");
        } else {
            $("#national_id").removeClass("alert-danger");
            return true;
        }
    }
    return false;
}
function checkE() {
    var c = document.getElementById("email").value;
    if (c == "") {
        $("#email").removeClass("alert-danger");
        return true;
    } else {
        if (checkEmail(c)) {
            $("#email").removeClass("alert-danger");
            return true;
        }
        else {
            $("#email").addClass("alert-danger");
        }
    }
    return false;
}
function checkP() {
    var password = document.getElementById("password").value;
    $("#passwordRepeat").removeClass("alert-danger");
    $("#passwordRepeat").removeClass("alert-success");
    $("#passwordRepeat").removeClass("alert-warning");
    $("#password").removeClass("alert-warning");
    if (password == document.getElementById("passwordRepeat").value) {
        if (password.length < 6) {
            $("#passwordRepeat").addClass("alert-warning");
            $("#password").addClass("alert-warning");
            $("#passwordError").html("رمز عبور باید حداقل دارای 6 کاراکتر باشد");
        } else {
            $("#passwordRepeat").addClass("alert-success");
            $("#passwordError").html("");
            return true;
        }
    } else {
        $("#passwordRepeat").addClass("alert-danger");
        $("#passwordError").html("رمز عبور به درستی تکرار نشده است");
    }
    return false;
}

function checkPhone() {
    var c = document.getElementById("phone").value;
    var regex = /^09[0-9]{2}-[0-9]{3}-[0-9]{4}$/;
    if (regex.test(c)) {
        $("#phone").removeClass("alert-danger");
        return true;
    } else {
        $("#phone").addClass("alert-danger");
        return false;
    }
}

function checkBirthday() {
    var c = document.getElementById("birthday").value;
    var regex = /^1[0-9]{3}-[0-9]{2}-[0-9]{2}$/;
    if (regex.test(c)) {
        $("#birthday").removeClass("alert-danger");
        return true;
    } else {
        $("#birthday").addClass("alert-danger");
        return false;
    }
}

function submitForm() {
    if (checkE() & checkM() & checkP() & checkPhone() & checkBirthday()) {
        document.getElementById("primaryRegister").submit();
    } else {
        $("#formError").html("لطفا تمامی موارد را به دقت تکمیل نمایید");
    }
}
function checkEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}
function checkMelli(code) {
    var L = code.length;
    if (L < 8 || parseInt(code, 10) == 0) return false;
    code = ('0000' + code).substr(L + 4 - 10);
    if (parseInt(code.substr(3, 6), 10) == 0) return false;
    var c = parseInt(code.substr(9, 1), 10);
    var s = 0;
    for (var i = 0; i < 9; i++)
        s += parseInt(code.substr(i, 1), 10) * (10 - i);
    s = s % 11;
    return (s < 2 && c == s) || (s >= 2 && c == (11 - s));
    return true;
}
