<?php
defined('BASEPATH') or exit('No direct script access allowed');

class W extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->helper('url');

        $this->load->database();
    }

    public function dashboard()
    {
        $data = array(
            'title' => 'Dashboard'
        );

        $this->template->load('admin', 'XownCMS/welcome/dashboard', $data);
    }
}
