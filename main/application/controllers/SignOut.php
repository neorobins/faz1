<?php
/**
 * Created by PhpStorm.
 * User: Mohammad Amin
 * Date: 06/03/2016
 * Time: 09:56 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class SignOut extends CI_Controller
{

    public function index()
    {
        $this->load->library('session');
        $this->session->sess_destroy();
        redirect('Login');
    }


}
