<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    // Constructor
    function __construct()
    {
        parent::__construct();

        $this->load->helper(array('form', 'url'));

        $this->load->library(array('session', 'form_validation'));

        // $this->load->model('UserModel');

        $this->load->database();
    }

    // Navigate to login page - Front end
    public function index()
    {
        $this->load->view('auth/index');
    }

    // Navigate to register page - Front end
    public function sign_up()
    {
        $this->load->view('auth/register');
    }

    // Function to Log a User in
    public function login()
    {
        $this->form_validation->set_rules('email', 'Email', 'required');

        $this->form_validation->set_rules('password', 'Password', 'required');


        if ($this->form_validation->run()) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $checkUser = $this->UserModel->CheckUsers($email, $password);


            if ($checkUser) {
                $sess_array = array(
                    'firsname' => $checkUser->firstname,
                    'lastname' => $checkUser->lastname,
                    'username' => $checkUser->username,
                    'email' => $checkUser->email,

                    'id' => $checkUser->id,
                );

                $this->session->set_userdata('logged', $sess_array);
                $this->_checkUser();

                redirect(site_url('welcome/dashboard'));

            } else {
                $data = array(
                    'title' => 'Login',
                    'action' => site_url('home/welcome'),
                );

                $this->session->set_flashdata('error', 'Invalid Email or Password');

                $this->load->view('XownCMS/welcome/login', $data);


            }
        } else {
            $data = array(
                'title' => 'Login',
                'action' => site_url('home/welcome'),
            );

            $this->session->set_flashdata('error', 'Your Login details are required');

            $this->load->view('XownCMS/welcome/login', $data);
        }
    }

    // Function to log a user out
    public function logout()
    {
        $this->session->sess_destroy();

        redirect('home/welcome');
    }

    public function logout_user()
    {
        $this->session->sess_destroy();

        redirect('home');
    }


    public function _checkUser()
    {
        if ($this->session->userdata('logged') == false) {
            redirect('/');
        }

    }

    // Function to register a user
    public function register()
    {

        $this->form_validation->set_rules('firstname', 'First Name', 'trim|required|min_length[3]|max_length[12]');
        $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required|min_length[3]');
        $this->form_validation->set_rules(
            'email',
            'Email',
            'trim|required|valid_email|is_unique[tbl_user.email]',
            array(
                'required' => 'You have not provided %s.',
                'is_unique' => 'This %s already exists.'
            )

        );
        $this->form_validation->set_rules(
            'username',
            'Username',
            'required|min_length[4]|max_length[12]|is_unique[tbl_user.username]',
            array(
                'required' => 'You have not provided %s.',
                'is_unique' => 'This %s already exists.'
            )
        );
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
        $this->form_validation->set_rules('mobile', 'Your Mobile Number ', 'required');

        if ($this->form_validation->run()) {
            $data = $this->input->post();
            $data['role_id'] = 0;
            if ($this->UserModel->insert_new_user($data)) {
                $this->session->set_flashdata('message', 'Registration is successful');

                if ($this->session->userdata('payment')) {
                    redirect('shoppingcart/payment/' . $this->session->userdata('payment')['ref']);
                } else {
                    redirect(site_url('user'));

                }


            } else {
                $this->session->set_flashdata('error', 'Registration is unsuccessful');
                redirect('user');

            }
        } else {

            $this->session->set_flashdata('error', validation_errors());
            redirect('user');

        }

    }

    public function login_user()
    {
        $this->form_validation->set_rules('email_login', 'Email', 'required');

        $this->form_validation->set_rules('password_login', 'Password', 'required');


        if ($this->form_validation->run()) {
            $email = $this->input->post('email_login');
            $password = $this->input->post('password_login');
            $checkUser = $this->UserModel->CheckUsers($email, $password);


            if ($checkUser) {
                $sess_array = array(
                    'firsname' => $checkUser->firstname,
                    'lastname' => $checkUser->lastname,
                    'username' => $checkUser->username,
                    'email' => $checkUser->email,

                    'id' => $checkUser->id,
                );

                $this->session->set_userdata('logged_user', $sess_array);

                if ($this->session->userdata('payment')) {
                    redirect('shoppingcart/payment/' . $this->session->userdata('payment')['ref']);
                } else {
                    redirect(site_url('home'));

                }




            } else {


                $this->session->set_flashdata('error', 'Invalid Email or Password');

                redirect('user');


            }
        } else {

            $this->session->set_flashdata('error', 'Your Login details are required');

            redirect('user');

        }
    }

}