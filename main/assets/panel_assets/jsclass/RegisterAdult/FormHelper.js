/**
 * Created by Mohammad Amin on 25/02/2016.
 */
var total = 1;
var currentPart = 1;
function formHelper(totalPart){
    total = totalPart;
}

function nextStepRegister(){
    if(currentPart<total){
        $("#part"+currentPart++).hide();
        $("#part"+currentPart).show();
        if(currentPart==total){
            $("#submit").show();
        }
    }
}