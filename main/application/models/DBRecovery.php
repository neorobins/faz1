<?php

/**
 * Created by PhpStorm.
 * User: Mohammad Amin
 * Date: 19/03/2016
 * Time: 11:41 AM
 */
class DBRecovery extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function setNewRecoveryCode($user_id, $recovery_code, $time)
    {
        $this->db->insert('recovery',
            array(
                'user_id' => $user_id,
                'recovery_code' => $recovery_code,
                'recovery_time' => $time
            )
        );
    }

    public function isRecoveryCodeActive($user_id, $recovery_code, $currentTime, $expireLength)
    {
        if ($result = $this->db->select('recovery_id,recovery_time,recovery_code')
            ->from('recovery')
            ->where('user_id', $user_id)
            ->where('recovery_expire', '0')
            ->order_by('recovery_time', 'DESC')
            ->limit('1')
            ->get()
            ->result_array()
        ) {
            if ($recovery_code==$result[0]['recovery_code']
            &&$currentTime - $result[0]['recovery_time'] < $expireLength) {
                return true;
            }
        }

        return false;
    }

//hameye recovery_code haye yek fard bayad expire shavad , momken ast chand bar darkhast dade bashad.
    public function setRecoveryCodeExpire($user_id)
    {
        $this->db->where('user_id',$user_id)
        ->update('recovery',array(
           'recovery_expire'=>'1'
        ));
    }


}