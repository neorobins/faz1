<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Mohammad Amin
 * Date: 25/02/2016
 * Time: 10:59 AM
 */
class RegisterJuvenile extends CI_Controller
{
    public function index()
    {
        loadView('panel/RegisterJuvenile/RegisterJuvenile',
            array(
                'part1'=>$this->load->view('panel/RegisterJuvenile/Part1',array(),true),
                'part2'=>$this->load->view('panel/RegisterJuvenile/Part2',array(),true),
                'part3'=>$this->load->view('panel/RegisterJuvenile/Part3',array(),true),
                'part4'=>$this->load->view('panel/RegisterJuvenile/Part4',array(),true),
                'part5'=>$this->load->view('panel/RegisterJuvenile/Part5',array(),true),
                'part6'=>$this->load->view('panel/RegisterJuvenile/Part6',array(),true),
                'part7'=>$this->load->view('panel/RegisterJuvenile/Part7',array(),true),
                'part8'=>$this->load->view('panel/RegisterJuvenile/Part8',array(),true),
                'part9'=>$this->load->view('panel/RegisterJuvenile/Part9',array(),true)
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