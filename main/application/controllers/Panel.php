<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends CI_Controller
{

    public function index()
    {
        if($this->session->userdata('panel_type')=='patient'){
            redirect("RegisterAdult");
        }else{
            loadView('panel/home/backup');
        }
    }



}
