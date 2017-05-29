<?php
/**
 * Created by PhpStorm.
 * User: Janka
 * Date: 27.5.2017
 * Time: 14:04
 */

class Project_model extends CI_Model {


    public function get_project($id) {

        $this->db->where('ID', $id);
        $query = $this->db->get('auto');


        return $query->row();
    }

    public function get_projects() {

        $query = $this->db->get('auto');
        return $query->result();

    }

    public  function get_all_projects($user_id) {

        $this->db->where('project_user_id', $user_id);
        $query = $this->db->get('auto');

        return $query->result();


    }

    public function create_project($data) {

        $insert_query = $this->db->insert('auto', $data);
        return $insert_query;

    }

    public function edit_project($project_id, $data) {

        $this->db->where('ID', $project_id);
        $this->db->update('auto', $data);

        return true;

    }

    public function delete_project($project_id) {

        $this->db->where('ID', $project_id);
        $this->db->delete('auto');

        //return true;

    }

    public function get_projects_info($project_id) {

        $this->db->where('ID', $project_id);
        $get_data = $this->db->get('auto');

        return $get_data->row();



    }

//$this->db->select('*');
//$this->db->from('Album a');
//$this->db->join('Category b', 'b.cat_id=a.cat_id', 'left');
//$this->db->join('Soundtrack c', 'c.album_id=a.album_id', 'left');
//$this->db->where('c.album_id',$id);




}