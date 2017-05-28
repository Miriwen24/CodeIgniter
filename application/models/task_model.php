<?php
/**
 * Created by PhpStorm.
 * User: Janka
 * Date: 28.5.2017
 * Time: 19:40
 */

class Task_model extends CI_Model {

    public function get_task($task_id) {

        $this->db->where('ID', $task_id);
        $query = $this->db->get('pracovna_zmena');

        return $query->row();


    }


}