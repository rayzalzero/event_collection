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
        $data['event_special'] = $this->Home_model->get_all_event_special();
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

    public function event_list()
    {
        $id_user = $this->encoder->decrypt($this->session->userdata['logged_in']['id_user']);
        
        $data['event_list'] =  $this->Home_model->get_event_by_user($id_user);
        
        foreach ($data['event_list'] as $key => $value) {
            $data['event_list'][$key]['id_participant'] = $this->encoder->encrypt($data['event_list'][$key]['id_participant']);
        }
        
        $this->load->view('home/event_list', $data);
    }

    public function get_json_data(){
        $type = $this->uri->segment(3);
        $id = $this->uri->segment(4);

        header('Content-type:application/json');
        switch ($type) {
            case 'user':
                $id_user = $this->encoder->decrypt($id);
                $result = $this->Home_model->get_user_data($id_user);
                echo json_encode($result);
                break;
            
            default:
                echo json_encode([]);
                break;
        }        
    }

    public function registration_event()
    {
        $id_user = $this->encoder->decrypt($this->session->userdata['logged_in']['id_user']);
        $id_event = $this->encoder->decrypt($this->uri->segment(3));
        header('Content-type:application/json');

        $checkRegistration = $this->Home_model->check_registration_event_event($id_user);
        if ($checkRegistration) {
            $result = "Anda telah terdaftar";            
        } else {
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
                $result = "Anda gagal terdaftar";
            }
        }

        echo json_encode($result);
    }
}