<?php
class Auth_model extends CI_Model{
    public function verifyEmail($email){
        // $where = "email={$email} OR username={$uname}";
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('email',$email);
        $result = $this->db->get();
        if($result->num_rows()==1){
            return $result->row();
        }else{
            return false;
        }
    }
}
?>