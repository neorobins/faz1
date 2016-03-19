<?php

/**
 * Created by PhpStorm.
 * User: Mohammad Amin
 * Date: 18/03/2016
 * Time: 03:11 PM
 */
class DBRole extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function setUserRole($user_id, $role_title)
    {
        $this->db->insert('user_role',
            array(
                'user_id' => $user_id,
                'role_id' => $this->getRoleIDByTitle($role_title)
            )
        );
    }

    public function getRoleIDByTitle($role_title)
    {
        if ($result = $this->db->select('role_id')
            ->from('role')
            ->where('role_title', $role_title)
            ->get()
            ->result_array()
        ) {
            return $result[0]['role_id'];
        }
        return false;
    }
}