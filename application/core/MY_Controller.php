<?php

/**
 * Created by PhpStorm.
 * User: Janka
 * Date: 13.5.2017
 * Time: 23:30
 */
class MY_Controller extends MX_Controller
{
    function __construct()
    {
        parent:: __construct();
        $this->load->module('Template');
    }

    function home_run()
    {
        $this->template->call_admin_template();
    }
}