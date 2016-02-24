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
                    'publicService' => array(
                        'index' => 1,
                        'primaryTest'=>'آزمون های بدو ورود',
                        'publicTest' =>'آزمون های عمومی',
                        'name_fa' => 'خدمات عمومی'
                    ),
                    'anxietyClinic' => array(
                        'index' => 1,
                        'test'=>'آزمون ها',
                        'consultation'=>'مشاوره',
                        'presenceService'=>'خدمات حضوری',
                        'name_fa' => 'کلینیک اختلالات اضطراب'
                    ),
                    'diagnosisClinic' => array(
                        'index' => 1,
                        'test'=>'آزمون ها',
                        'consultation'=>'مشاوره',
                        'presenceService'=>'خدمات حضوری',
                        'name_fa' => 'كلينيک تشخيص'
                    ),
                    'behavioralEmotionalClinic' => array(
                        'index' => 1,
                        'test'=>'آزمون ها',
                        'consultation'=>'مشاوره',
                        'presenceService'=>'خدمات حضوری',
                        'name_fa' => 'كلينيك رفتاری هيجانی'
                    ),
                    'developmentalClinic' => array(
                        'index' => 1,
                        'test'=>'آزمون ها',
                        'consultation'=>'مشاوره',
                        'presenceService'=>'خدمات حضوری',
                        'name_fa' => 'كلينيک تحول و تكامل'
                    ),
                    'learningDisabilitiesClinic' => array(
                        'index' => 1,
                        'test'=>'آزمون ها',
                        'consultation'=>'مشاوره',
                        'presenceService'=>'خدمات حضوری',
                        'name_fa' => 'كلينيک مهارت های تحصيلی'
                    ),
                    'depressionClinic' => array(
                        'index' => 1,
                        'test'=>'آزمون ها',
                        'consultation'=>'مشاوره',
                        'presenceService'=>'خدمات حضوری',
                        'name_fa' => 'كلينيک اختلالات خلقی'
                    ),
                    'familyClinic' => array(
                        'index' => 1,
                        'test'=>'آزمون ها',
                        'consultation'=>'مشاوره',
                        'presenceService'=>'خدمات حضوری',
                        'name_fa' => 'كلينيک خانواده'
                    ),
                    'rehabilitationClinic' => array(
                        'index' => 1,
                        'test'=>'آزمون ها',
                        'consultation'=>'مشاوره',
                        'presenceService'=>'خدمات حضوری',
                        'name_fa' => 'كلينيک اختلالات كف لگن'
                    ),
                    'industrialOrganizationalClinic' => array(
                        'index' => 1,
                        'test'=>'آزمون ها',
                        'consultation'=>'مشاوره',
                        'presenceService'=>'خدمات حضوری',
                        'name_fa' => 'كلينيک صنعتی سازمانی'
                    ),
                    'creditManagement' => array(
                        'index' => 1,
                        'increaseCredit'=>'افزایش اعتبار',
                        'transactionList'=>'لیست تراکنش ها',
                        'name_fa' => 'مدیریت اعتبار'
                    ),

                    'profile' => array(
                        'index' => 1,
                        'singleMenu'=>1,
                        'name_fa' => 'مشاهده پرونده'
                    ),
                    'signout' => array(
                        'index' => 1,
                        'singleMenu'=>1,
                        'name_fa' => 'خروج'
                    )

                );
                break;
            }

            case 'estekhare': {
                $return = array(


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