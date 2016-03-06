<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('panel/Login/Login');
    }
    public function doLogin()
    {
        if(isset($_POST['section'])){
            if ($_POST['section'] === 'clinic') {
                $this->session->set_userdata(array('panel_type'=>'patient'));
                redirect('PrimaryRegister');
            } elseif ($_POST['section'] === 'education') {
                $this->session->set_userdata(array('panel_type'=>'education'));
                redirect('Panel');
            }else{
            }
        }
        redirect('Login');
    }

}
