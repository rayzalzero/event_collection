<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Event_paper_riview extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Event_paper_riview_model');
    } 

    /*
     * Listing of event_paper_riview
     */
    function index()
    {
        $data['event_paper_riview'] = $this->Event_paper_riview_model->get_all_event_paper_riview();
        
        $data['_view'] = 'event_paper_riview/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new event_paper_riview
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'id_user' => $this->input->post('id_user'),
				'status' => $this->input->post('status'),
				'create_at' => $this->input->post('create_at'),
				'komentar' => $this->input->post('komentar'),
            );
            
            $event_paper_riview_id = $this->Event_paper_riview_model->add_event_paper_riview($params);
            redirect('event_paper_riview/index');
        }
        else
        {            
            $data['_view'] = 'event_paper_riview/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a event_paper_riview
     */
    function edit($id_paper)
    {   
        // check if the event_paper_riview exists before trying to edit it
        $data['event_paper_riview'] = $this->Event_paper_riview_model->get_event_paper_riview($id_paper);
        
        if(isset($data['event_paper_riview']['id_paper']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'id_user' => $this->input->post('id_user'),
					'status' => $this->input->post('status'),
					'create_at' => $this->input->post('create_at'),
					'komentar' => $this->input->post('komentar'),
                );

                $this->Event_paper_riview_model->update_event_paper_riview($id_paper,$params);            
                redirect('event_paper_riview/index');
            }
            else
            {
                $data['_view'] = 'event_paper_riview/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The event_paper_riview you are trying to edit does not exist.');
    } 

    /*
     * Deleting event_paper_riview
     */
    function remove($id_paper)
    {
        $event_paper_riview = $this->Event_paper_riview_model->get_event_paper_riview($id_paper);

        // check if the event_paper_riview exists before trying to delete it
        if(isset($event_paper_riview['id_paper']))
        {
            $this->Event_paper_riview_model->delete_event_paper_riview($id_paper);
            redirect('event_paper_riview/index');
        }
        else
            show_error('The event_paper_riview you are trying to delete does not exist.');
    }
    
}