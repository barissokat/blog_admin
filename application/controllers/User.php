<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        if ($this->session->admin) {
            $data["user"] = $this->user_model->get_all_entries();
            $this->load->view('/panel/user/index', $data);
        } else {
            redirect('/login');
        }
    }
    public function create()
    {
        if ($this->session->admin) {
            if ($this->form_validation->run('user_password') == FALSE) {
                $this->load->view('/panel/user/create');
            } else {
                $data = array(
                    'name' =>  $this->input->post('name'),
                    'email' =>  $this->input->post('email'),
                    'password' =>  sha1(md5($this->input->post('password')))
                );
                $this->user_model->create($data);
                $this->session->set_flashdata('validation', 'Kullanıcı başarıyla eklenmiştir.');
                redirect('/admin/kullanicilar');
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
            $data['user'] = $this->user_model->get_with_id($id);
            $this->load->view('panel/user/show', $data);
        } else {
            redirect('/login');
        }
    }
    public function edit($id)
    {
        if ($this->session->admin) {
            $data['user'] = $this->user_model->get_with_id($id);
            $this->load->view('panel/user/edit', $data);
        } else {
            redirect('/login');
        }
    }
    public function check_email_exists($id, $email)
    {
        $result = $this->user_model->check_email_exists($email);
        if ($result && $result->id != $id) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    public function update($id)
    {
        if ($this->session->admin) {
            $name =  $this->input->post('name');
            $email =  $this->input->post('email');
            $password = $this->input->post('password');
            if (empty($password)) {
                if ($this->form_validation->run('profile') == FALSE) {
                    $this->session->set_flashdata('error_info', 'Güncelleme sırasında hata oluştu.');
                    $this->edit($id);
                } else {
                    if ($this->check_email_exists($id, $email)) {
                        $this->session->set_flashdata('error_info', 'Girdiğiniz email bir başkasına ait.');
                        $this->edit($id);
                    } else {
                        $data = array(
                            'name' =>  $name,
                            'email' =>  $email
                        );
                        $this->user_model->update($id, $data);
                        $this->session->set_flashdata('success_info', 'Kullanıcı başarıyla güncellenmiştir.');
                    }
                }
            } else {
                if ($this->form_validation->run('userpassword') == FALSE) {
                    $this->session->set_flashdata('error_password', 'Parolayı güncelleme sırasında hata oluştu.');
                    $this->edit($id);
                } else {
                    $data = array(
                        'name' =>  $name,
                        'email' =>  $email,
                        'password' =>  sha1(md5($password))
                    );
                    $this->user_model->update($id, $data);
                    $this->session->set_flashdata('success_info', 'Kullanıcı başarıyla güncellenmiştir.');
                    $this->session->set_flashdata('success_password', 'Parola başarıyla güncellenmiştir.');
                }
            }
            redirect('/admin/kullanicilar/'.$id.'/duzenle');
        } else {
            redirect('/login');
        }
    }
    public function destroy($id)
    {
        if ($this->session->admin) {
            $this->user_model->delete($id);
            redirect('/admin/kullanicilar');
        } else {
            redirect('/login');
        }
    }
}
?>