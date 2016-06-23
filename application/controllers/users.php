<?php
class Users extends CI_Controller{
	// Sets form validation rules for registering
	public function register(){
		$this->form_validation->set_rules('first_name','First Name','trim|required');
        $this->form_validation->set_rules('last_name','Last Name','trim|required');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');
        $this->form_validation->set_rules('username','Username','trim|required|min_length[4]');      
        $this->form_validation->set_rules('password','Password','trim|required|min_length[4]|max_length[50]');
        $this->form_validation->set_rules('password2','Confirm Password','trim|required|matches[password]');

		if($this->form_validation->run() == FALSE){
			$data['main_content'] = 'users/register';
			$this->load->view('layouts/main',$data);
		}else{
			if($this->User_model->create_member()){
				$this->session->set_flashdata('registered','Congratulations, You are now registered!');
				redirect('home/index');
			}
		}
	}

	// Login function
	public function login(){
		// Sets form validation rules for username and password for logging in
		$this->form_validation->set_rules('username','Username','trim|required|min_length[4]');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[4]|max_length[50]');

		// Runs form validation
		if($this->form_validation->run() == FALSE){

		}else{
			// Get from POST
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			// Get user id from Model
			$user_id = $this->User_model->login_user($username,$password);

			// Validate user
			if($user_id){
				$user_data = array(
						'user_id'	=> $user_id,
						'username'	=> $username,
						'logged_in'	=> true
					);
				// Set Session
				$this->session->set_userdata($user_data);

				// If log in success, redirect to homepage with success message
				$this->session->set_flashdata('login_success', 'You are now logged in!');
				redirect('home/index');
			}else{
				// If log in is an Error. redirect to homepage with error message
				$this->session->set_flashdata('login_failed', 'The login information you entered is invalid, Try Again.');
				redirect('home/index');
			}
		}
	}

	// Logut function
	public function logout(){
		// Unset Session
		$this->session->unset_userdata('loggin_in');
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('username');

		// Destroy session
		$this->session->sess_destroy();
		redirect('home/index');
	}
}