<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
    // Controller
    function __construct()
    {
        parent::__construct();

        // Load models, libraries and helpers
        $this->load->helper('url');

    }
    
    // Function to load about pages
    public function index()
    {
        $this->load->view('about/index');
    }

    // Function to load pivacy policy page
    public function privacy_policy()
    {
        $this->load->view('about/privacy_policy');
    }

    // Function to load return policy page
    public function return_policy()
    {
        $this->load->view('about/return_policy');
    }

    // Function to load trade in or cash page
    public function trade_in_or_cash()
    {
        $this->load->view('about/trade_in_or_cash');
    }

    // Function to load our gadget financing page
    public function gadget_financing()
    {
        $this->load->view('about/gadget_financing');
    }

    // Function to load terms and conditions page
    public function terms_and_conditions()
    {
        $this->load->view('about/terms_and_conditions');
    }

    // Function to load school anthem page
    public function school_anthem()
    {
        $this->load->view('about/school-anthem');
    }
}