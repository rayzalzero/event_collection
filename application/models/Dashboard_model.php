<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Dashboard_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
    * mendapatkan data perhitungan peserta terbanyak 
    */
    function get_count_graph()
    {
        $this->db->select('a.name_event as nama , COUNT( b.id_event) as data');
        $this->db->from('event_event a');
        $this->db->join('event_participant b', 'b.id_event = a.id_event');
        $this->db->group_by('a.id_event');
        $result = $this->db->get()->result_array();
        return $result;
    }
}
