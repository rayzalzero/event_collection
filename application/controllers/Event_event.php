<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Event_event extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Event_event_model');
        $this->load->library('session');
    } 

    /*
     * Listing of event_event
     */
    function index()
    {
        $data['event_event'] = $this->Event_event_model->get_all_event_event();
        
        $data['_view'] = 'event_event/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new event_event
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('name_event','Name Event','required');
		$this->form_validation->set_rules('lokasi','Lokasi','required');
		$this->form_validation->set_rules('pembicara','Pembicara','required');
		$this->form_validation->set_rules('tanggal_mulai','Tanggal Mulai','required');
		$this->form_validation->set_rules('durasi_hari','Durasi Hari','required');
		$this->form_validation->set_rules('jam_mulai','Jam Mulai','required');
		$this->form_validation->set_rules('jam_selesai','Jam Selesai','required');
		$this->form_validation->set_rules('jumlah_tiket','Jumlah Tiket','required');
		$this->form_validation->set_rules('deskripsi_acara','Deskripsi Acara','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'id_user' => $this->input->post('id_user'),
				'name_event' => $this->input->post('name_event'),
				'lokasi' => $this->input->post('lokasi'),
				'pembicara' => $this->input->post('pembicara'),
				'tanggal_mulai' => $this->input->post('tanggal_mulai'),
				'durasi_hari' => $this->input->post('durasi_hari'),
				'jam_mulai' => $this->input->post('jam_mulai'),
				'jam_selesai' => $this->input->post('jam_selesai'),
				'jumlah_tiket' => $this->input->post('jumlah_tiket'),
				'poster' => $this->input->post('poster'),
				'create_at' => $this->input->post('create_at'),
				'update_at' => $this->input->post('update_at'),
				'deskripsi_acara' => $this->input->post('deskripsi_acara'),
            );
            
            $event_event_id = $this->Event_event_model->add_event_event($params);
            redirect('event_event/index');
        }
        else
        {            
            $data['_view'] = 'event_event/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a event_event
     */
    function edit($id_event)
    {   
        // check if the event_event exists before trying to edit it
        $data['event_event'] = $this->Event_event_model->get_event_event($id_event);
        
        if(isset($data['event_event']['id_event']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('name_event','Name Event','required');
			$this->form_validation->set_rules('lokasi','Lokasi','required');
			$this->form_validation->set_rules('pembicara','Pembicara','required');
			$this->form_validation->set_rules('tanggal_mulai','Tanggal Mulai','required');
			$this->form_validation->set_rules('durasi_hari','Durasi Hari','required');
			$this->form_validation->set_rules('jam_mulai','Jam Mulai','required');
			$this->form_validation->set_rules('jam_selesai','Jam Selesai','required');
			$this->form_validation->set_rules('jumlah_tiket','Jumlah Tiket','required');
			$this->form_validation->set_rules('deskripsi_acara','Deskripsi Acara','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'id_user' => $this->input->post('id_user'),
					'name_event' => $this->input->post('name_event'),
					'lokasi' => $this->input->post('lokasi'),
					'pembicara' => $this->input->post('pembicara'),
					'tanggal_mulai' => $this->input->post('tanggal_mulai'),
					'durasi_hari' => $this->input->post('durasi_hari'),
					'jam_mulai' => $this->input->post('jam_mulai'),
					'jam_selesai' => $this->input->post('jam_selesai'),
					'jumlah_tiket' => $this->input->post('jumlah_tiket'),
					'poster' => $this->input->post('poster'),
					'create_at' => $this->input->post('create_at'),
					'update_at' => $this->input->post('update_at'),
					'deskripsi_acara' => $this->input->post('deskripsi_acara'),
                );

                $this->Event_event_model->update_event_event($id_event,$params);            
                redirect('event_event/index');
            }
            else
            {
                $data['_view'] = 'event_event/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The event_event you are trying to edit does not exist.');
    } 

    /*
     * Deleting event_event
     */
    function remove($id_event)
    {
        $event_event = $this->Event_event_model->get_event_event($id_event);

        // check if the event_event exists before trying to delete it
        if(isset($event_event['id_event']))
        {
            $this->Event_event_model->delete_event_event($id_event);
            redirect('event_event/index');
        }
        else
            show_error('The event_event you are trying to delete does not exist.');
    }
    
}
