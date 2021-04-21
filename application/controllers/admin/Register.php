<?php
class Register extends CI_Controller{

   function __construct() {
      parent::__construct();
      $this->load->model('admin/Register_model');
   }
    public function index(){

         $this->form_validation->set_rules("username","Username","trim|required|min_length[4]|max_length[10]");
            $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[4]|valid_email|is_unique[admin.email]',array('is_unique' => 'This Email is already Registered'));
            $this->form_validation->set_rules('emp_id', 'Employee Id', 'trim|required|min_length[4]|max_length[8]');
            $this->form_validation->set_rules("pwd","password","trim|required|min_length[4]|max_length[16]");
            $this->form_validation->set_rules("cpwd","confirm Password","trim|required|matches[pwd]");
            $this->form_validation->set_rules("terms","accept","trim|required");
         if ($this->form_validation->run()==true) {
            $token = md5(str_shuffle(rand(10,100).time()));
            $pwd = html_escape($this->security->xss_clean($this->input->post("pwd")));
            $password = password_hash($pwd,PASSWORD_DEFAULT);
            $data = array (
               "username" => html_escape($this->security->xss_clean($this->input->post("username"))),
               "email" => html_escape($this->security->xss_clean($this->input->post("email"))),
               "employee_id" => html_escape($this->security->xss_clean($this->input->post("emp_id"))),
               "password" => $password,
               "token"=> $token,
               "status"=>"unactive"
            );
            $to_email = $data['email'];
            $username = $data['username'];
            $status = $this->Register_model->insertData($data);
           if($status == true){
            $emailsent = $this->Register_model->emailSend($to_email,$username);
              if($emailsent == true){
               $this->session->set_tempdata('regsuccess','You are successfully registered,Please check your mail for more information',2);
               redirect('admin/Auth/login');
              }else{
               $this->session->set_tempdata('regerror','Something went wrong please contact admin',2);
               redirect('admin/Auth/login');
              }
           }else{
            $this->session->set_tempdata('error','Something went wrong please contact admin.',2);
         }
         }else{
            // echo validation_errors();
            $this->load->view('admin/admin_register');
         }
         
	}
   public function login($d){
      $this->load->view('admin/login_view.php');
   }

}
?>