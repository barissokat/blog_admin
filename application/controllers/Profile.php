<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Profile extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function edit_profile($id)
    {
        if (($this->session->admin) && ($this->session->admin['id'] == $id)) {
            $data['admin'] = $this->user_model->get_with_id($id);
            $this->load->view('panel/profile/edit_profile', $data);
        } else {
            redirect('/login');
        }
    }
    public function change_password($id)
    {
        if (($this->session->admin) && ($this->session->admin['id'] == $id)) {
            $data['admin'] = $this->user_model->get_with_id($id);
            $this->load->view('panel/profile/change_password', $data);
        } else {
            redirect('/login');
        }
    }
    public function check_password($pass)
    {
        $pass_hash = sha1(md5($pass));
        $id = $this->session->admin['id'];
        $password_hash = $this->user_model->get_password_hash($id);
        if ($pass_hash == $password_hash->password) {
            return TRUE;
        } else {
            return FALSE;
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
        if (($this->session->admin) && ($this->session->admin['id'] == $id)) {
            if ($this->uri->segment(3) == 'profil') {
                $name = $this->input->post('name');
                $email = $this->input->post('email');
                if ($this->form_validation->run('profile') == FALSE) {
                    $this->edit_profile($id);
                } else {
                    if ($this->check_email_exists($id, $email)) {
                        $this->session->set_flashdata('fail_email', 'Girdiğiniz email bir başkasına ait.');
                        $this->edit_profile($id);
                    } else {
                        $data = array(
                            'name' => $this->input->post('name'),
                            'email' => $this->input->post('email')
                        );
                        $this->user_model->update($id, $data);
                        $session_array = array(
                            'id' => $id,
                            'name' => $this->input->post('name'),
                            'email' => $this->input->post('email'),
                            'logged_in' => TRUE
                        );
                        $this->session->set_userdata('admin', $session_array);
                        $this->session->set_flashdata('success_name', 'Kullanıcı adı başarıyla güncellenmiştir.');
                        $this->session->set_flashdata('success_email', 'Email başarıyla güncellenmiştir.');
                        redirect('/admin/ayarlar/profil/'.$id);
                    }
                }
            } elseif ($this->uri->segment(3) == 'guvenlik') {
                $oldpassword = $this->input->post('oldpassword');
                $newpassword = $this->input->post('newpassword');
                $newpasswordconf = $this->input->post('newpasswordconf');
                if ($this->form_validation->run('password') == FALSE) {
                    $this->change_password($id);
                } else {
                    if ($this->check_password($oldpassword)) {
                        $data = array(
                            'password' => sha1(md5($this->input->post('newpassword')))
                        );
                        $this->user_model->update($id, $data);
                        $this->session->set_flashdata('success_password', 'Parolanız başarılı bir şekilde değiştirilmiştir.');
                        redirect('/admin/ayarlar/guvenlik/'.$id);
                    } else {
                        $this->session->set_flashdata('fail_oldpassword', 'Görünüşe göre bu sizin parolanız değil.');
                        $this->change_password($id);
                    }
                }
            }
        } else {
            redirect('/login');
        }
    }
}
?>