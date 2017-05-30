<?php
/**
 * Created by PhpStorm.
 * User: Janka
 * Date: 26.5.2017
 * Time: 13:24
 */

class Home extends CI_Controller
{

    public function index()
    {


        if ($this->session->userdata('logged_in')) {



            $data['main_view'] = "home_view";
            $this->load->view('layouts/niam', $data);
            //$user_id = $this->session->userdata('user_id');
            //$data['projects'] = $this->project_model->get_all_projects($user_id);
            //$data['projectss'] = $this->projectt_model->get_all_projectss($user_id);

            } else {
            $data['main_view'] = "home_view";

            $this->load->view('layouts/main', $data);

        }

    }
}