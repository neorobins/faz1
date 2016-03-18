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
        $this->load->model('DBUser');
        $this->lang->load('Authentication','persian');
    }

    public function signUp($action = null)
    {
        $this->form_validation->set_rules('national_id', 'Username', 'required|trim|max_length[20]|numeric');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|max_length[70]|matches[passwordRepeat]');
        $this->form_validation->set_rules('passwordRepeat', 'Password', 'required|trim|max_length[70]');
        $this->form_validation->set_rules('remember', 'Remember', 'integer|trim');
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);
        $remember = $this->input->post('remember', true);
//        var_dump($_POST);
//        die();

        if ($action == null) {
            $this->load->view('Panel/Authentication/SignUp', array('error' => 0));
        } else if ($action == 'doSignUp' && $this->form_validation->run() == FALSE) {
            $this->load->view('Panel/Authentication/SignUp', array('error' => 1));
        } else if ($action == 'doSignUp' && $this->form_validation->run() == TRUE) {
            redirect('Authentication/signIn');
        }
    }

    public function signIn($action = null)
    {
        $this->form_validation->set_rules('national_id', 'Username', 'required|trim|max_length[20]|numeric');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|max_length[70]');
        $this->form_validation->set_rules('section', 'Remember', 'required|trim|max_length[10]|in_list[clinic,education]');
        $this->form_validation->set_rules('remember', 'Remember', 'trim|numeric');
        $national_id = $this->input->post('national_id', true);
        $password = $this->input->post('password', true);
        $section = $this->input->post('section', true);
        $remember = $this->input->post('remember', true);

        if ($action == null) {
            $this->load->view('Panel/Authentication/SignIn', array('error' => 0));
        } else if ($action == 'doSignIn' && $this->form_validation->run() == FALSE) {
            $this->load->view('Panel/Authentication/SignIn', array('error' => 1));
        } else if ($action == 'doSignIn' && $this->form_validation->run() == TRUE) {
            if ($this->DBUser->validateUsernameAndPassword($national_id, sha1($password))) {
                setAuth($this->DBUser->getPrimaryDetail($national_id)[0], $remember);
                $roles = $this->DBUser->getUserRole($national_id);
                if (count($roles) > 1) {
                    redirect('Authentication/selectRole');
                } elseif (count($roles) == 1) {
                    $this->session->set_userdata(
                        array(
                            'role_id' => $roles[0]['role_id'],
                            'role_title' => $roles[0]['role_title'],
                            'role_title_fa' => $roles[0]['role_title_fa']
                        )
                    );
                    redirect('Panel');
                }
            } else {
                $this->load->view('Panel/Authentication/SignIn', array('error' => 1));
            }
        } else {
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

    public function selectRole($action = null)
    {
        if (!$this->session->has_userdata('national_id'))
            redirect('Authentication/signIn');
        $this->form_validation->set_rules('role', 'Username', 'required|trim|numeric|max_length[20]');
        $role = $this->input->post('role', true);
        $roles = $this->DBUser->getUserRole($this->session->userdata('national_id'));
        if ($action == null) {
            $this->load->view('Panel/Authentication/SelectRole', array('roles' => $roles));
        } else if ($action == 'selectRole' && $this->form_validation->run() == TRUE) {
            foreach ($roles as $item) {
                if ($item['role_id'] == $role) {
                    $this->session->set_userdata(
                        array(
                            'role_id' => $item['role_id'],
                            'role_title' => $item['role_title'],
                            'role_title_fa' => $item['role_title_fa']
                        )
                    );
                    redirect('Panel');
                }
            }
            redirect('Authentication/signIn');
        } else {
            redirect('Authentication/signIn');
        }

    }

    public function passwordRecovery()
    {
    }
}