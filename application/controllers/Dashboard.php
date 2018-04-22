<?php
 
class Dashboard extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        if (!$this->session->userdata['logged_in']) {
            redirect('/');
        }
    }

    function index()
    {
        $data['_view'] = 'dashboard';
        $this->load->view('layouts/main',$data);
    }
}
