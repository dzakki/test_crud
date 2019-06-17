<?php 

class User_Model extends CI_Model{

	public $table = 'users';

	public function  __construct(){

		parent::__construct();
	}
    public function insert()
    {
        $data = [
            'nik'           => $this->input->post('nik'),
            'username'      => $this->input->post('username'),
            'password'      => $this->input->post('password'),
            'nama_lengkap'  => $this->input->post('nama_lengkap'),
            'kantor'        => $this->input->post('kantor'),
            'group_user'    => $this->input->post('group_user'),
            'email'         => $this->input->post('email'),
            'nama_atasan'   => $this->input->post('nama_atasan'),
            'email_atasan'  => $this->input->post('email_atasan')
        ];
        $this->db->insert($this->table, $data);
    }
    public function update($id)
    {
        $data = [
            'nik'           => $this->input->post('nik'),
            'username'      => $this->input->post('username'),
            'nama_lengkap'  => $this->input->post('nama_lengkap'),
            'kantor'        => $this->input->post('kantor'),
            'group_user'    => $this->input->post('group_user'),
            'email'         => $this->input->post('email'),
            'nama_atasan'   => $this->input->post('nama_atasan'),
            'email_atasan'  => $this->input->post('email_atasan')
        ];
        $this->db->where('id', $id);
        return $this->db->update('users', $data);
    }
	public function get($key = null, $value = null)
    {	
    	if ($key != null) {
    		$query = $this->db->get_where($this->table, array($key => $value));
    		return $query->row_array();
    	}

    	$query = $this->db->get($this->table);
    	return $query->result_array();
    }
    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }
    public function logout()
    {
        session_destroy();
        $this->db->close();
    }
}
