<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {

	public function __construct() 
    {       
         parent:: __construct();
         $this->load->model('project_model','product');  
    }

	public function index($page='My Project') {

		$data['title'] = ucfirst($page);

		$this->load->view('project/index',$data);
		
	}

	public function returnlist() {
		$data['query'] = $this->product->get_product();
		echo json_encode($data['query']);		
	}

	public function addCatorgy(){
		$postdata = json_decode(file_get_contents("php://input"));

		$dt['name'] = $postdata->name;
		$dt['description'] = $postdata->description;
		$dt['width'] = $postdata->width;
		$dt['length'] = $postdata->length;
		$dt['height'] = $postdata->height;
		$dt['weight'] = $postdata->weight;
		$dt['value'] = $postdata->value;
		if($postdata->id != ''){
			$dt['id'] = $postdata->id;
			$result = $this->product->save_item($dt);	
		}else {
			$result = $this->product->insert_entry($dt);	
		}
		
		if($result === true){
			$data['rs'] = 1;
		}else {
			$data['rs'] = 0;
		}
		$data['query'] = $this->product->get_product();	
		echo json_encode($data['query']);
	}

	public function edit() {
		$id = $this->input->get('id');
		
		$data['query'] = $this->product->edit_item($id);
		$this->load->view('project/edit',$data);
	}

	public function save() {
		
		$result = $this->product->save_item($dt);
		echo $result;
	}	

	public function delete(){
		$id = $this->input->get('id', 0);
		$result = $this->product->delete_item($id);
	}
}