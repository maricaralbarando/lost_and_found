<?php
class Users_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_users($slug = FALSE)
    {
    	if ($slug === FALSE)
    	{
    		$query = $this->db->get('users');
    		return $query->result_array();
    	}

    	$query = $this->db->get_where('users', array('slug' => $slug));
    	return $query->row_array();
    }

    public function set_user()
    {
       $this->load->helper('url');
        $slug = url_title($this->input->post('username'),'dash', TRUE);
        echo $slug;
        $data = array(
        		'username' => $this->input->post('username'),
        		'userid' => $this->input->post('userid'),
        		'password' => $this->input->post('password'),
        		'firstname' => $this->input->post('firstname'),
        		'lastname' => $this->input->post('lastname'),
        		'role' => 'user',
        		'email' => $this->input->post('email'),
        		'is_blocked' => 0,
        		'slug' => $slug,
        	);
//        echo $this->db->_error_message();
        return $this->db->insert('users', $data);
//        return($this->db->affected_rows() > 0)
    }
}