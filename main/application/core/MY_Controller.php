<?php

/**
 * User: Mohammad Amin
 * Date: 21/03/2016
 * Time: 12:46 PM
 */
class MY_Controller extends CI_Controller
{
    protected $national_id = null;

    protected $user_id = null;

    protected $role_id = null;

    protected $role_title = null;

    protected $section = null;  //section title

    protected $userAccess = null;


    function __construct()
    {
        parent::__construct();
        $this->userControl();
        $this->checkUserAccess();
    }

    private function userControl()
    {
        if (!$this->checkVars()) {
            if ($this->checkSession()) {
                $this->setVars();
                $this->setRoles();
            } elseif ($this->getCookie()) {
                $this->setVars();
                redirect('Authentication/selectRole');
            } else {
                $this->setAddress();
                redirect('Authentication/signIn');
            }
        }
        if (!$this->checkDetailValidation()) {
            $this->setAddress();
            redirect('Authentication/signIn');
        }
        if (!empty($url = $this->getAddress())) {
            $this->setAddress(true);
            redirect($url);
        }
    }

    private function checkVars()
    {
        if (
        (empty($this->national_id)
            || empty($this->user_id)
            || empty($this->section)
            || empty($this->role_id)
            || empty($this->role_title))
        ) {
            return false;
        }

        return true;
    }

    private function setVars()
    {
        $this->national_id = $this->session->userdata('national_id');
        $this->user_id = $this->session->userdata('user_id');
        $this->section = $this->session->userdata('section');
    }

    private function setRoles()
    {
        $this->role_id = $this->session->userdata('role_id');
        $this->role_title = $this->session->userdata('role_title');
    }


    private function checkSession()
    {
        if (
            empty($this->session->userdata('national_id'))
            || empty($this->session->userdata('user_id'))
            || empty($this->session->userdata('role_id'))
            || empty($this->session->userdata('role_title'))
            || empty($this->session->userdata('section'))
        ) {
            return false;
        }

        return true;
    }


    private function checkDetailValidation()
    {
        $this->load->helper('Identification');
        return isUserValidByDetail($this->user_id, $this->national_id);
    }

    private function getCookie()
    {
        $this->load->helper('cookie');
        $this->load->library('encrypt');
        if ($cookie = get_cookie('_login_panel'))
            if ($cookie = $this->encrypt->decode($cookie, ENC_KEY))
                if ($cookie = json_decode($cookie)) {
                    $this->session->set_userdata(array(
                        'user_id' => $cookie->user_id,
                        'national_id' => $cookie->national_id,
                        'section' => $cookie->section
                    ));
                    return true;
                }
        return false;
    }

    private function getAddress()
    {
        return $this->session->userdata('savedURL');
    }

    private function setAddress($setNull = FALSE)
    {

        if ($setNull == FALSE) {
            $this->session->set_userdata(
                array('savedURL' => base_url() . $this->router->fetch_class() . '/' . $this->router->fetch_method())
            );
        } else {
            $this->session->set_userdata(
                array('savedURL' => NULL)
            );
        }
    }

    private function checkUserAccess()
    {
        if (!isset($this->userAccess)) {
            $this->load->model('UserAccess');
            $this->userAccess = $this->UserAccess->getSectionAccess($this->user_id, $this->role_id, $this->section);
            $this->session->set_userdata(
                ['userAccess'=>$this->userAccess]
            );
        }
        if (
        !isset($this->userAccess[$this->router->fetch_class()]['access_function'][$this->router->fetch_method()])
        ) {
            redirect('Errors');
        }

    }

}