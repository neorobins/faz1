<?php
/**
 * Created by PhpStorm.
 * User: Mohammad Amin
 * Date: 01/03/2016
 * Time: 08:08 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class UserManagement extends CI_Controller {

    public function userList()
    {
        loadView('panel/UserManagement/UserList',array(),
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


}
