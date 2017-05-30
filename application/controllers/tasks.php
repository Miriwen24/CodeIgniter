<?php
/**
 * Created by PhpStorm.
 * User: Janka
 * Date: 27.5.2017
 * Time: 13:23
 */

class Tasks extends CI_Controller {

    public function __construct() {

        parent::__construct();

        if(!$this->session->userdata('logged_in')) {

            $this->session->set_flashdata('no_access', 'Nemáte oprávnenie !');

            redirect('home/index');
        }
    }

    public function index() {

        $data['tasks'] = $this->task_model->get_tasks();



        $data['main_view'] = "tasks/index";
        $this->load->view('layouts/registration', $data);

    }

    public function display($project_id) {

        $data['project_data'] = $this->task_model->get_task($project_id);

        $data['main_view'] = "tasks/display";
        $this->load->view('layouts/alt', $data);



    }

    public function create() {

        //$this->form_validation->set_rules('Zamestnanec_ID', 'zamestnanec_id', 'trim|required');
        //$this->form_validation->set_rules('Detaily_zmeny_ID', 'detaily_zmeny_id', 'trim|required');
        $this->form_validation->set_rules('Auto_ID', 'auto_id', 'trim|required');



        if($this->form_validation->run() == FALSE) {

            $data['Zamestnanec_ID'] = $this->task_model->get_zamestnanec_ID();
            $data['Detaily_zmeny_ID'] = $this->task_model->get_detaily_zmeny_ID();
            $data['Auto_ID'] = $this->task_model->get_auto_ID();

            $data['main_view'] = 'tasks/create_task';
            $this->load->view('layouts/niam', $data);

        } else {

            $data = array(

                //'task_user_id' => $this->session->userdata('user_id'),
                'Zamestnanec_ID' => $this->input->post('Zamestnanec_ID'),
                'Detaily_zmeny_ID' => $this->input->post('Detaily_zmeny_ID'),
                'Auto_ID' => $this->input->post('Auto_ID')


            );

            if($this->task_model->create_task($data)) {

                $this->session->set_flashdata('task_created', 'Pracovná zmena bola pridaná.');
                redirect("tasks/index");

            }
        }

    }
    public function edit($project_id) {

        //$this->form_validation->set_rules('Zamestnanec_ID', 'zamestnanec_id', 'trim|required');
        //$this->form_validation->set_rules('Detaily_zmeny_ID', 'detaily_zmeny_id', 'trim|required');
        $this->form_validation->set_rules('Auto_ID', 'auto_id', 'trim|required');


        if($this->form_validation->run() == FALSE) {

            $data['Zamestnanec_ID'] = $this->task_model->get_zamestnanec_ID();
            $data['Detaily_zmeny_ID'] = $this->task_model->get_detaily_zmeny_ID();
            $data['Auto_ID'] = $this->task_model->get_auto_ID();
            $data['project_data'] = $this->task_model->get_tasks_info($project_id);

            $data['main_view'] = 'tasks/edit_task';
            $this->load->view('layouts/niam', $data);

        } else {

            $data = array(

                //'task_user_id' => $this->session->userdata('user_id'),
                'Zamestnanec_ID' => $this->input->post('Zamestnanec_ID'),
                'Detaily_zmeny_ID' => $this->input->post('Detaily_zmeny_ID'),
                'Auto_ID' => $this->input->post('Auto_ID')

            );

            if($this->task_model->edit_task($project_id, $data)) {

                $this->session->set_flashdata('task_updated', 'Pracovná zmena bola upravená.');
                redirect("tasks/index");

            }
        }

    }


    public function delete($project_id) {

        $this->task_model->delete_task($project_id);
        $this->session->set_flashdata('task_deleted', 'Pracovná zmena bola odstránená.');
        redirect("tasks/index");




    }



}