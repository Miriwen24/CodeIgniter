<?php
/**
 * Created by PhpStorm.
 * User: Janka
 * Date: 28.5.2017
 * Time: 11:52
 */

class Projectss extends CI_Controller {

    public function __construct() {

        parent::__construct();

        if(!$this->session->userdata('logged_in')) {

            $this->session->set_flashdata('no_access', 'Nemáte oprávnenie');

            redirect('home/index');
        }
    }

    public function index() {

        $data['projectss'] = $this->projectt_model->get_projectss();

        $data['main_view'] = "projectss/indexx";
        $this->load->view('layouts/main',$data);

    }

    public function displayy($projectt_id) {

        $data['project_data'] = $this->projectt_model->get_projectt($projectt_id);

        $data['main_view'] = "projectss/displayy";
        $this->load->view('layouts/main',$data);

    }

    public function create() {

        $this->form_validation->set_rules('Meno', 'meno', 'trim|required');
        $this->form_validation->set_rules('Priezvisko', 'priezvisko', 'trim|required');
        $this->form_validation->set_rules('Bydlisko', 'bydlisko', 'trim|required');
        $this->form_validation->set_rules('Tel_cislo', 'tel cislo', 'trim|required');



        if($this->form_validation->run() == FALSE) {

            $data['main_view'] = 'projectss/create_projectt';
            $this->load->view('layouts/main', $data);

        } else {

            $data = array(

                'projectt_user_id' => $this->session->userdata('user_id'),
                'Meno' => $this->input->post('Meno'),
                'Priezvisko' => $this->input->post('Priezvisko'),
                'Bydlisko' => $this->input->post('Bydlisko'),
                'Tel_cislo' => $this->input->post('Tel_cislo')


            );

            if($this->projectt_model->create_projectt($data)) {

                $this->session->set_flashdata('projectt_created', 'Zamestnanec bol pridaný.');
                redirect("projectss/index");

            }
        }

    }

    public function edit($project_id) {

        $this->form_validation->set_rules('Meno', 'meno', 'trim|required');
        $this->form_validation->set_rules('Priezvisko', 'priezvisko', 'trim|required');
        $this->form_validation->set_rules('Bydlisko', 'bydlisko', 'trim|required');
        $this->form_validation->set_rules('Tel_cislo', 'tel cislo', 'trim|required');


        if($this->form_validation->run() == FALSE) {

            $data['project_data'] = $this->projectt_model->get_projectss_info($project_id);

            $data['main_view'] = 'projectss/edit_projectt';
            $this->load->view('layouts/main', $data);

        } else {

            $data = array(

                'projectt_user_id' => $this->session->userdata('user_id'),
                'Meno' => $this->input->post('Meno'),
                'Priezvisko' => $this->input->post('Priezvisko'),
                'Bydlisko' => $this->input->post('Bydlisko'),
                'Tel_cislo' => $this->input->post('Tel_cislo')

            );

            if($this->projectt_model->edit_projectt($project_id, $data)) {

                $this->session->set_flashdata('projectt_updated', 'Zamestnanec bol upravený.');
                redirect("projectss/index");

            }
        }

    }

    public function delete($project_id) {

        $this->projectt_model->delete_projectt($project_id);
        $this->session->set_flashdata('projectt_deleted', 'Zamestnanec bol odstránený.');
        redirect("projectss/index");


    }



}