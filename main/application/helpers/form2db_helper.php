<?php
/**
 * Created by PhpStorm.
 * User: Hamed
 * Date: 4/9/2016
 * Time: 9:28 PM
 */

function insertResponses($sheet_instance_id, $input)
{
    $ci = get_instance();
    $ci->load->model('DBSheetInstanceItem');

    $success = true;

    foreach ($input as $key => $value) {
        $keys = explode('-', $key);
        if (isset($value) && trim($value) != '') {
            if(!is_numeric($value) || (is_numeric($value) && intval($value) != 0))
            {
                //insert input into db
                $s = $ci->DBSheetInstanceItem->insertItem($sheet_instance_id, intval($keys[0]), isset($keys[1]) ? intval($keys[1]) : 0, isset($keys[2]) ? intval($keys[2]) : 0, is_numeric($value) ? intval($value) : $value);
                if (!$s) $success = false;
            }
        }
    }

    return $success;
}