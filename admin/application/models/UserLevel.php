<?php

/**
 * Created by PhpStorm.
 * User: Mohammad Amin
 * Date: 15/10/2015
 * Time: 08:12 PM
 */
class UserLevel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }


//in method bar asas section_id controller hayee ra ke karbar dastrasi darad barrasi mikonad
//felan az hard code baraye dastrasi ha estefade mishe
    public function getSectionAccess($section_id)
    {
        switch ($section_id) {
            case 'patient': {
                $return = array(
                    'ServiceManagement' => array(
                        'index' => 1,
                        'pricingService'=>'لیست خدمات',
                        'name_fa' => 'مدیریت خدمات'
                    ),
                    'UserManagement' => array(
                        'index' => 1,
                        'userList'=>'لیست کاربران',
                        'name_fa' => 'مدیریت کاربران'
                    ),
                    'Report' => array(
                        'index' => 1,
                        'presenceService'=>'خدمات حضوری',
                        'transaction'=>'گردش های مالی',
                        'tests'=>'آزمون ها',
                        'financial'=>'مالی و اعتباری',
                        'name_fa' => 'گزارش گیری'
                    ),
                    'Profile' => array(
                        'index' => 1,
                        'singleMenu'=>1,
                        'name_fa' => 'تنظیمات کاربری'
                    ),
                    'Signout' => array(
                        'index' => 1,
                        'singleMenu'=>1,
                        'name_fa' => 'خروج'
                    )

                );
                break;
            }

            default: {
                $return = null;
            }
        }

        return $return;
    }

}


?>