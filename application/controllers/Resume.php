<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resume extends CI_Controller {

	public function index($page='My Resume') {

		$data['title'] = ucfirst($page);
		$this->load->view('templates/header', $data);
		$this->load->view('resume/index',$data);
		$this->load->view('templates/footer', $data);
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/Welcome.php */