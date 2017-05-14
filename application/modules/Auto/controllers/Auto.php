<?php
/**
 * Created by PhpStorm.
 * User: Janka
 * Date: 14.5.2017
 * Time: 12:19
 */
class Auto extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function display_auto()
    {
        $data['page_header'] = "AUTÁ";
        $data['description'] = "Zobraziť všetky autá.";
        $data['content_view'] = 'Auto/auto_display_v';
        $this->template->call_admin_template($data);
    }

    function addAuto()
    {
        $data['page_header'] = "PRIDAŤ AUTO";
        $data['description'] = "Pridať auto do systému.";
        $data['content_view'] = 'Auto/add_auto_v';
        $this->template->call_admin_template($data);
    }

}