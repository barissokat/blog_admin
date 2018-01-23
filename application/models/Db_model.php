<?php
class DB_model extends CI_Model
{
	protected $table;
	function __construct()
	{
		parent::__construct();
	}
	public function get_all_entries()
	{
		$this->db->select("*");
		$this->db->from($this->table);
		$query = $this->db->get();
		return $query->result();
	}
	public function get_with_id($id)
	{
		$this->db->select("*");
		$this->db->where('id', $id);
		$this->db->from($this->table);
		$query = $this->db->get();
		return $query->row();
	}
	public function create($data)
	{
		$this->db->insert($this->table, $data);
		$id = $this->db->insert_id();
		return $id;
	}
	public function update($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update($this->table, $data);
	}
	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete($this->table);
	}
}
?>