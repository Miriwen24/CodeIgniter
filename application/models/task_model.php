<?php
/**
 * Created by PhpStorm.
 * User: Janka
 * Date: 27.5.2017
 * Time: 14:04
 */

class Task_model extends CI_Model {


    public function get_task($id) {

        $this->db->where('ID', $id);
        $query = $this->db->get('pracovna_zmena');


        return $query->row();
    }

    public function get_tasks() {

        $query = $this->db->get('pracovna_zmena');
        return $query->result();

    }

    //public  function get_all_tasks($user_id) {

    //$this->db->where('task_user_id', $user_id);
    // $query = $this->db->get('pracovna_zmena');

    //return $query->result();


    //}

    public function create_task($data) {

        $insert_query = $this->db->insert('pracovna_zmena', $data);
        return $insert_query;

    }

    public function edit_task($project_id, $data) {

        $this->db->where('ID', $project_id);
        $this->db->update('pracovna_zmena', $data);

        return true;

    }

    public function delete_task($project_id) {

        $this->db->where('ID', $project_id);
        $this->db->delete('pracovna_zmena');

        //return true;

    }

    public function get_tasks_info($project_id) {

        $this->db->where('ID', $project_id);
        $get_data = $this->db->get('pracovna_zmena');

        return $get_data->row();

    }

    public function get_zamestnanec_ID() {

        $query = $this->db->query('SELECT ID FROM zamestnanec');

        return $query->result();

    }

    public function get_detaily_zmeny_ID() {

        $query = $this->db->query('SELECT ID FROM detaily_zmeny');

        return $query->result();
    }

    public function get_auto_ID() {

        $query = $this->db->query('SELECT ID FROM auto');

        return $query->result();
    }


}