<?php
class About extends CI_Controller{
	public function index(){
		$data["main_content"] = "about";
		$this->load->view('layouts/main', $data);
	}
}