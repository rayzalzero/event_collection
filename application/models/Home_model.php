<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Home_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /*
     * Get all event_event
     */
    function get_all_event_event()
    {
        $this->db->select('id_event, name_event, lokasi, pembicara, tanggal_mulai, jumlah_tiket, deskripsi_acara, poster');
        $this->db->order_by('id_event', 'desc');
        return $this->db->get('event_event')->result_array();
    }

    function get_event_event($id_event)
    {
        return $this->db->get_where('event_event',array('id_event'=>$id_event))->row_array();
    }
}