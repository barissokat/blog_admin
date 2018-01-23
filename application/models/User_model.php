<?php
class User_model extends DB_model
{
	protected $table = "user";
	public function is_admin($email, $password)
	{
		$query = $this->db->query("SELECT id, name, email FROM user WHERE email = '".$email."' AND password = '".sha1(md5($password))."' LIMIT 1");
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}
	public function get_password_hash($id)
	{
		$this->db->select("password");
		$this->db->where('id', $id);
		$this->db->from($this->table);
		$query = $this->db->get();
		return $query->row();
	}
	public function check_email_exists($email)
	{
		$this->db->select("id, email");
		$this->db->where('email', $email);
		$this->db->from($this->table);
		$query = $this->db->get();
		if ($query) {
			return $query->row();
		} else {
			return FALSE;
		}
	}
}
?>