<?php
/**
 * Created by PhpStorm.
 * User: Janka
 * Date: 28.5.2017
 * Time: 11:52
 */

class Projectsss extends CI_Controller {

    public function __construct() {

        parent::__construct();

        if(!$this->session->userdata('logged_in')) {

            $this->session->set_flashdata('no_access', 'Nemáte oprávnenie !');

            redirect('home/index');
        }
    }

    public function index() {

        $data['projectsss'] = $this->projecttt_model->get_projectsss();

        $data['main_view'] = "projectsss/indexxx";
        $this->load->view('layouts/registration',$data);

    }

    public function displayyy($projecttt_id) {

        $data['project_data'] = $this->projecttt_model->get_projecttt($projecttt_id);

        $data['main_view'] = "projectsss/displayyy";
        $this->load->view('layouts/main',$data);

    }

    public function create() {

        $this->form_validation->set_rules('Typ_zmeny', 'typ zmeny', 'trim|required');
        $this->form_validation->set_rules('Od', 'od', 'trim|required');
        $this->form_validation->set_rules('Do', 'do', 'trim|required');
        $this->form_validation->set_rules('Hodinova_mzda', 'hodinova mzda', 'trim|required');



        if($this->form_validation->run() == FALSE) {

            $data['main_view'] = 'projectsss/create_projecttt';
            $this->load->view('layouts/main', $data);

        } else {

            $data = array(

                //'projecttt_user_id' => $this->session->userdata('user_id'),
                'Typ_zmeny' => $this->input->post('Typ_zmeny'),
                'Od' => $this->input->post('Od'),
                'Do' => $this->input->post('Do'),
                'Hodinova_mzda' => $this->input->post('Hodinova_mzda')


            );

            if($this->projecttt_model->create_projecttt($data)) {

                $this->session->set_flashdata('projecttt_created', 'Detaily pracovnej zmeny boli pridané.');
                redirect("projectsss/index");

            }
        }

    }

    public function edit($project_id) {

        $this->form_validation->set_rules('Typ_zmeny', 'typ zmeny', 'trim|required');
        $this->form_validation->set_rules('Od', 'od', 'trim|required');
        $this->form_validation->set_rules('Do', 'do', 'trim|required');
        $this->form_validation->set_rules('Hodinova_mzda', 'hodinova mzda', 'trim|required');


        if($this->form_validation->run() == FALSE) {

            $data['project_data'] = $this->projecttt_model->get_projectsss_info($project_id);

            $data['main_view'] = 'projectsss/edit_projecttt';
            $this->load->view('layouts/main', $data);

        } else {

            $data = array(

                //'projecttt_user_id' => $this->session->userdata('user_id'),
                'Typ_zmeny' => $this->input->post('Typ_zmeny'),
                'Od' => $this->input->post('Od'),
                'Do' => $this->input->post('Do'),
                'Hodinova_mzda' => $this->input->post('Hodinova_mzda')

            );

            if($this->projecttt_model->edit_projecttt($project_id, $data)) {

                $this->session->set_flashdata('projecttt_updated', 'Detaily pracovnej zmeny boli upravené.');
                redirect("projectsss/index");

            }
        }

    }

    public function delete($project_id) {

        $this->projecttt_model->delete_projecttt($project_id);
        $this->session->set_flashdata('projecttt_deleted', 'Detaily pracovnej zmeny boli odstránené.');
        redirect("projectsss/index");


    }



}