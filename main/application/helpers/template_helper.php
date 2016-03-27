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
    $ci->load->model('UserAccess');
    $ci->load->library('session');


    $userAccess = $ci->session->userdata('userAccess');
    $title = '';
    if(isset($userAccess[$ci->router->fetch_class()]) && isset($userAccess[$ci->router->fetch_class()]['name_fa'])){
        $title = ' | '.$userAccess[$ci->router->fetch_class()]['name_fa'];
    }
    return array(
        'title' => "کلينيک آتيه".$title,
        'picture' => "person.png",
        'user_name' => "محمد امین باژند",
        'section_name_fa' => "پنل".' '.($ci->session->userdata('panel_type')=='patient'?'کلینیک':'آموزش'),
        'newMessageNumber' => "1",
        'sideBarMenu' => $userAccess
    );
}

//header -> stylesheet | footer -> js files
function loadView($viewName, $variable = array(), $head = array(), $js_include = array())
{
    $ci = get_instance();
    $ci->load->view('panel/layout/layout', array(
            'mainVars' => getMainVars(),
            'head' => $ci->load->view('panel/include/head', array('stylesheet' => $head), TRUE),
            'footer' => $ci->load->view('panel/include/footer', array('version' => 'Demo'), TRUE),
            'js' => $ci->load->view('panel/include/js', array('js' => $js_include), TRUE),
            'pageContent' => $ci->load->view($viewName, $variable, TRUE))
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
