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
                'plugins/chartjs/Chart.min.js',
                'jsclass/Admin/BarChart/BarChartHandler.js',
                'dist/js/demo.js',
                'jsclass/Calendar/moment.min.js',
                'plugins/fullcalendar/fullcalendar.min.js'
            )
        );
    }
}
