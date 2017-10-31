<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Event_event_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get event_event by id_event
     */
    function get_event_event($id_event)
    {
        return $this->db->get_where('event_event',array('id_event'=>$id_event))->row_array();
    }
        
    /*
     * Get all event_event
     */
    function get_all_event_event()
    {
        $this->db->select('nama_event, lokasi, pembicara, tanggal_mulai');
        $this->db->order_by('id_event', 'desc');
        return $this->db->get('event_event')->result_array();
    }
        
    /*
     * function to add new event_event
     */
    function add_event_event($params)
    {
        $this->db->insert('event_event',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update event_event
     */
    function update_event_event($id_event,$params)
    {
        $this->db->where('id_event',$id_event);
        return $this->db->update('event_event',$params);
    }
    
    /*
     * function to delete event_event
     */
    function delete_event_event($id_event)
    {
        return $this->db->delete('event_event',array('id_event'=>$id_event));
    }
}
