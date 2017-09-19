<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member_model extends CI_Model {

    public function getUnivercities()
    {
        $rs = $this->db->order_by('CONVERT( `uname` USING tis620 ) ASC', false)->get('univercities');
        return $rs->result();
    }
    public function saveFacebook()
    {
        $data = array(
            'fbid' => $this->input->post('id'),
            'email' => $this->input->post('email'),
            'name' => $this->input->post('name'),
            'profile' => 'http://graph.facebook.com/'.$this->input->post('id').'/picture?type=normal',
            'token' => $this->input->post('token'),
        );
        $save = $this->db->set('ip', $this->input->ip_address())->set('create_date', 'NOW()', false)->insert('member', $data);
        if ($save) {
            $data['id'] = $this->db->insert_id();
        } else {
            $rs = $this->db->where('email', $this->input->post('email'))->get('member');
            $data['id'] = $rs->row()->id;
        }
        $this->session->set_userdata('data', $data);
    }

}
