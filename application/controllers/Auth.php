<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	public function login()
	{
        $email = $this->input->post('email');
        $password = $this->input->post('password');
		if ($this->form_validation->run('login') == FALSE) {
			$this->load->view('/auth/pages/loginpage');
		} else {
			if ($this->is_admin($email, $password) == TRUE) {
				redirect('/admin');
			} else {
				$this->load->view('/auth/pages/loginpage');
			}
		}
	}
	function is_admin($email, $password)
    {
        $result = $this->user_model->is_admin($email, $password);
        if ($result == FALSE) {
            $this->session->set_flashdata('notadmin', 'Hatalı email veya parola girdiniz');
            return false;
        } else {
            $session_array = array();
            foreach ($result as $row) {
                $session_array = array(
                    'id' => $row->id,
                    'name' => $row->name,
                    'email' => $row->email,
                    'logged_in' => TRUE
                );
                $this->session->set_userdata('admin', $session_array);
            }
            return true;
        }
    }
	public function logout()
	{
		$this->session->unset_userdata('admin');
		session_destroy();
		redirect('/login');
	}
}
?>