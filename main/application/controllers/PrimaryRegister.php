<?php
/**
 * Created by PhpStorm.
 * User: Mohammad Amin
 * Date: 26/02/2016
 * Time: 07:38 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class PrimaryRegister extends CI_Controller {

    public function index()
    {
        $this->load->view('PrimaryRegister/PrimaryRegister');
    }
}
