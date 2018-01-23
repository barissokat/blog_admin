<?php
class BlogCategories_model extends DB_model
{
	protected $table = "blog_categories";
	public function update_blog($id, $data)
	{
		$this->db->where('blog_id', $id);
		$this->db->update($this->table, $data);
	}
	public function delete_blog($id)
	{
		$this->db->where('blog_id', $id);
		$this->db->delete($this->table);
	}
}
?>