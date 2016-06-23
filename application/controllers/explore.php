<?php
class Explore extends CI_Controller {
 
function __Construct(){
  parent::__Construct ();
   //$this->load->database();
   $this->load->model('explore_model');
  }
 
public function index() {
   $this->data['apps'] = $this->explore_model->getApps();
   $this->load->view('explore', $this->data);
  }
}
?>