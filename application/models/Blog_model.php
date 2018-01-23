<?php
class Blog_model extends DB_model
{
	protected $table = "blog";
	public function get_all_entries()
	{
		$this->db->select("user.name as admin, blog.*, category.name as category");
		$this->db->from($this->table);
		$this->db->join('user', 'user.id = blog.user_id');
		$this->db->join('blog_categories', 'blog_categories.blog_id = '.$this->table.'.id');
		$this->db->join('category', 'category.id = blog_categories.category_id');
		$query = $this->db->get();
		return $query->result();
	}
	public function get_with_id($id)
	{
		$this->db->select("user.name as admin, blog.*, category.name as category");
		$this->db->where($this->table.'.id', $id);
		$this->db->from($this->table);
		$this->db->join('user', 'user.id = blog.user_id');
		$this->db->join('blog_categories', 'blog_categories.blog_id = '.$this->table.'.id');
		$this->db->join('category', 'category.id = blog_categories.category_id');
		$query = $this->db->get();
		return $query->row();
	}
}
?>