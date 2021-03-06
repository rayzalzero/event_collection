<?php
 
class Event_user extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Event_user_model');
        $this->load->library('form_validation');
        $this->load->library('encryption');
        $this->load->library('session');
        if (!$this->session->userdata['logged_in']) {
            redirect('/');
        }
    } 

    /*
     * Listing of event_users
     */
    function index()
    {
        $data['event_users'] = $this->Event_user_model->get_all_event_users();
        
        $data['_view'] = 'event_user/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new event_user
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('email','Email','valid_email');
		$this->form_validation->set_rules('level','Level','required');
		
		if($this->form_validation->run())     
        {   
            $waktusekarang = date("Y-m-d H:i:s");
            $params = array(
                'level' => $this->input->post('level'),
                'password'  => md5($this->input->post('password')),
                'username' => $this->input->post('username'),
				'name' => $this->input->post('name'),
				'instansi' => $this->input->post('instansi'),
                'email' => $this->input->post('email'),
                'create_at' => $waktusekarang
            );
            $event_user_id = $this->Event_user_model->add_event_user($params);
            redirect('event_user/index');
        }
        else
        {            
            $data['_view'] = 'event_user/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a event_user
     */
    function edit($id_user)
    {   
        $data['event_user'] = $this->Event_user_model->get_event_user($id_user);
        $data['event_user']['password'] = $this->encryption->decrypt($data['event_user']['password']);
        if(isset($data['event_user']['id_user']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('password','Password','required');
			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('name','Name','required');
			$this->form_validation->set_rules('email','Email','valid_email');
			$this->form_validation->set_rules('level','Level','required');
		
			if($this->form_validation->run())     
            {   
                //mencari waktu sekarang (tahun tanggal hari) (jam menit detik) 
                $waktusekarang = date("Y-m-d H:i:s");
                $params = array(
					'level' => $this->input->post('level'),
					'password' => $this->input->post('password'),
					'username' => $this->input->post('username'),
					'name' => $this->input->post('name'),
					'instansi' => $this->input->post('instansi'),
					'email' => $this->input->post('email'),
					'updated_at' => $waktusekarang,
                );
                  
                $this->Event_user_model->update_event_user($id_user,$params);            
                redirect('event_user/index');
            }
            else
            {
                $data['_view'] = 'event_user/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The event_user you are trying to edit does not exist.');
    } 

    /*
     * Deleting event_user
     */
    function remove($id_user)
    {
        $event_user = $this->Event_user_model->get_event_user($id_user);

        // check if the event_user exists before trying to delete it
        if(isset($event_user['id_user']))
        {
            $this->Event_user_model->delete_event_user($id_user);
            redirect('event_user/index');
        }
        else
            show_error('The event_user you are trying to delete does not exist.');
    }
    
}
