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
        $this->load->model(array('DBUser', 'DBRole'));
        $this->lang->load('Authentication', 'persian');
        $this->config->set_item('language', 'persian');
    }

    public function signUp($action = null)
    {
        $this->form_validation->set_rules('national_id', 'lang:national_id', 'required|trim|max_length[20]|numeric|is_unique[user.national_id]');
        $this->form_validation->set_rules('password', 'lang:password', 'required|trim|max_length[70]|matches[passwordRepeat]');
        $this->form_validation->set_rules('passwordRepeat', 'lang:password_repeat', 'required|trim|max_length[70]');
        $this->form_validation->set_rules('phone', 'lang:phone', 'required|trim|regex_match[/^09[0-9]{2}-[0-9]{3}-[0-9]{4}$/]');
        $this->form_validation->set_rules('birthday', 'lang:birthday', 'required|trim|regex_match[/^1[0-9]{3}-[0-3][0-9]-[0-3][0-9]$/]');
        $this->form_validation->set_rules('email', 'lang:email', 'trim|valid_email');
        $national_id = $this->input->post('national_id', true);
        $password = $this->input->post('password', true);
        $birthday = $this->input->post('birthday', true);
        $phone = $this->input->post('phone', true);
        $email = $this->input->post('email', true);

        if ($action == null || $this->form_validation->run() == FALSE) {
            $this->load->view('Panel/Authentication/SignUp');
        } else if ($action == 'doSignUp' && $this->form_validation->run() == TRUE) {
            $user_id = $this->DBUser->registerNewUser(array(
                'national_id' => $national_id,
                'password' => sha1($password),
                'email' => $email,
                'phone_number' => str_replace('-', '', $phone),
                'birthday' => str_replace('-', '/', $birthday),
                'first_name' => 'unknown',
                'last_name' => 'unknown'
            ));
            $this->DBRole->setUserRole($user_id, 'patient');
            $this->session->set_flashdata(
                array(
                    'national_id' => $national_id,
                    'password' => $password
                )
            );
            redirect('Authentication/signIn');
        } else {
            redirect('Authentication/signUp');
        }
    }

    public function signIn($action = null)
    {
        $this->form_validation->set_rules('national_id', 'lang:national_id', 'required|trim|max_length[20]|numeric');
        $this->form_validation->set_rules('password', 'lang:password', 'required|trim|max_length[70]');
        $this->form_validation->set_rules('section', 'lang:section', 'required|trim|max_length[10]|in_list[clinic,education]');
        $this->form_validation->set_rules('remember', 'lang:remember', 'trim|regex_match[/^1$/]');
        $national_id = $this->input->post('national_id', true);
        $password = $this->input->post('password', true);
        $section = $this->input->post('section', true);
        $remember = $this->input->post('remember', true);


        if ($action == null || $this->form_validation->run() == FALSE) {
            $this->load->view('Panel/Authentication/SignIn', array('error' => 0));
        } else if ($action == 'doSignIn' && $this->form_validation->run() == TRUE) {
            if ($this->DBUser->validateUsernameAndPassword($national_id, sha1($password))) {
                $data = $this->DBUser->getPrimaryDetail($national_id)[0];
                $data['section'] = $section;
                setAuth($data, $remember);
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
        $this->form_validation->set_rules('role', 'lang:role', 'required|trim|numeric|max_length[20]');
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