<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->helper('url');

        $this->load->database();

        // $this->load->model('ProductModel');
    }

    public function index()
    {
        $comp = 1;
        $phone = 2;
        $elect = 3;
        $limit1 = 10;
        $limit2 = 5;
        $home = 4;
        $network = 5;
        $office = 6;
        $data['computerAccessories'] = $this->ProductModel->CATopEightProducts($comp, $limit1);
        $data['phone'] = $this->ProductModel->CATopEightProducts($phone, $limit1);
        $data['elect'] = $this->ProductModel->CATopEightProducts($elect, $limit1);

        $data['home'] = $this->ProductModel->CATopEightProducts($home, $limit2);
        $data['network'] = $this->ProductModel->CATopEightProducts($network, $limit2);
        $data['office'] = $this->ProductModel->CATopEightProducts($office, $limit2);

        $data['random'] = $this->ProductModel->get_random_product($limit2);



        $this->load->view('index', $data);
    }

    public function welcome()
    {
        $this->load->view('XownCMS/welcome/login');
    }

    // Function to load contact page
    public function contact()
    {
        // $page_title = "About Us";

        $this->load->view('contact');
    }

    // Dashboard
    public function dashboard()
    {
        // Ensure the session is set before login
        if (isset($this->session->userdata['logged'])) {
            $this->load->view('XownCMS/welcome/dashboard');
        } else {
            redirect('/');
        }
    }
}