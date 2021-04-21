<?php
class Auth extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('admin/Auth_model');
        
    }
    public function login(){

        $this->form_validation->set_rules("email","Email","trim|required|min_length[4]|max_length[30]");
        $this->form_validation->set_rules('pwd', 'Password', 'trim|required|min_length[4]|max_length[18]');
        if($this->form_validation->run() == true){


        $email = html_escape($this->security->xss_clean($this->input->post('email')));
        $password = html_escape($this->security->xss_clean($this->input->post('pwd')));
        $data = $this->Auth_model->verifyEmail($email);
        // print_r($data);die;
        if($data->email == $email ){
            if(password_verify($password, $data->password)){
                if($data->status == "active"){
                    $session_data = array(
                        'username'  => $data->username,
                        'email'     =>  $data->email,
                        'roll_id'   =>  $data->roll_id,
                        'logged_in' => TRUE
                );
            $this->session->set_userdata($session_data);
                redirect('admin/Home');
                }else{
                    $this->session->set_tempdata('notact','Your account not activated Please contact admin',2);
                    redirect('admin/Auth/login');
                }
            }else{
                $this->session->set_tempdata('error','Invalid User name / Password',2);
                redirect('admin/Auth/login');
            }
        }else{
            $this->session->set_tempdata('error','Invalid User name / Password',2);
            redirect('admin/Auth/login');
        }
        }else{
            $this->load->view('admin/login_view');
        }
    }
    public function logout(){
        $session_data = array('username','email','logged_in');
        $this->session->unset_userdata($session_data);
        redirect('admin/auth/login');
    }
}