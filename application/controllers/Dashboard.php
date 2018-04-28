<?php
 
class Dashboard extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Dashboard_model');
        if (!$this->session->userdata['logged_in']) {
            redirect('/');
        }
    }

    function index()
    {
        $data['event_data'] = json_encode($this->Dashboard_model->get_count_graph());
        $data['_view'] = 'dashboard';
        $this->load->view('layouts/main',$data);
    }
}
