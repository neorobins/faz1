<?php
/**
 * Created by PhpStorm.
 * User: Mohammad Amin
 * Date: 07/03/2016
 * Time: 07:51 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class CourseManagement extends CI_Controller
{

    public function allCourse()
    {
        loadView('panel/CourseManagement/AllCourse', array(),
            array(),
            array()
        );
    }

    public function home(){
        loadView('panel/CourseManagement/Home', array(),
            array(),
            array()
        );
    }
}


?>