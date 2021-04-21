<?php
class Home_model extends CI_Model{

    // Category Insert
    public function addCategory($data){
        // print_r($data['cat_name']);die;
        $this->db->where('cat_name',$data['cat_name']);
        $this->db->select('cat_name');
        $this->db->from('category');
        $result = $this->db->get()->row();
        if($result){
            return false;
        }else{
            $this->db->insert('category',$data);
            if($this->db->affected_rows()>0){
                return true;
            }else{
                return false;
            }
        }
        
    }

    // Update Category
    public function updateCategory($data,$id){
        // print_r($data['cat_name']);die;
        $udata = array(
            'cat_name' => $data['cat_name'],
            'cat_desc' => $data['cat_desc'],
            );    
            $this->db->where('id', $id);
            $result = $this->db->update('category', $udata);
            if($result > 0){
                return true;
            }else{
                return false;
            }
        }

    //Display category
    public function category($id = ''){
        if($id!=''){
            $this->db->where('id',$id);
        }
        $result = $this->db->get('category');
        if($result->num_rows() > 0){
            return $result->result();
        }else{
            return false;
        }
    }
    //Category Active and Deactive 
    public function catActive($id){
        $this->db->where('id',$id);
		$this->db->select('cat_status');
        $result = $this->db->get('category');
        if($result->num_rows() == 1){
            
            if($result->row()->cat_status == 'active'){
                $this->db->set('cat_status','deactive');
                $this->db->where('id', $id);
               $result = $this->db->update('category');
                if($result){
                    return true;
                }else{
                    return false;
                }
            }else{
                $this->db->set('cat_status','active');
                $this->db->where('id', $id);
               $result = $this->db->update('category');
               if($result){
                   return true;
               }else{
                   return false;
               }
            }
        }else{
            return false;
        }

	}
    public function deleteCategory($id){
        $this->db->where('id',$id);
        $this->db->delete('category');
        if($this->db->affected_rows()==1){
           return true;
        }else{
            return false;
        }

    }
}
?>