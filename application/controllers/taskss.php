<?php
/**
 * Created by PhpStorm.
 * User: Janka
 * Date: 27.5.2017
 * Time: 13:23
 */

class Taskss extends CI_Controller {

    public function __construct() {

        parent::__construct();

        if(!$this->session->userdata('logged_in')) {

            $this->session->set_flashdata('no_access', 'Nemáte oprávnenie !');

            redirect('home/index');
        }
    }

    public function index() {

        $data['tasks'] = $this->taskk_model->get_taskss();



        $data['main_view'] = "taskss/index";
        $this->load->view('layouts/registration', $data);

    }

    public function display($project_id) {

        $data['project_data'] = $this->taskk_model->get_taskk($project_id);

        $data['main_view'] = "taskss/display";
        $this->load->view('layouts/main', $data);



    }

    public function create() {

        $this->form_validation->set_rules('Odkial', 'odkial', 'trim|required');
        $this->form_validation->set_rules('Kam', 'kam', 'trim|required');
        $this->form_validation->set_rules('Datum', 'datum', 'trim|required');
        $this->form_validation->set_rules('Pocet_KM', 'pocet_km', 'trim|required');
        $this->form_validation->set_rules('Cena', 'cema', 'trim|required');
        //$this->form_validation->set_rules('Pracovna_zmena_ID', 'pracovna_zmena_id', 'trim|required');



        if($this->form_validation->run() == FALSE) {

            $data['Pracovna_zmena_ID'] = $this->taskk_model->get_pracovna_zmena_ID();
            $data['main_view'] = 'taskss/create_taskk';
            $this->load->view('layouts/main', $data);

        } else {

            $data = array(

                //'task_user_id' => $this->session->userdata('user_id'),
                'Odkial' => $this->input->post('Odkial'),
                'Kam' => $this->input->post('Kam'),
                'Datum' => $this->input->post('Datum'),
                'Pocet_KM' => $this->input->post('Pocet_KM'),
                'Cena' => $this->input->post('Cena'),
                'Pracovna_zmena_ID' => $this->input->post('Pracovna_zmena_ID')


            );

            if($this->taskk_model->create_taskk($data)) {

                $this->session->set_flashdata('taskk_created', 'Jazda bola pridaná.');
                redirect("taskss/index");

            }
        }

    }
    public function edit($project_id) {

        $this->form_validation->set_rules('Odkial', 'odkial', 'trim|required');
        $this->form_validation->set_rules('Kam', 'kam', 'trim|required');
        $this->form_validation->set_rules('Datum', 'datum', 'trim|required');
        $this->form_validation->set_rules('Pocet_KM', 'pocet_km', 'trim|required');
        $this->form_validation->set_rules('Cena', 'cema', 'trim|required');
        //$this->form_validation->set_rules('Pracovna_zmena_ID', 'pracovna_zmena_id', 'trim|required');


        if($this->form_validation->run() == FALSE) {

            $data['Pracovna_zmena_ID'] = $this->taskk_model->get_pracovna_zmena_ID();
            $data['project_data'] = $this->taskk_model->get_taskss_info($project_id);

            $data['main_view'] = 'taskss/edit_taskk';
            $this->load->view('layouts/main', $data);

        } else {

            $data = array(

                //'task_user_id' => $this->session->userdata('user_id'),
                'Odkial' => $this->input->post('Odkial'),
                'Kam' => $this->input->post('Kam'),
                'Datum' => $this->input->post('Datum'),
                'Pocet_KM' => $this->input->post('Pocet_KM'),
                'Cena' => $this->input->post('Cena'),
                'Pracovna_zmena_ID' => $this->input->post('Pracovna_zmena_ID')

            );

            if($this->taskk_model->edit_taskk($project_id, $data)) {

                $this->session->set_flashdata('taskk_updated', 'Jazda bola upravená.');
                redirect("taskss/index");

            }
        }

    }


    public function delete($project_id) {

        $this->taskk_model->delete_taskk($project_id);
        $this->session->set_flashdata('taskk_deleted', 'Jazda bola odstránená.');
        redirect("taskss/index");



    }



}