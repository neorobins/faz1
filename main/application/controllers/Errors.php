<?php
/**
 * Created by PhpStorm.
 * User: Hamed
 * Date: 3/2/2016
 * Time: 9:03 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Errors extends CI_Controller {

    public function page_missing()
    {
        loadView('errors/404',array(),array(),array());
    }

    public function access_denied(){
        loadView('errors/AccessDenied',array(),array(),array());
    }

}