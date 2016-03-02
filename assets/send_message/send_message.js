/**
 * Created by Mohammad Amin on 24/01/2016.
 */
function newmail() {
    if ($('#qs1').is(":visible") && !$('#qs2').is(":visible") && !$('#qs3').is(":visible") && !$('#qs4').is(":visible") && !$('#qs5').is(":visible")) {
        $('#qs2').show();
        $('#q2').show();
        $('#q1').hide();
    } else if ($('#qs1').is(":visible") && $('#qs2').is(":visible") && !$('#qs3').is(":visible") && !$('#qs4').is(":visible") && !$('#qs5').is(":visible")) {
        $('#qs3').show();
        $('#q3').show();
        $('#q2').hide();
        $('#q1').hide();
    }
    else if ($('#qs1').is(":visible") && $('#qs2').is(":visible") && $('#qs3').is(":visible") && !$('#qs4').is(":visible") && !$('#qs5').is(":visible")) {
        $('#qs4').show();
        $('#q4').show();
        $('#q3').hide();
        $('#q2').hide();
        $('#q1').hide();
    }
    else if ($('#qs1').is(":visible") && $('#qs2').is(":visible") && $('#qs3').is(":visible") && $('#qs4').is(":visible") && !$('#qs5').is(":visible")) {
        $('#qs5').show();
        $('#q5').show();
        $('#q3').hide();
        $('#q2').hide();
        $('#q1').hide();
        $('#q4').hide();
    }
};
function showm(m) {
    for (i = 1; i < 6; i++) {
        $('#q' + i).hide();
    }
    $('#q' + m).show();
};
