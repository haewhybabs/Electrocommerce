<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cart extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function add_to_cart()
    { }

    public function cart_view()
    {
        $this->load->view('cart_view');
    }
}
