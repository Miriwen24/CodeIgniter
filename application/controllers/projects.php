<?php
/**
 * Created by PhpStorm.
 * User: Janka
 * Date: 27.5.2017
 * Time: 13:23
 */

class Projects extends CI_Controller {

    public function __construct() {

    parent::__construct();

        if(!$this->session->userdata('logged_in')) {

            $this->session->set_flashdata('no_access', 'Nemáte oprávnenie');

            redirect('home/index');
        }
    }

    public function index() {

         $data['projects'] = $this->project_model->get_projects();



         $data['main_view'] = "projects/index";
         $this->load->view('layouts/main', $data);

    }

    public function display($project_id) {

        $data['project_data'] = $this->project_model->get_project($project_id);
        $data['main_view'] = "projects/display";
        $this->load->view('layouts/main', $data);



    }

    public function create() {

        $this->form_validation->set_rules('Znacka', 'znacka', 'trim|required');
        $this->form_validation->set_rules('Model', 'model', 'trim|required');
        $this->form_validation->set_rules('Rok_vyroby', 'rok vyroby', 'trim|required');
        $this->form_validation->set_rules('ECV', 'ecv', 'trim|required');
        $this->form_validation->set_rules('Pocet_KM', 'pocet km', 'trim|required');


        if($this->form_validation->run() == FALSE) {

            $data['main_view'] = 'projects/create_project';
            $this->load->view('layouts/main', $data);

        } else {

            $data = array(

                'project_user_id' => $this->session->userdata('user_id'),
                'Znacka' => $this->input->post('Znacka'),
                'Model' => $this->input->post('Model'),
                'Rok_vyroby' => $this->input->post('Rok_vyroby'),
                'ECV' => $this->input->post('ECV'),
                'Pocet_KM' => $this->input->post('Pocet_KM')

            );

            if($this->project_model->create_project($data)) {

                $this->session->set_flashdata('project_created', 'Vozidlo bolo pridané.');
                redirect("projects/index");

            }
        }

    }
    public function edit($project_id) {

        $this->form_validation->set_rules('Znacka', 'znacka', 'trim|required');
        $this->form_validation->set_rules('Model', 'model', 'trim|required');
        $this->form_validation->set_rules('Rok_vyroby', 'rok vyroby', 'trim|required');
        $this->form_validation->set_rules('ECV', 'ecv', 'trim|required');
        $this->form_validation->set_rules('Pocet_KM', 'pocet km', 'trim|required');


        if($this->form_validation->run() == FALSE) {

            $data['project_data'] = $this->project_model->get_projects_info($project_id);

            $data['main_view'] = 'projects/edit_project';
            $this->load->view('layouts/main', $data);

        } else {

            $data = array(

                'project_user_id' => $this->session->userdata('user_id'),
                'Znacka' => $this->input->post('Znacka'),
                'Model' => $this->input->post('Model'),
                'Rok_vyroby' => $this->input->post('Rok_vyroby'),
                'ECV' => $this->input->post('ECV'),
                'Pocet_KM' => $this->input->post('Pocet_KM')

            );

            if($this->project_model->edit_project($project_id, $data)) {

                $this->session->set_flashdata('project_updated', 'Vozidlo bolo upravené.');
                redirect("projects/index");

            }
        }

    }


    public function delete($project_id) {

        $this->project_model->delete_project($project_id);
        $this->session->set_flashdata('project_deleted', 'Vozidlo bolo odstránené.');
        redirect("projects/index");




    }



}