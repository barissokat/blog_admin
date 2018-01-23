<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Setting extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        if ($this->session->admin) {
            $data["setting"] = $this->setting_model->get_all_entries();
            $this->load->view('/panel/setting/index', $data);
        } else {
            redirect('/login');
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        if ($this->session->admin) {
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('/panel/setting/create');
            } else {
                $data = array(
                    'name' =>  $this->input->post('name'),
                    'value' =>  $this->input->post('value')
                );
                $this->setting_model->create($data);
                $this->session->set_flashdata('validation', 'Ayar başarıyla eklenmiştir.');
                redirect('/admin/ayarlar');
            }
        } else {
            redirect('/login');
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        if ($this->session->admin) {
            $data['setting'] = $this->setting_model->get_with_id($id);
            $this->load->view('panel/setting/show', $data);
        } else {
            redirect('/login');
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        if ($this->session->admin) {
            $data['setting'] = $this->setting_model->get_with_id($id);
            $this->load->view('panel/setting/edit', $data);
        } else {
            redirect('/login');
        }
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        if ($this->session->admin) {
            if ($this->form_validation->run() == FALSE) {
                $this->edit($id);
            } else {
                $data = array(
                    'value' =>  $this->input->post('value')
                );
                $this->setting_model->update($id, $data);
                $this->session->set_flashdata('validation', 'Ayar başarıyla güncellenmiştir.');
                redirect('/admin/ayarlar/'.$id.'/detay');
            }
        } else {
            redirect('/login');
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        if ($this->session->admin) {
            $this->setting_model->delete($id);
            redirect('/admin/ayarlar');
        } else {
            redirect('/login');
        }
    }
}
?>