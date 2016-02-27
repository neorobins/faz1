/**
 * Created by Mohammad Amin on 26/02/2016.
 */
function checkM() {
    var c = document.getElementById("melliCode").value;
    if (c == "") {
        $("#melliCode").removeClass("alert-danger");
    } else {
        if (checkMelli(c)) {
            $("#melliCode").removeClass("alert-danger");
            $("#melliCode").addClass("alert-success");
        }
        else {
            $("#melliCode").removeClass("alert-success");
            $("#melliCode").addClass("alert-danger");
        }
    }
}
function checkE() {
    var c = document.getElementById("email").value;
    if (c == "") {
        $("#email").removeClass("alert-danger");
    } else {
        if (checkEmail(c)) {
            $("#email").removeClass("alert-danger");
            $("#email").addClass("alert-success");
        }
        else {
            $("#email").removeClass("alert-success");
            $("#email").addClass("alert-danger");
        }
    }
}
function checkEmail(email){
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
