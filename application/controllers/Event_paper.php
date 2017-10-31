<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Event_paper extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Event_paper_model');
    } 

    /*
     * Listing of event_paper
     */
    function index()
    {
        $data['event_paper'] = $this->Event_paper_model->get_all_event_paper();
        
        $data['_view'] = 'event_paper/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new event_paper
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'id_paper' => $this->input->post('id_paper'),
				'id_user' => $this->input->post('id_user'),
				'judul' => $this->input->post('judul'),
				'file_paper' => $this->input->post('file_paper'),
				'create_at' => $this->input->post('create_at'),
				'deskripsi' => $this->input->post('deskripsi'),
            );
            
            $event_paper_id = $this->Event_paper_model->add_event_paper($params);
            redirect('event_paper/index');
        }
        else
        {            
            $data['_view'] = 'event_paper/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a event_paper
     */
    function edit($)
    {   
        // check if the event_paper exists before trying to edit it
        $data['event_paper'] = $this->Event_paper_model->get_event_paper($);
        
        if(isset($data['event_paper']['']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'id_paper' => $this->input->post('id_paper'),
					'id_user' => $this->input->post('id_user'),
					'judul' => $this->input->post('judul'),
					'file_paper' => $this->input->post('file_paper'),
					'create_at' => $this->input->post('create_at'),
					'deskripsi' => $this->input->post('deskripsi'),
                );

                $this->Event_paper_model->update_event_paper($,$params);            
                redirect('event_paper/index');
            }
            else
            {
                $data['_view'] = 'event_paper/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The event_paper you are trying to edit does not exist.');
    } 

    /*
     * Deleting event_paper
     */
    function remove($)
    {
        $event_paper = $this->Event_paper_model->get_event_paper($);

        // check if the event_paper exists before trying to delete it
        if(isset($event_paper['']))
        {
            $this->Event_paper_model->delete_event_paper($);
            redirect('event_paper/index');
        }
        else
            show_error('The event_paper you are trying to delete does not exist.');
    }
    
}
