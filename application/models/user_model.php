<?php
/**
 * Created by PhpStorm.
 * User: Janka
 * Date: 26.5.2017
 * Time: 14:27
 */

class User_model extends CI_Model{

    //public function get_users($user_id,$username){

    //$this->db->where([
    //'id' => $user_id,
    //'meno' => $username
    //]);

    //$query = $this->db->get('pouzivatelia');

    //return $query->result();

        //$this->db->where('ID', $user_id);

        //$query = $this->db->query("SELECT * FROM pouzivatelia");

        //return $query->num_fields();    //počet stĺpcov

        //return $query->num_rows();    //počet riadkov

        //$query = $this->db->get('pouzivatelia');

        //return $query->result();

        //$config['hostname']= "localhost";
        //$config['username']= "root";
        //$config['password']= "";
        //$config['database']= "c1jkabathova17";

        //$connection = $this->load->database($config);

    //}

    // public  function create_users($data) {

    //$this->db->insert('pouzivatelia', $data);
    //}

    //public  function update_users($data, $id) {

    //$this->db->where(['ID' => $id]);
    //$this->db->update('pouzivatelia', $data);
    //}

    //public function delete_users($id){

    //$this->db->where(['ID' => $id]);
    //$this->db->delete('pouzivatelia');
    //}

    public function create_user(){

        $options = ['cost' => 12];
        $encripted_pass = password_hash($this->input->post('heslo'), PASSWORD_BCRYPT, $options);

        $data = array(

            'krstne_meno'   => $this->input->post('krstne_meno'),
            'priezvisko'    => $this->input->post('priezvisko'),
            'email'         => $this->input->post('email'),
            'meno'          => $this->input->post('meno'),
            'heslo'         => $encripted_pass

        );

        $insert_data = $this->db->insert('pouzivatelia', $data);
        return $insert_data;



    }

     public function login_user($meno, $heslo) {

     $this->db->where('meno', $meno);
        //$this->db->where('heslo', $heslo);

     $result = $this->db->get('pouzivatelia');

        $db_password = $result->row(2)->heslo;

        if(password_verify($heslo, $db_password)) {       //máme používateľa

            return $result->row(0)->ID;

        } else {                            //nemáme používateľa

            return false;
        }

    }
}