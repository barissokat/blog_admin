<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Blog extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
  }
  function index()
  {  
    if ($this->session->admin) {
      $data["blog"] = $this->blog_model->get_all_entries();
      $this->load->view('/panel/blog/index', $data);
    } else {
      redirect('/login');
    }
  }
  public function create()
  {
    if ($this->session->admin) {
      if ($this->form_validation->run('blog') == FALSE) {
        $data['category'] = $this->category_model->get_all_entries();
        $this->load->view('/panel/blog/create', $data);
      } else {
        $data = array(
          'title' =>  $this->input->post('title'),
          'content' =>  $this->input->post('content'),
          'user_id' =>  $this->session->admin['id']
        );
        $blog_id = $this->blog_model->create($data);
        $category_id = $this->input->post('category');
        $id = array(
          'blog_id' => $blog_id,
          'category_id' => $category_id
        );
        $this->blogCategories_model->create($id);
        $this->session->set_flashdata('validation', 'Blog başarıyla eklenmiştir.');
        redirect('/admin/bloglar');
      }
    } else {
      redirect('/login');
    }
  }
  public function store()
  {
      //
  }
  public function show($id)
  {
    if ($this->session->admin) {
      $data['blog'] = $this->blog_model->get_with_id($id);
      $this->load->view('panel/blog/show', $data);
    } else {
      redirect('/login');
    }
  }
  public function edit($id)
  {
    if ($this->session->has_userdata('admin')) {
      $data['blog'] = $this->blog_model->get_with_id($id);
      $data['category'] = $this->category_model->get_all_entries();
      $this->load->view('panel/blog/edit', $data);
    } else {
      redirect('/login');
    }
  }
  public function update($id)
  {
    if ($this->session->admin) {
      if ($this->form_validation->run('blog') == FALSE) {
        $this->edit($id);
      } else {
        $category_id = $this->input->post('category');
        $data = array('category_id' => $category_id);
        $this->blogCategories_model->update_blog($id, $data);
        $data2 = array(
          'title' =>  $this->input->post('title'),
          'content' =>  $this->input->post('content')
        );
        $this->blog_model->update($id, $data2);
        $this->session->set_flashdata('validation', 'Blog başarıyla güncellenmiştir.');
        redirect('admin/bloglar/'.$id.'/detay');
      }
    } else {
      redirect('/login');
    }
  }
  public function destroy($id)
  {
    if ($this->session->admin) {
      $this->blogCategories_model->delete_blog($id);
      $this->blog_model->delete($id);
      redirect('/admin/bloglar');
    } else {
      redirect('/login');
    }
  }
}
?>