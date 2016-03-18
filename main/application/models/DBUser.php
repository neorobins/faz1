<?php

/**
 * Created by PhpStorm.
 * User: Mohammad Amin
 * Date: 16/03/2016
 * Time: 06:59 PM
 */
class DBUser extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function validateUsernameAndPassword($national_id, $password)
    {
        return ($this->db->select('user_id')
                ->from('user')
                ->where('national_id', $national_id)
                ->where('password', $password)
                ->count_all_results());
    }

    public function getPrimaryDetail($national_id){
        return $this->db->select('user.user_id,user.first_name,user.last_name,user.national_id')
                ->from('user')
                ->where('national_id',$national_id)
                ->get()
                ->result_array();
    }

    public function getUserRole($national_id){
        return $this->db->select('role.role_id,role.role_title')
                ->from('user')
                ->join('user_role','user.user_id=user_role.user_id')
                ->join('role','user_role.role_id=role.role_id')
                ->where('national_id',$national_id)
                ->get()
                ->result_array();
    }


}