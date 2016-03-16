<?php
/**
 * Created by PhpStorm.
 * User: Mohammad Amin
 * Date: 16/03/2016
 * Time: 01:13 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('Identification', 'form', 'security'));
        $this->load->library('form_validation');
    }

    public function signUp($action=null)
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim|max_length[70]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|max_length[70]');
        $this->form_validation->set_rules('remember', 'Remember', 'integer|trim');
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);
        $remember = $this->input->post('remember', true);


        if($action==null){
            $this->load->view('Panel/Authentication/SignUp',array('error'=>0));
        }else if ($action=='doSignUp' && $this->form_validation->run() == FALSE) {
            $this->load->view('Panel/Authentication/SignUp',array('error'=>1));
        } else if($action=='doSignUp' && $this->form_validation->run() == TRUE){
            redirect('Authentication/signIn');
        }
    }

    public function signIn($action=null)
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim|max_length[70]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|max_length[70]');
        $this->form_validation->set_rules('remember', 'Remember', 'integer|trim');
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);
        $remember = $this->input->post('remember', true);

        if($action==null){
            $this->load->view('Panel/Authentication/SignIn',array('error'=>0));
        }else if ($action=='doSignIn' && $this->form_validation->run() == FALSE) {
            $this->load->view('Panel/Authentication/SignIn',array('error'=>1));
        } else if($action=='doSignIn' && $this->form_validation->run() == TRUE){

        }else{
            redirect('Authentication/signIn');
        }
    }

    public function signOut()
    {
        $this->load->helper('cookie');

        $this->session->sess_destroy();
        $coo = array(
            'name' => 'atie_main_cookie',
            'value' => '',
            'expire' => '1'
        );
        $this->input->set_cookie($coo);
    }

    public function passwordRecovery()
    {
        $this->load->model('Test');
        $this->Test->ttt();
    }
}