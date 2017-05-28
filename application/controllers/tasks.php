<?php
/**
 * Created by PhpStorm.
 * User: Janka
 * Date: 28.5.2017
 * Time: 19:40
 */

class Tasks extends CI_Controller {


    public function display($task_id) {

        $data['task'] = $this->task_model->get_task($task_id);
        $data['main_view'] = "tasks/display";

        $this->load->view('layouts/registration', $data);

    }

    public function create($project_id) {

        $this->form_validation->set_rules('ID', 'id', 'trim|required');
        $this->form_validation->set_rules('Zamestnanec_ID', 'zamestnanec_id', 'trim|required');
        $this->form_validation->set_rules('Detaily_zmeny_ID', 'detaily_zmeny_id', 'trim|required');
        $this->form_validation->set_rules('Auto_ID', 'auto_id', 'trim|required');



        if($this->form_validation->run() == FALSE) {

            $data['main_view'] = 'tasks/create_task';
            $this->load->view('layouts/main', $data);

        } else {

            $data = array(

                'task_user_id' => $this->session->userdata('user_id'),
                'ID' => $this->input->post('ID'),
                'Zamestnanec_ID' => $this->input->post('Zamestnanec_ID'),
                'Detaily_zmeny_ID' => $this->input->post('Detaily_zmeny_ID'),
                'Auto_ID' => $this->input->post('Auto_ID')


            );

            if($this->task_model->create_task($data)) {

                $this->session->set_flashdata('task_created', 'Vozidlo bolo pridané.');
                redirect("task/index");

            }
        }

    }





}