<?php

/**
 * Created by PhpStorm.
 * User: Mohammad Amin
 * Date: 16/03/2016
 * Time: 06:59 PM
 */
class DBUser extends CI_Model {

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
		                 ->where('isarchive', '0')
		                 ->count_all_results());
	}

	public function getPrimaryDetail($national_id)
	{
		return $this->db->select('user.user_id,user.national_id')
		                ->from('user')
		                ->where('national_id', $national_id)
		                ->get()
		                ->result_array();
	}

	public function getPublicDetail($national_id)
	{
		return $this->db->select('first_name,last_name')
		                ->from('user')
		                ->where('national_id', $national_id)
		                ->get()
		                ->result_array();
	}

	public function getUserRole($national_id)
	{
		return $this->db->select('role.role_id,role.role_title')
		                ->from('user')
		                ->join('user_role', 'user.user_id=user_role.user_id')
		                ->join('role', 'user_role.role_id=role.role_id')
		                ->where('national_id', $national_id)
		                ->get()
		                ->result_array();
	}

	public function registerNewUser($data)
	{
		if($this->db->insert('user', $data)) {
			return $this->db->select('user_id')
			                ->from('user')
			                ->where('national_id', $data['national_id'])
			                ->get()
			                ->result_array()[0]['user_id'];
		}

		return FALSE;
	}

	public function isNationalIDExist($national_id)
	{
		return ($this->db->select('user_id')
		                 ->from('user')
		                 ->where('national_id', $national_id)
		                 ->where('isarchive', '0')
		                 ->count_all_results());
	}

	public function getUserID($national_id)
	{
		if($result = $this->db->select('user_id')
		                      ->from('user')
		                      ->where('national_id', $national_id)
		                      ->get()
		                      ->result_array()
		) {
			return $result[0]['user_id'];
		}

		return FALSE;
	}

	public function changePassword($user_id, $password)
	{
		return $this->db->where('user_id', $user_id)
		                ->update('user', array('password' => $password));
	}

}