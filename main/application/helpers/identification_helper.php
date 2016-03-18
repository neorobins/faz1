<?php
/**
 * Created by PhpStorm.
 * User: Mohammad Amin
 * Date: 16/03/2016
 * Time: 04:13 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');


//function isUserValidByDetail($username, $section_id)
//{
//    $ci = get_instance();
//    $ci->load->model('dbuser');
//    if ($ci->dbuser->getExistUserByUsernameSection($username, $section_id) != NULL) {
//        return true;
//    } else {
//        return false;
//    }
//}

//set auth -> for set session and cookie when login


function setAuth($data,$remember)
{
    $ci = get_instance();
    $ci->load->library('session');
    $ci->load->model('DBUser');

    $ci->session->set_userdata($data);
    if ($remember === '1') {
        $ci->load->library('encrypt');
        $value = $ci->encrypt->encode(json_encode($data) .'_'. time()
            , ENC_KEY);
        $coo = array(
            'name' => 'atieh_login_panel',
            'value' => $value,
            'expire' => '600000'
        );
        $ci->load->helper('cookie');
        $ci->input->set_cookie($coo);
    }

    $roles = $ci->DBUser->getUserRole($data['national_id']);
    if (count($roles) > 1) {
        redirect('Authentication/selectRole');
    } elseif (count($roles) == 1) {
        $ci->session->set_userdata(
            array(
                'role_id' => $roles[0]['role_id'],
                'role_title' => $roles[0]['role_title']
            )
        );
        redirect('Panel');
    }

    redirect('Authenticate/signIn');
}

//function isUsernameExist($username){
//    $ci = get_instance();
//    $ci->load->model('dbuser');
//    if($ci->dbuser->getName($username) != NULL){
//        return TRUE;
//    }else{
//        return FALSE;
//    }
//}


?>