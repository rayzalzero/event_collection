<?php

class User_Authentication extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        // Load form helper library
        $this->load->helper('form');

        // Load form validation library
        $this->load->library('form_validation');

        // Load session library
        $this->load->library('session');

        // Load database
        $this->load->model('login_database');

        $this->load->library('encryption');
    }

    // Show login page
    public function index()
    {
        $this->load->view('home/index.php');
    }

    public function gallery()
    {
        $this->load->view('home/gallery.php');
    }

    public function login()
    {
        $this->load->view('/home/login');
    }
    // Show registration page
    public function user_registration_show()
    {
        $this->load->view('registration_form');
    }
    // Validate and store registration data in database
    public function new_user_registration()
    {
        // Check validation for user input in SignUp form
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('email_value', 'Email', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
        if ($this->form_validation->run() == false) {
            $this->load->view('registration_form');
        } else {
          $data = array(
            'user_name' => $this->input->post('username'),
            'user_email' => $this->input->post('email_value'),
            'user_password' => $this->input->post('password')
          );
            $result = $this->login_database->registration_insert($data);
            if ($result == true) {
                $data['message_display'] = 'Registration Successfully !';
                $this->load->view('login_form', $data);
            } else {
                $data['message_display'] = 'Username already exist!';
                $this->load->view('registration_form', $data);
            }
        }
    }

    // Check for user login process
    public function user_login_process()
    {

        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

        if ($this->form_validation->run() == false) {
            if (isset($this->session->userdata['logged_in'])) {
                //$this->load->view('admin_page');
                $this->load->view('dashboard');
            } else {
                $this->load->view('home/login');
            }
        } else {
            $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
            //'password' => $this->encryption->encrypt($this->input->post('password'))
            );
            $result = $this->login_database->login($data);
            if ($result == true) {
                $username = $this->input->post('username');
                $result = $this->login_database->read_user_information($username);
                //vsprintf($this->login_database->read_user_information($username));
                if ($result != false) {
                    $session_data = array(
                    'username' => $result[0]->username,
                    'email' => $result[0]->name,
                    'id_user' => $this->encoder->encrypt($result[0]->id_user),
                    'level' => $result[0]->level,
                    );
                    // Add user data in session
                    $this->session->set_userdata('logged_in', $session_data);
                    if ($this->session->userdata['logged_in']['level'] == 0) {
                        print_r("ini admin");
                        redirect('dashboard/');
                    }if ($this->session->userdata['logged_in']['level'] == 1) {
                        print_r("Creator");
                        redirect('dashboard/');
                    }
                    else {
                        print_r("silahkan buat halaman user");
                        redirect('/');
                    }
                }
            } else {
                $data = array(
                'error_message' => 'Invalid Username or Password'
                );
                $this->load->view('home/login', $data);
            }
        }
    }

// Logout from admin page
    public function logout()
    {
        // Removing session data
        $sess_array = array(
        'username' => ''
        );
        $this->session->unset_userdata('logged_in', $sess_array);
        $data['message_display'] = 'Successfully Logout';
        $this->load->view('/home/login', $data);
        //redirect('/');
    }
}
