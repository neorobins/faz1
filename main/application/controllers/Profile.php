<?php
/**
 * Created by PhpStorm.
 * User: Hamed
 * Date: 2/28/2016
 * Time: 11:31 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function index()
    {
        loadView('panel/Calendar/Calendar',array(),
            array(
                'plugins/fullcalendar/fullcalendar.min.css',
                'plugins/fullcalendar/fullcalendar.print.css' => 'media="print"'
            ),
            array(
//                'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js' => false,
                'jsclass/Calendar/moment.min.js',
                'plugins/fullcalendar/fullcalendar.min.js'
            )
        );
    }
}