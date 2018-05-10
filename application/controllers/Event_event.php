<?php

class Event_event extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Event_event_model');
        $this->load->library('session');
        $this->load->library('upload');
        $this->load->helper(array('form', 'url'));
        $this->load->helper('file');
        if (!$this->session->userdata['logged_in']) {
            redirect('/');
        }
    } 

    /*
     * Listing of event_event
     */
    function index()
    {
        if ($this->session->userdata['logged_in']['level'] == 0) {
            $data['event_event'] = $this->Event_event_model->get_all_event_event();
        } else {
            $data['event_event'] = $this->Event_event_model->get_all_event_event_by_creator($this->session->userdata['logged_in']['id_user']);
        } 
        
        $data['_view'] = 'event_event/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * tambah dan edit
     */
    function add()
    {   
        $config['upload_path']          = './poster/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['encrypt_name']         = TRUE;

        $this->upload->initialize($config);
        $this->load->library('upload', $config);
        
        $this->upload->do_upload('poster');
        $namafile = array('upload_data' => $this->upload->data());
        
        $params = array(
            'id_user'           => $this->encoder->decrypt($this->input->post('id_user')),
            'name_event'        => $this->input->post('name_event'),
            'lokasi'            => $this->input->post('lokasi'),
            'pembicara'         => $this->input->post('pembicara'),
            'tanggal_mulai'     => date( "Y-m-d", strtotime((strtr($this->input->post('tanggal_mulai'), '/', '-')))),
            'durasi_hari'       => $this->input->post('durasi_hari'),
            'jam_mulai'         => $this->input->post('jam_mulai'),
            'jam_selesai'       => $this->input->post('jam_selesai'),
            'jumlah_tiket'      => $this->input->post('jumlah_tiket'),
            'poster'            => $namafile['upload_data']['file_name'],
            'status'            => 0,
            'create_at'         => date('Y-m-d H:i:s'),
            'deskripsi_acara'   => $this->input->post('deskripsi_acara'),
        );

        $paramsupdate = array(
            'id_user'           => $this->encoder->decrypt($this->input->post('id_user')),
            'name_event'        => $this->input->post('name_event'),
            'lokasi'            => $this->input->post('lokasi'),
            'pembicara'         => $this->input->post('pembicara'),
            'tanggal_mulai'     => date( "Y-m-d", strtotime((strtr($this->input->post('tanggal_mulai'), '/', '-')))),
            'durasi_hari'       => $this->input->post('durasi_hari'),
            'jam_mulai'         => $this->input->post('jam_mulai'),
            'jam_selesai'       => $this->input->post('jam_selesai'),
            'jumlah_tiket'      => $this->input->post('jumlah_tiket'),
            'poster'            => $namafile['upload_data']['file_name'],
            'status'            => $this->input->post('status'),
            'update_at'         => date('Y-m-d H:i:s'),
            'deskripsi_acara'   => $this->input->post('deskripsi_acara'),
        );

        $event_check = $this->Event_event_model->get_event_event($this->input->post('id_event'));
        
        if ($event_check['id_event'] === $this->input->post('id_event')) {
            unlink($config['upload_path'].'/'.$event_check['poster']);
            
            $update = $this->Event_event_model->update_event_event($this->input->post('id_event'),$paramsupdate);
            if ($update) {
                $this->session->set_flashdata('success', 'Berhasil update data!');
            } else {
                $this->session->set_flashdata('error', 'Gagal update data!');
            }
            redirect('event_event/index');
        }else{
            $tambah = $this->Event_event_model->add_event_event($params);
            if ($tambah) {
                $this->session->set_flashdata('success', 'Berhasil tambah data!');
            } else {
                $this->session->set_flashdata('error', 'Gagal menambahkan data!');
            }
            redirect('event_event/index');
        }
    }  

    /*
     * Editing a event_event
     */
    public function edit_event_com($id) {
        $data = $this->Event_event_model->get_event_event($id);
        echo json_encode($data);
    }

     /*
     * Editing a event_event
     */
    public function tampil_peserta($id) {
        $data = $this->Event_event_model->tampil_peserta($id);
        echo json_encode($data);
    }

    /*
     * Deleting event_event
     */
    function remove($id_event)
    {
        $config['upload_path']          = './poster/';
        $event_event = $this->Event_event_model->get_event_event($id_event);

        // check if the event_event exists before trying to delete it
        if(isset($event_event['id_event']))
        {
            unlink($config['upload_path'].'/'.$event_event['poster']);
            $this->Event_event_model->delete_event_event($id_event);
            $this->session->set_flashdata('success', 'Berhasil hapus data!');
            redirect('event_event/index');
        }
        else
            show_error('The event_event you are trying to delete does not exist.');
            $this->session->set_flashdata('error', 'Gagal menghapus data!');
    }
    
}
