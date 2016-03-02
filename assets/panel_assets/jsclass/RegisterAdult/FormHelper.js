/**
 * Created by Mohammad Amin on 25/02/2016.
 */
var total = 1;
var currentPart = 1;
function formHelper(totalPart) {
    total = totalPart;
    for (var i = 2; i <= total; i++) {
        $("#part" + i).hide();
    }
    $("#next_step").show();
    $("#submit").hide();
}

function previousStepRegister() {
    if (currentPart > 1) {
        $("#part" + currentPart--).hide();
        $("#part" + currentPart).show();
        if (currentPart == 1) {
            $("#previous_step").hide();
        }
        $("#next_step").show();
        window.scrollTo(0, 0);
    }
}

function nextStepRegister() {
    if (currentPart < total) {
        $("#part" + currentPart++).hide();
        $("#part" + currentPart).show();
        if (currentPart == total) {
            $("#next_step").hide();
            $("#submit").show();
        }
        $("#previous_step").show();
        window.scrollTo(0, 0);
    }
}