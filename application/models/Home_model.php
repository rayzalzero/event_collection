<?php
 
class Home_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /*
     * mengambil semua event yang aktif
     */
    function get_all_event_event()
    {
        $this->db->select('id_event, name_event, lokasi, pembicara, tanggal_mulai, jumlah_tiket, deskripsi_acara, poster');
        $this->db->order_by('id_event', 'desc');
        $result = $this->db->get('event_event')->result_array();
        foreach ($result as $key => $value) {
            $result[$key]['id_event'] = $this->encoder->encrypt($value['id_event']);
        }
        return $result;
    }

    /*
     * mengambil data event special
     */
    function get_all_event_special()
    {
        $this->db->select('id_event, name_event, lokasi, pembicara, tanggal_mulai, jumlah_tiket, deskripsi_acara, poster');
        $this->db->order_by('id_event', 'desc');
        $this->db->limit(5);
        $result = $this->db->get('event_event')->result_array();
        foreach ($result as $key => $value) {
            $result[$key]['id_event'] = $this->encoder->encrypt($value['id_event']);
        }
        return $result;
    }

    /*
     * mengambil data pengguna untuk didaftarkan
     */
    function get_user_data($id)
    {
        $this->db->where('id_user', $id);
        $result = $this->db->get('event_users')->row();
        $result->id_user = $this->encoder->encrypt($result->id_user);

        return $result;
    }

    function get_event_event($id_event)
    {
        $this->db->select('a.*, a.jumlah_tiket - COUNT(b.id_event) AS sisa_tiket');
        $this->db->from('event_event a');
        $this->db->join('event_participant b', 'b.id_event = a.id_event');
        $this->db->where(array('a.id_event'=>$id_event));
        $result = $this->db->get()->row_array();
        $result['id_event'] = $this->encoder->encrypt($result['id_event']);
        
        return $result;
    }
    
    function check_registration_event_event($id)
    {
        $this->db->from('event_participant');
        $this->db->where('id_user', $id);
        return $this->db->get()->row();
    }

    function get_event_by_user($id)
    {
        $this->db->from('event_participant a');
        $this->db->join('event_event b', 'b.id_event = a.id_event', 'left'); 
        $this->db->join('event_users c', 'c.id_user = a.id_user', 'left');        
        $this->db->where('a.id_user', $id);
        return $this->db->get()->result_array();
    }

    function registration_event_event($params)
    {
        $this->db->insert('event_participant',$params);
        return $this->db->insert_id();
    }

}
