<?php
/**
 * Created by PhpStorm.
 * User: Janka
 * Date: 28.5.2017
 * Time: 12:16
 */

class Projecttt_model extends CI_Model {


    public function get_projecttt($id) {

        $this->db->where('ID', $id);
        $query = $this->db->get('detaily_zmeny');


        return $query->row();

    }


    public function get_projectsss() {

        $query = $this->db->get('detaily_zmeny');
        return $query->result();

    }

    //public  function get_all_projectsss($user_id) {

    //$this->db->where('projecttt_user_id', $user_id);
    // $query = $this->db->get('detaily_zmeny');

    //return $query->result();


    //}

    public function create_projecttt($data) {

        $insert_query = $this->db->insert('detaily_zmeny', $data);
        return $insert_query;

    }

    public function edit_projecttt($project_id, $data) {

        $this->db->where('ID', $project_id);
        $this->db->update('detaily_zmeny', $data);

        return true;

    }

    public function delete_projecttt($project_id) {

        $this->db->where('ID', $project_id);
        $this->db->delete('detaily_zmeny');

        //return true;

    }

    public function get_projectsss_info($project_id) {

        $this->db->where('ID', $project_id);
        $get_data = $this->db->get('detaily_zmeny');

        return $get_data->row();



    }




}