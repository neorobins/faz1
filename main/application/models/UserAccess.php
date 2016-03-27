<?php

/**
 * Created by PhpStorm.
 * User: Mohammad Amin
 * Date: 16/03/2016
 * Time: 08:12 AM
 */
class UserAccess extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }


    public function getSectionAccess($user_id, $role_id, $section_title)
    {
        $result_access = $this->db->select('access_title,access_controller,access_function')
            ->from('user_access')
            ->join('access', 'user_access.access_id=access.access_id')
            ->join('section', 'section.section_id=access.section_id')
            ->where('user_id', $user_id)
            ->where('section_title', $section_title)
            ->get()
            ->result_array();
        $result=[];
        foreach ($result_access as $access) {
//            if(!isset($result[$access['access_controller']]['access_title']))
//                $result[$access['access_controller']]['access_title']=$access['access_title'];
            $result[$access['access_controller']]['access_function'][$access['access_function']]=$access['access_title'];
        }
        $result_access = $this->db->select('access_title,access_controller,access_function')
            ->from('role_access')
            ->join('access', 'role_access.access_id=access.access_id')
            ->join('section', 'section.section_id=access.section_id')
            ->where('section_title', $section_title)
            ->where('role_id',$role_id)
            ->get()
            ->result_array();
        foreach ($result_access as $access) {
//            if(!isset($result[$access['access_controller']]['access_title']))
//                $result[$access['access_controller']]['access_title']=$access['access_title'];
            $result[$access['access_controller']]['access_function'][$access['access_function']]=$access['access_title'];
        }
        return $result;
    }


//in method bar asas section_id controller hayee ra ke karbar dastrasi darad barrasi mikonad
//felan az hard code baraye dastrasi ha estefade mishe

    public function getSectionAccessOLD($section_id)
    {
        switch ($section_id) {
            case 'patient': {
                $return = array(
                    'PublicService' => array(
                        'index' => 1,
                        'primaryTest' => 'آزمون های بدو ورود',
                        'publicTest' => 'آزمون های عمومی',
                        'name_fa' => 'خدمات عمومی'
                    ),
                    'AnxietyClinic' => array(
                        'index' => 1,
                        'test' => 'آزمون ها',
                        'consultation' => 'مشاوره',
                        'presenceService' => 'خدمات حضوری',
                        'name_fa' => 'کلینیک اختلالات اضطراب'
                    ),
                    'DiagnosisClinic' => array(
                        'index' => 1,
                        'test' => 'آزمون ها',
                        'consultation' => 'مشاوره',
                        'presenceService' => 'خدمات حضوری',
                        'name_fa' => 'كلينيک تشخيص'
                    ),
                    'BehavioralEmotionalClinic' => array(
                        'index' => 1,
                        'test' => 'آزمون ها',
                        'consultation' => 'مشاوره',
                        'presenceService' => 'خدمات حضوری',
                        'name_fa' => 'كلينيك رفتاری هيجانی'
                    ),
                    'DevelopmentalClinic' => array(
                        'index' => 1,
                        'test' => 'آزمون ها',
                        'consultation' => 'مشاوره',
                        'presenceService' => 'خدمات حضوری',
                        'name_fa' => 'كلينيک تحول و تكامل'
                    ),
                    'LearningDisabilitiesClinic' => array(
                        'index' => 1,
                        'test' => 'آزمون ها',
                        'consultation' => 'مشاوره',
                        'presenceService' => 'خدمات حضوری',
                        'name_fa' => 'كلينيک مهارت های تحصيلی'
                    ),
                    'DepressionClinic' => array(
                        'index' => 1,
                        'test' => 'آزمون ها',
                        'consultation' => 'مشاوره',
                        'presenceService' => 'خدمات حضوری',
                        'name_fa' => 'كلينيک اختلالات خلقی'
                    ),
                    'FamilyClinic' => array(
                        'index' => 1,
                        'test' => 'آزمون ها',
                        'consultation' => 'مشاوره',
                        'presenceService' => 'خدمات حضوری',
                        'name_fa' => 'كلينيک خانواده'
                    ),
                    'RehabilitationClinic' => array(
                        'index' => 1,
                        'test' => 'آزمون ها',
                        'consultation' => 'مشاوره',
                        'presenceService' => 'خدمات حضوری',
                        'name_fa' => 'كلينيک اختلالات كف لگن'
                    ),
                    'IndustrialOrganizationalClinic' => array(
                        'index' => 1,
                        'test' => 'آزمون ها',
                        'consultation' => 'مشاوره',
                        'presenceService' => 'خدمات حضوری',
                        'name_fa' => 'كلينيک صنعتی سازمانی'
                    ),
                    'CreditManagement' => array(
                        'index' => 1,
                        'IncreaseCredit' => 'افزایش اعتبار',
                        'TransactionList' => 'لیست تراکنش ها',
                        'name_fa' => 'مدیریت اعتبار'
                    ),

                    'Profile' => array(
                        'index' => 1,
                        'singleMenu' => 1,
                        'name_fa' => 'مشاهده پرونده'
                    ),
                    'Signout' => array(
                        'index' => 1,
                        'singleMenu' => 1,
                        'name_fa' => 'خروج'
                    )

                );
                break;
            }

            case 'education': {
                $return = array(
                    'CourseManagement/allCourse' => array(
                        'index' => 1,
                        'singleMenu' => 1,
                        'name_fa' => 'لیست دوره ها'
                    ),
                    'CreditManagement' => array(
                        'index' => 1,
                        'IncreaseCredit' => 'افزایش اعتبار',
                        'TransactionList' => 'لیست تراکنش ها',
                        'name_fa' => 'مدیریت اعتبار'
                    ),
                    'Signout' => array(
                        'index' => 1,
                        'singleMenu' => 1,
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