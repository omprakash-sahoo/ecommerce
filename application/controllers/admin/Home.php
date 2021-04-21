<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if($_SESSION['logged_in']!=TRUE){
			redirect('admin/Auth/login');
		}
		$this->load->model('admin/Home_model');
	}
	public function index()
	{
		$this->load->view("admin/admin_home_view");
	}
	public function category(){
		$response["data"] = $this->Home_model->category();
		// print_r($response);die;
		$this->load->view("admin/category",$response);
	}
	public function addCategory(){
		$this->form_validation->set_rules('cat_name','category name','trim|required|min_length[3]|max_length[10]');
		$this->form_validation->set_rules('cat_desc','Description','trim|required|min_length[3]|max_length[100]');
		if($this->form_validation->run()==true)
		{ 
			$data = array(
				"cat_name" => html_escape($this->security->xss_clean($this->input->post('cat_name'))),
				
				"cat_desc" => html_escape($this->security->xss_clean($this->input->post('cat_desc'))),
				"cat_status" => "active"
			);
			$responseData = $this->Home_model->addCategory($data);
			if($responseData == true){
				redirect('admin/Home/category');
			}else{
				$this->session->set_tempdata('error','Category is already exists.',2);
				redirect(current_url());
			}

		}else{
			$this->load->view('admin/add_category');
		}

		
	}
	public function catActive($id){
		$resultData = $this->Home_model->catActive($id);
		if($resultData== true){
			redirect('admin/Home/category');
		}
	}
	public function editCategory($id=''){
		$resultData['data'] = $this->Home_model->category($id);
		if(!empty($id)){
		$this->form_validation->set_rules('cat_name','category name','trim|required|min_length[3]|max_length[10]');
		$this->form_validation->set_rules('cat_desc','Description','trim|required|min_length[3]|max_length[100]');
		
		$fetch_id = $resultData['data'];
		$db_id =  $fetch_id[0]->id;
		if($this->form_validation->run()==true)
		{
			if($id){
			$data = array(
				"cat_name" => html_escape($this->security->xss_clean($this->input->post('cat_name'))),
				
				"cat_desc" => html_escape($this->security->xss_clean($this->input->post('cat_desc'))),
				"cat_status" => "active"
			);
			$responseData = $this->Home_model->updateCategory($data,$id);
			if($responseData == true){
				$this->session->set_tempdata('success','Category Upadted Successfully',2);
				redirect('admin/Home/category');
			}else{
				$this->session->set_tempdata('error','Category is already exists.',2);
				redirect(current_url());
			}
		
		}
		}else{
			
			$this->load->view('admin/edit_category.php',$resultData);
		}
	}else{
		redirect('admin/Home/category');
	}
		
	}

	public function deleteCategory($id=''){
		if($id!=''){
		$responseData = $this->Home_model->deleteCategory($id);
			if($responseData){
				$this->session->set_tempdata('success','Category deleted Successfully',2);
				redirect('admin/Home/category');
			}
		}else{
			redirect('admin/Home/category');
		}
	}
}
