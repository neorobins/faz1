<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends CI_Controller {

    public function index()
    {
        loadView('panel/home/home',array(),
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
