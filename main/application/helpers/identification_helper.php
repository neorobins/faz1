<?php
defined('BASEPATH') OR exit('No direct script access allowed');


function login($username, $password)
{
    $ci = get_instance();
    $ci->load->model('dbuser');
    $result = $ci->dbuser->getPassword($username);
    if (!$result) {
        return false;
    }

    $ci->load->library('aes', array('data' => $result[0]['user_password'], 'key' => $result[0]['user_salt']));
    if ($ci->aes->decrypt() === $password) {
        return true;
    } else {
        return false;
    }

}

// for core -> I_Controller

function isUserValidByDetail($username, $section_id)
{
    $ci = get_instance();
    $ci->load->model('dbuser');
    if ($ci->dbuser->getExistUserByUsernameSection($username, $section_id) != NULL) {
        return true;
    } else {
        return false;
    }
}

//set auth -> for set session and cookie when login


function setAuth($data)
{

    $ci = get_instance();
    $set_data = array(
        'name' => $data['name'],
        'username' => $data['username'],
        'section_id' => $data['section_id'],
    );
    $ci->load->library('session');
    $ci->session->set_userdata($set_data);


    if ($data['remember'] === '1') {
        $ci->load->library('encrypt');
        $value = $ci->encrypt->encode("{$data['username']}_islogin_{$data['name']}_{$data['section_id']}_" . time()
            , ENC_KEY);
        $coo = array(
            'name' => 'feqhi_login_panel',
            'value' => $value,
            'expire' => '600000'
        );
        $ci->load->helper('cookie');
        $ci->input->set_cookie($coo);
    }
}

function isUsernameExist($username){
    $ci = get_instance();
    $ci->load->model('dbuser');
    if($ci->dbuser->getName($username) != NULL){
        return TRUE;
    }else{
        return FALSE;
    }
}


?>