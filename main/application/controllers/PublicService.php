<?php
/**
 * Created by PhpStorm.
 * User: Hamed
 * Date: 3/2/2016
 * Time: 12:47 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class PublicService extends CI_Controller {

    public function publicTest()
    {
        loadView('panel/Flash/FlashTest',
            array(
            ),
            array(
//                'plugins/jdatepicker/skins/aqua/theme.css',
//                'plugins/iCheck/all.css'
            ),
            array(
//                'plugins/jdatepicker/jalali.js',
//                'plugins/jdatepicker/calendar.js',
//                'plugins/jdatepicker/calendar-setup.js',
//                'plugins/jdatepicker/lang/calendar-fa.js',
//                'plugins/iCheck/icheck.min.js',
                'jsclass/Flash/swfobject.js'
            )
        );
    }
}