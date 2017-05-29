<?php
/**
 * Created by PhpStorm.
 * User: Janka
 * Date: 27.5.2017
 * Time: 14:04
 */

class Taskk_model extends CI_Model {


    public function get_taskk($id) {

        $this->db->where('ID', $id);
        $query = $this->db->get('jazda');


        return $query->row();
    }

    public function get_taskss() {

        $query = $this->db->get('jazda');
        return $query->result();

    }

    //public  function get_all_taskss($user_id) {

        //$this->db->where('task_user_id', $user_id);
        //$query = $this->db->get('pracovna_zmena');

        //return $query->result();


    //}

    public function create_taskk($data) {

        $insert_query = $this->db->insert('jazda', $data);
        return $insert_query;

    }

    public function edit_taskk($project_id, $data) {

        $this->db->where('ID', $project_id);
        $this->db->update('jazda', $data);

        return true;

    }

    public function delete_taskk($project_id) {

        $this->db->where('ID', $project_id);
        $this->db->delete('jazda');

        //return true;

    }

    public function get_taskss_info($project_id) {

        $this->db->where('ID', $project_id);
        $get_data = $this->db->get('jazda');

        return $get_data->row();



    }

    public function get_pracovna_zmena_ID() {

        $query = $this->db->query('SELECT ID FROM pracovna_zmena');

        return $query->result();
    }





}