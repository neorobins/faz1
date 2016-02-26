<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Mohammad Amin
 * Date: 25/02/2016
 * Time: 10:59 AM
 */
class RegisterAdult extends CI_Controller
{
    public function index()
    {
        loadView('panel/RegisterAdult/RegisterAdult',
            array(
                'part1'=>$this->load->view('panel/RegisterAdult/Part1',array(),true),
                'part2'=>$this->load->view('panel/RegisterAdult/Part2',array(),true),
                'part3'=>$this->load->view('panel/RegisterAdult/Part3',array(),true),
                'part4'=>$this->load->view('panel/RegisterAdult/Part4',array(),true)
            ),
            array(
                'plugins/jdatepicker/skins/aqua/theme.css',
                'plugins/iCheck/all.css'
            ),
            array(
                'plugins/jdatepicker/jalali.js',
                'plugins/jdatepicker/calendar.js',
                'plugins/jdatepicker/calendar-setup.js',
                'plugins/jdatepicker/lang/calendar-fa.js',
                'plugins/iCheck/icheck.min.js',
                'jsclass/RegisterAdult/FormHelper.js'
            )
        );
    }
}

?>