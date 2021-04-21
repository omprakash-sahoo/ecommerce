<?php
class Register_model extends CI_Model{
// Admin Register
    public function insertData($data){
        //  print_r($data);die;
        $result = $this->db->insert('admin',$data);
        if($result > 0){
            return true;
        }else{
            return false;
        }
    }
// Mail Send
    public function emailSend($to_email,$username){
        $config = array(
            "protocol" => "smtp",
            "smtp_host" => "ssl://smtp.gmail.com",
            "smtp_timeout" => 30,
            "smtp_port" => 465,
            "smtp_user" => 'canvas4tech@gmail.com',
            "smtp_pass" => 'canvas4tech@0807',
            "charset" => 'utf-8',
            "mailtype" => 'html',
            "newline" => '\r\n',
        );
        $this->email->initialize($config);
        
        
        $this->email->set_newline("\r\n");
        $this->email->set_crlf("\r\n");
        
        $this->email->to($to_email,$username);
        $this->email->from('canvas4tech@gmail.com', 'My Company');
        $this->email->subject("Account Activation Link - My Company");
        
        $message = "Hi $username,<br><br>Thanks for becoming our member,you will get a conformation mail soon once your application verified by our team<br><br>";
        
        $this->email->message($message);
        
        if($this->email->send()){
            return true;
        }else{
            return true;
        //   show_error($this->email->print_debugger());die;
        }
    }
}
?>