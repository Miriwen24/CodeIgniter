<?php

class Grafs extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('graf_model');

        // $this->load->library('form_validation');

        $this->load->helper('string');
    }

    public function index()
    {
        $this->load->view('home_view');
    }

    public function getdata1()
    {
        $data = $this->graf_model->get_data1();

        //         //data to json

        $responce->cols[] = array(
            "id" => "",
            "label" => "Topping",
            "pattern" => "",
            "type" => "string"
        );
        $responce->cols[] = array(
            "id" => "",
            "label" => "Total",
            "pattern" => "",
            "type" => "number"
        );
        foreach($data as $cd)
        {
            $responce->rows[]["c"] = array(
                array(
                    "v" => "$cd->Priezvisko",
                    "f" => null
                ) ,
                array(
                    "v" => (int)$cd->pocet_jazd,
                    "f" => null
                )
            );
        }

        echo json_encode($responce);
    }

    function getdata2()
{
    $data = $this->graf_model->get_data2();

    //         //data to json

    $responce->cols[] = array(
        "id" => "",
        "label" => "Topping",
        "pattern" => "",
        "type" => "string"
    );
    $responce->cols[] = array(
        "id" => "",
        "label" => "Počet",
        "pattern" => "",
        "type" => "number"
    );
    foreach($data as $cd)
    {
        $responce->rows[]["c"] = array(
            array(
                "v" => "$cd->Priezvisko",
                "f" => null
            ) ,
            array(
                "v" => (int)$cd->pocet_KM,
                "f" => null
            )
        );
    }

    echo json_encode($responce);
}

    function getdata3()
    {
        $data = $this->graf_model->get_data3();

        //         //data to json

        $responce->cols[] = array(
            "id" => "",
            "label" => "Topping",
            "pattern" => "",
            "type" => "string"
        );
        $responce->cols[] = array(
            "id" => "",
            "label" => "Počet",
            "pattern" => "",
            "type" => "number"
        );
        foreach($data as $cd)
        {
            $responce->rows[]["c"] = array(
                array(
                    "v" => "$cd->ECV",
                    "f" => null
                ) ,
                array(
                    "v" => (int)$cd->pocet_KM,
                    "f" => null
                )
            );
        }

        echo json_encode($responce);
    }

    function getdata4()
    {
        $data = $this->graf_model->get_data4();

        //         //data to json

        $responce->cols[] = array(
            "id" => "",
            "label" => "Topping",
            "pattern" => "",
            "type" => "string"
        );
        $responce->cols[] = array(
            "id" => "",
            "label" => "Total",
            "pattern" => "",
            "type" => "number"
        );
        foreach($data as $cd)
        {
            $responce->rows[]["c"] = array(
                array(
                    "v" => "$cd->Typ_zmeny",
                    "f" => null
                ) ,
                array(
                    "v" => (int)$cd->pocet_zamestnancov,
                    "f" => null
                )
            );
        }

        echo json_encode($responce);
    }

}

