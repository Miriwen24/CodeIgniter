<?php
/**
 * Created by PhpStorm.
 * User: Janka
 * Date: 28.5.2017
 * Time: 12:16
 */

class Projectt_model extends CI_Model {


    public function get_projectt($id) {

        $this->db->where('ID', $id);
        $query = $this->db->get('zamestnanec');


        return $query->row();

    }


    public function get_projectss() {

        $query = $this->db->get('zamestnanec');
        return $query->result();

    }

    //public  function get_all_projectss($user_id) {

    // $this->db->where('projectt_user_id', $user_id);
    // $query = $this->db->get('zamestnanec');

    //  return $query->result();


    // }

    public function create_projectt($data) {

        $insert_query = $this->db->insert('zamestnanec', $data);
        return $insert_query;

    }

    public function edit_projectt($project_id, $data) {

        $this->db->where('ID', $project_id);
        $this->db->update('zamestnanec', $data);

        return true;

    }

    public function delete_projectt($project_id) {

        $this->db->where('ID', $project_id);
        $this->db->delete('zamestnanec');

        //return true;

    }

    public function get_projectss_info($project_id) {

        $this->db->where('ID', $project_id);
        $get_data = $this->db->get('zamestnanec');

        return $get_data->row();



    }




}