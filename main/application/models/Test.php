<?php
/**
 * Created by PhpStorm.
 * User: Mohammad Amin
 * Date: 16/03/2016
 * Time: 03:49 PM
 */

class Test extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

public function ttt(){
    var_dump($this->db->select('sheet.title AS sheet,service.title AS service', false)
        ->from('service')
        ->join('sheet','sheet.service_id = service.service_id')
        ->get()
        ->result_array());
}
}