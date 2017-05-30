<?php
/**
 * Created by PhpStorm.
 * User: Janka
 * Date: 26.5.2017
 * Time: 14:23
 */

class Users extends CI_Controller {

    //public function show($user_id){


    //$data['results'] =  $this->user_model->get_users($user_id, 'dominik');

    //$this->load->view('user_view',$data);

        //$this->load->model('user_model');

        //foreach ($result as $object) {
           // echo $object->meno."<br>";
        //}



    // public function insert() {

    //$username = "ambi";
    //$password = "secret";

    //$this->user_model->create_users([

    //'meno' => $username,
    //'heslo' => $password

    //]);
//}

    //public function update() {

    //$id = 4;

    //$username = "ambibambi";
    //$password = "69";

    //$this->user_model->update_users([

    //'meno' => $username,
    //'heslo' => $password

    //], $id);
    // }

    //public function delete(){

    // $id = 3;
    //$this->user_model->delete_users($id);

        // }

    public function register() {

        $this->form_validation->set_rules('krstne_meno', 'Krstné meno', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('priezvisko', 'Priezvisko', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('email', 'E-mail', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('meno', 'Meno', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('heslo', 'Heslo', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('confirm_heslo', 'Potvrď heslo', 'trim|required|min_length[3]|matches[heslo]');

        if($this->form_validation->run() == FALSE) {

            $data['main_view'] = 'users/register_view';
            $this->load->view('layouts/registration', $data);

        } else {

            if($this->user_model->create_user()) {


            $this->session->set_flashdata('user_registered', 'Boli ste úspešne zaregistrovaný.');
            redirect('home/index');

            } else {

            }
        }

    }

    public function login(){

        $this->form_validation->set_rules('meno', 'Meno', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('heslo', 'Heslo', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('confirm_heslo', 'Potvrď heslo', 'trim|required|min_length[3]|matches[heslo]');


        if($this->form_validation->run() == FALSE) {

            $data = array (

              'errors' => validation_errors()
            );

            $this->session->set_flashdata($data);
            redirect('home');

        } else {

            $meno = $this->input->post('meno');
            $heslo = $this->input->post('heslo');

            $user_id = $this->user_model->login_user($meno,$heslo);

            if ($user_id) {

                $user_data = array(

                    'user_id' => $user_id,
                    'meno' => $meno,
                    'logged_in' => true

                );

                $this->session->set_userdata($user_data);
                $this->session->set_flashdata('login_success', 'Ste prihlásený.');

                //$data['main_view'] = "admin_view";

                //$this->load->view('layouts/main',$data);

                redirect('home/index');

            } else {

                $this->session->set_flashdata('login_failed', 'Nie ste prihlásený.');
                redirect('home/index');
            }


        }

        //$this->input->post('meno');

    }

    public function logout() {

        $this->session->sess_destroy();
        redirect('home/index');
    }
}