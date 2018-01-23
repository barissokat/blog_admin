<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Category extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
    function index()
    {
        if ($this->session->admin) {
            $data["category"] = $this->category_model->get_all_entries();
            $this->load->view('/panel/category/index', $data);
        } else {
            redirect('/login');
        }
    }
    public function create()
    {
        if ($this->session->admin) {
            if ($this->form_validation->run('category') == FALSE) {
                $this->load->view('/panel/category/create');
            } else {
                $data = array(
                    'name' =>  $this->input->post('name')
                );
                $this->category_model->create($data);
                $this->session->set_flashdata('validation', 'Kategori başarıyla eklenmiştir.');
                redirect('/admin/kategoriler');
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
            $data['category'] = $this->category_model->get_with_id($id);
            $this->load->view('panel/category/show', $data);
        } else {
            redirect('/login');
        }
    }
    public function edit($id)
    {
        if ($this->session->admin) {
            $data['category'] = $this->category_model->get_with_id($id);
            $this->load->view('panel/category/edit', $data);
        } else {
            redirect('/login');
        }
    }
    public function update($id)
    {
        if ($this->session->admin) {
            if ($this->form_validation->run('category') == FALSE) {
                $this->edit($id);
            } else {
                $data = array(
                    'name' =>  $this->input->post('name')
                );
                $this->category_model->update($id, $data);
                $this->session->set_flashdata('validation', 'Kategori başarıyla güncellenmiştir.');
                redirect('admin/kategoriler/'.$id.'/detay');
            }
        } else {
            redirect('/login');
        }
    }
    public function destroy($id)
    {
        if ($this->session->admin) {
            $this->category_model->delete($id);
            redirect('/admin/kategoriler');
        } else {
            redirect('/login');
        }
    }
}
?>