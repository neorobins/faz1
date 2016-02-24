<?php
/**
 * Created by PhpStorm.
 * User: Mohammad Amin
 * Date: 16/10/2015
 * Time: 01:12 PM
 */


// get all vars like name , section name , ...
function getMainVars()
{
    $ci = get_instance();
    $ci->load->model('userlevel');
    return array(
        'title' => "کلينيک آتيه",
        'picture' => "person.png",
        'user_name' => "محمد امین باژند",
        'section_name_fa' => "پنل",
        'newMessageNumber' => "1",
        'sideBarMenu' => $ci->userlevel->getSectionAccess("patient")
    );
}

function loadView($viewName, $variables)
{
    $ci = get_instance();
    $ci->load->view('panel/layout/layout', array(
            'mainVars' => getMainVars(),
            'pageContent' => $ci->load->view($viewName, $variables, TRUE))
    );
}

function br2nlConvert($text, $nl2br = TRUE)
{
    if ($nl2br) {
        $breaks = array("\r\n", "\n\r", "\n", "\r");
        return str_ireplace($breaks, "<br/>", $text);
    } else {
        $breaks = array("<br />", "<br>", "<br/>");
        return str_ireplace($breaks, "\r\n", $text);
    }
}

function data_uri($contents)
{
    $base64 = base64_encode($contents);
    return ('data:' . 'image/jpeg' . ';base64,' . $base64);
}

?>
