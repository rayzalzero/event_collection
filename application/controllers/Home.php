<?php

 
class Home extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');
        $this->load->library('encryption');
        $this->load->library('session');
    } 

    /*
     * Listing of event_users
     */
    function index()
    {
        $data['event_event'] = $this->Home_model->get_all_event_event();
        
        $this->load->view('home/index', $data);
    }
    public function gallery($id)
    {
        $data['detail'] = $this->Home_model->get_event_event($id);
        
        $this->load->view('home/gallery', $data);
    }
}