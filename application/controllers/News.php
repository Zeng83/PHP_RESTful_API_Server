<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function index() {

		$this->load->model('News_model');
		$this->load->view('news/index');

		
	}
}