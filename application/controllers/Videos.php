<?php
require(APPPATH.'libraries/REST_Controller.php');

class Videos extends REST_Controller {

	public function __construct() {       
       parent:: __construct();
       $this->load->model('example_model'); 
  }

  function example_get() {
  	if(!$this->get('id')) {
        $this->response(NULL, 400);
    }
    // verify data from model
    $user = $this->example_model->get( $this->get('id') );
    if($user){
        $this->response($user, 200); // 200 being the HTTP response code
    }else {
        $this->response(NULL, 404);
    }
  	// $data = array('returned: '. $this->get('id'));
   //  $this->response($data);
  }
   
  function example_post() {       
  	$result = $this->example_model->update( $this->post('id'), array(
        'name' => $this->post('name'),
        'email' => $this->post('email')
    	));
     
    if($result === FALSE) {
      $this->response(array('status' => 'failed'));
    }else {
      $this->response(array('status' => 'success'));
    }
  }

  function example_put() {       
      $data = array('returned: '. $this->put('id'));
      $this->response($data);
  }

  function example_delete() {
      $data = array('returned: '. $this->delete('id'));
      $this->response($data);
  }
}