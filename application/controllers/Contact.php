<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{
    // Constructor
    function __construct()
    {
        parent::__construct();
    }

    // Load contact page
    public function index()
    {
        $this->load->view('contact');
    }
}
