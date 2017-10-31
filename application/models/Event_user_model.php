<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Event_user_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get event_user by id_user
     */
    function get_event_user($id_user)
    {
        // $data = $this->db->get_where('event_users',array('id_user'=>$id_user))->row_array();
        // $encok = $data['password'];
        // $ciphertext = $this->encryption->decrypt($encok);
        // print_r($ciphertext);
        // echo $this->encryption->decrypt($ciphertext);
        return $this->db->get_where('event_users',array('id_user'=>$id_user))->row_array();
    }
        
    /*
     * Get all event_users
     */
    function get_all_event_users()
    {
        $this->db->select('id_user, username, name, instansi, email');
        $this->db->order_by('id_user', 'desc');
        return $this->db->get('event_users')->result_array();
    }
        
    /*
     * function to add new event_user
     */
    function add_event_user($params)
    {
        $this->db->insert('event_users',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update event_user
     */
    function update_event_user($id_user,$params)
    {
        print_r($params);
        $this->db->where('id_user',$id_user);
        return $this->db->update('event_users',$params);
    }
    
    /*
     * function to delete event_user
     */
    function delete_event_user($id_user)
    {
        return $this->db->delete('event_users',array('id_user'=>$id_user));
    }
}