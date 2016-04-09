<?php
/**
 * Created by PhpStorm.
 * User: Hamed
 * Date: 4/9/2016
 * Time: 10:19 PM
 */

class DBSheetInstanceItem extends CI_Model
{
    public function insertItem($sheet_instance_id, $sheet_item_id, $sub_item_1, $sub_item_2, $value)
    {
        return $this->db->insert('sheet_instance_item',
            array(
                'sheet_instance_id' => $sheet_instance_id,
                'sheet_item_id' => $sheet_item_id,
                'sub_item_1' => $sub_item_1,
                'sub_item_2' => $sub_item_2,
                'value' => $value
            )
        );
    }
}