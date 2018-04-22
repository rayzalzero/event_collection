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

    public function event_detail($id)
    {
        $id = $this->encoder->decrypt($id);
        $data['detail'] = $this->Home_model->get_event_event($id);
        foreach ($data['detail'] as $key => $value) {
            $data['detail']['sisa_tiket'] = (int)$data['detail']['sisa_tiket'];
            $data['detail']['jumlah_tiket'] = (int)$data['detail']['jumlah_tiket'];
        }
        
        $this->load->view('home/event_detail', $data);
    }

    public function registration_event()
    {
        $id_user = $this->encoder->decrypt($this->session->userdata['logged_in']['id_user']);
        $id_event = $this->encoder->decrypt($this->uri->segment(3));
        header('Content-type:application/json');

        $waktusekarang = date("Y-m-d H:i:s");
        $params = array(
            'id_user' => $id_user,
            'id_event' => $id_event,
            'create_at' => $waktusekarang
        );

        $result = $this->Home_model->registration_event_event($params);
        if ($result) {
            $result = "Anda berhasil terdaftar";
        } else {
            $result = "Anda berhasil terdaftar";
        }
        
        echo json_encode($result);
    }
}