<?php

/**
 * Created by PhpStorm.
 * User: Mohammad Amin
 * Date: 15/10/2015
 * Time: 12:39 PM
 */
class MY_Controller extends CI_Controller
{
// user information
    public $username = NULL;

    public $name = NULL;

    public $section_id = NULL;

    public $section_name_fa = NULL;


    function __construct()
    {
        parent::__construct();
//        import
        $this->load->helper('cookie');
        $this->load->library('session');

        /*
         *
         * Check session
         */


//        2 halat darim : agar user daghighan ba'ad az login dar hal vared shodan be system mibashad ,
//        4 ta var bala bayad null bashand va baraye avvalin bar meghdar dehi mishavand
//        hala agar in ha ghablan meghdar dehi shode'and pas faghat meghdar


//      get session data to variables
        if ($this->name != NULL && $this->username != NULL && $this->section_id != NULL && $this->section_name_fa != NULL) {
            if (!$this->checkAndAdd($this->username, $this->section_id, $this->name, FALSE)) {
                $this->setAddress();
                redirect('login');
            }
        } else {
            $se_username = $this->session->userdata('username');
            $se_name = $this->session->userdata('name');
            $se_section_id = $this->session->userdata('section_id');

//      validation user information in session

            if ($se_username != NULL && $se_name != NULL && $se_section_id != NULL) {
                $this->load->helper('identification');
                if ($this->checkAndAdd($se_username, $se_section_id, $se_name) === FALSE) {
                    $this->setAddress();
                    redirect('login');
                }
            } else {
                /*
                 * check is set cookie or not
                 */
                $this->load->library('encrypt');
                $coo = $this->encrypt->decode($this->input->cookie('feqhi_login_panel', TRUE), ENC_KEY);
                if ($coo != NULL) {
                    $coo = explode('_', $coo);
                    if ($this->checkAndAdd($coo[0], $coo[3], $coo[2]) === TRUE) {
                        $this->load->helper('identification');
                        setAuth(array('name' => $this->name, 'username' => $this->username, 'section_id' => $this->section_id, 'remember' => 0));

                    } else {
                        $this->setAddress();
                        redirect('login');
                    }
                } else {
                    $this->setAddress();
                    redirect('login');
                }
            }
        }

        if ($pa = $this->getAddress()) {
            $this->setAddress(TRUE);
            redirect($pa);
        }

//        check user access

        $this->load->model('userlevel');
        if (!$this->userlevel->isUserAccess($this->section_id, $this->router->fetch_class(), $this->router->fetch_method())) {
            redirect('accessdenied');
        }


    }

    private function checkAndAdd($username, $section_id, $name, $addToLocal = TRUE)
    {
        $this->load->helper('identification');
        if (isUserValidByDetail($username, $section_id) == TRUE) {
            if ($addToLocal) {
                $this->username = $username;
                $this->name = $name;
                $this->section_id = $section_id;

//                get section name

                $this->load->model('dbsection');
                $this->section_name_fa = $this->dbsection->getSectionName_Fa($this->section_id)[0]['section_name_fa'];
            }
            return TRUE;
        } else {
            return FALSE;
        }
    }

//    when username or password is not valid , url save
    private function getAddress()
    {
        return $this->session->userdata('savedURL');
    }

    private function setAddress($setNull = FALSE)
    {

        if ($setNull == FALSE) {
            $this->session->set_userdata(
                array('savedURL' => base_url() . $this->router->fetch_class() . '/' . $this->router->fetch_method())
            );
        } else {
            $this->session->set_userdata(
                array('savedURL' => NULL)
            );
        }
    }

    protected function getSearchMode(){
        return $this->session->userdata('search_mode');
    }

    protected function setSearchMode($search_mode){
        $this->session->set_userdata(
            array('search_mode' => $search_mode)
        );
    }
}

?>