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
                    'PublicService' => array(
                        'index' => 1,
                        'primaryTest'=>'آزمون های بدو ورود',
                        'publicTest' =>'آزمون های عمومی',
                        'name_fa' => 'خدمات عمومی'
                    ),
                    'AnxietyClinic' => array(
                        'index' => 1,
                        'test'=>'آزمون ها',
                        'consultation'=>'مشاوره',
                        'presenceService'=>'خدمات حضوری',
                        'name_fa' => 'کلینیک اختلالات اضطراب'
                    ),
                    'DiagnosisClinic' => array(
                        'index' => 1,
                        'test'=>'آزمون ها',
                        'consultation'=>'مشاوره',
                        'presenceService'=>'خدمات حضوری',
                        'name_fa' => 'كلينيک تشخيص'
                    ),
                    'BehavioralEmotionalClinic' => array(
                        'index' => 1,
                        'test'=>'آزمون ها',
                        'consultation'=>'مشاوره',
                        'presenceService'=>'خدمات حضوری',
                        'name_fa' => 'كلينيك رفتاری هيجانی'
                    ),
                    'DevelopmentalClinic' => array(
                        'index' => 1,
                        'test'=>'آزمون ها',
                        'consultation'=>'مشاوره',
                        'presenceService'=>'خدمات حضوری',
                        'name_fa' => 'كلينيک تحول و تكامل'
                    ),
                    'LearningDisabilitiesClinic' => array(
                        'index' => 1,
                        'test'=>'آزمون ها',
                        'consultation'=>'مشاوره',
                        'presenceService'=>'خدمات حضوری',
                        'name_fa' => 'كلينيک مهارت های تحصيلی'
                    ),
                    'DepressionClinic' => array(
                        'index' => 1,
                        'test'=>'آزمون ها',
                        'consultation'=>'مشاوره',
                        'presenceService'=>'خدمات حضوری',
                        'name_fa' => 'كلينيک اختلالات خلقی'
                    ),
                    'FamilyClinic' => array(
                        'index' => 1,
                        'test'=>'آزمون ها',
                        'consultation'=>'مشاوره',
                        'presenceService'=>'خدمات حضوری',
                        'name_fa' => 'كلينيک خانواده'
                    ),
                    'RehabilitationClinic' => array(
                        'index' => 1,
                        'test'=>'آزمون ها',
                        'consultation'=>'مشاوره',
                        'presenceService'=>'خدمات حضوری',
                        'name_fa' => 'كلينيک اختلالات كف لگن'
                    ),
                    'IndustrialOrganizationalClinic' => array(
                        'index' => 1,
                        'test'=>'آزمون ها',
                        'consultation'=>'مشاوره',
                        'presenceService'=>'خدمات حضوری',
                        'name_fa' => 'كلينيک صنعتی سازمانی'
                    ),
                    'CreditManagement' => array(
                        'index' => 1,
                        'IncreaseCredit'=>'افزایش اعتبار',
                        'TransactionList'=>'لیست تراکنش ها',
                        'name_fa' => 'مدیریت اعتبار'
                    ),

                    'Profile' => array(
                        'index' => 1,
                        'singleMenu'=>1,
                        'name_fa' => 'مشاهده پرونده'
                    ),
                    'Signout' => array(
                        'index' => 1,
                        'singleMenu'=>1,
                        'name_fa' => 'خروج'
                    )

                );
                break;
            }

            case 'education':{
                $return = array(
                    'CourseManagement/allCourse' => array(
                        'index' => 1,
                        'singleMenu'=>1,
                        'name_fa' => 'لیست دوره ها'
                    ),
                    'CourseManagement/registerCourse' => array(
                        'index' => 1,
                        'singleMenu'=>1,
                        'name_fa' => 'دوره های ثبت نام شده'
                    ),
                    'CreditManagement' => array(
                        'index' => 1,
                        'IncreaseCredit'=>'افزایش اعتبار',
                        'TransactionList'=>'لیست تراکنش ها',
                        'name_fa' => 'مدیریت اعتبار'
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