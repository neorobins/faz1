<?php
/**
 * Created by PhpStorm.
 * User: Mohammad Amin
 * Date: 26/02/2016
 * Time: 11:19 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class CreditManagement extends CI_Controller {

    public function IncreaseCredit()
    {
        loadView("panel/CreditManagement/IncreaseCredit",array());
    }
}
