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
        loadView('panel/RegisterAdult/RegisterAdult', array(),
            array(
//                'plugins/jdatepicker/skins/calendar-blue.css',

                'plugins/jdatepicker/skins/aqua/theme.css'
            ),
            array(
                'plugins/jdatepicker/jalali.js',
                'plugins/jdatepicker/calendar.js',
                'plugins/jdatepicker/calendar-setup.js',
                'plugins/jdatepicker/lang/calendar-fa.js',
            )
        );
    }

}

?>