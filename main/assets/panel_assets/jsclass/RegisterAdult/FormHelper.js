/**
 * Created by Mohammad Amin on 25/02/2016.
 */
var total = 1;
var currentPart = 1;
function formHelper(totalPart) {
    total = totalPart;
}

function previousStepRegister() {
    if (currentPart > 1) {
        $("#part" + currentPart--).hide();
        $("#part" + currentPart).show();
        if (currentPart == 1) {
            $("#previous_step").hide();
        } else {
            $("#next_step").show();
        }
        
    }
}

function nextStepRegister() {
    if (currentPart < total) {
        $("#part" + currentPart++).hide();
        $("#part" + currentPart).show();
        if (currentPart == total) {
            $("#next_step").hide();
            $("#submit").show();
        } else {
            $("#previous_step").show();
        }
    }
}