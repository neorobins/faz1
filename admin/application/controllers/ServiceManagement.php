<?php
/**
 * Created by PhpStorm.
 * User: Mohammad Amin
 * Date: 01/03/2016
 * Time: 08:08 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class ServiceManagement extends CI_Controller {

    public function index()
    {
        loadView('panel/ServiceManagement/PricingService',array(),
            array(
                'plugins/datatables/dataTables.bootstrap.css'
            ),
            array(
                'plugins/datatables/jquery.dataTables.min.js',
                'dist/js/demo.js',
                'plugins/datatables/dataTables.bootstrap.min.js'
            )
        );
    }

    public function editService($service_id=null){
        if($service_id==null)
            redirect('ServiceManagement');
        loadView('panel/ServiceManagement/EditService',array(),
            array(
            ),
            array(
            )
        );
    }


}
