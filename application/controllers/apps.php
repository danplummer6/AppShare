<?php
class Apps extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if(!$this->session->userdata('logged_in')){
            // Set error
            $this->session->set_flashdata('noaccess', 'Sorry, you need to be logged in to view this page');
            redirect('home/index');
        }
    }
    
    public function index(){
        // Get the logged in users id
        $user_id = $this->session->userdata('user_id');
        // Get all apps from the model
        $data['apps'] = $this->App_model->get_all_apps($user_id);
        
        //Load view and layout
        $data['main_content'] = 'apps/index';
        $this->load->view('layouts/main',$data);
    }
    
     public function show($id){
        //Get all apps from the model
        $data['app'] = $this->App_model->get_app($id);
        //Load view and layout
        $data['main_content'] = 'apps/show';
        $this->load->view('layouts/main',$data);
    }
    
    
    public function add(){
        $this->form_validation->set_rules('app_name','App Name','trim|required');
        $this->form_validation->set_rules('app_body','App Body','trim');
        
        if($this->form_validation->run() == FALSE){
            //Load view and layout
            $data['main_content'] = 'apps/add_app';
            $this->load->view('layouts/main',$data);  
        } else {
            //Validation has ran and passed  
             //Post values to array
            $data = array(             
                'app_name'    => $this->input->post('app_name'),
                'app_body'    => $this->input->post('app_body'),
                'app_user_id' => $this->session->userdata('user_id')
            );
           if($this->App_model->create_app($data)){
                $this->session->set_flashdata('app_created','<p class="flashdata">Your app has been created!</p>');
                //Redirect to index page with error above
                redirect('apps/index');
           }
        }
    }
    
    
    
    public function edit($app_id){
        $this->form_validation->set_rules('app_name','App Name','trim');
        $this->form_validation->set_rules('app_body','App Body','trim');
        
        if($this->form_validation->run() == FALSE){
            //Get the current list info
            $data['this_app'] = $this->App_model->get_app_data($app_id);
            //Load view and layout
            $data['main_content'] = 'apps/edit_app';
            $this->load->view('layouts/main',$data);  
        } else {
            //Validation has ran and passed  
             //Post values to array
            $data = array(             
                'app_name'    => $this->input->post('app_name'),
                'app_body'    => $this->input->post('app_body'),
                'app_user_id' => $this->session->userdata('user_id')
            );
           if($this->App_model->edit_app($app_id,$data)){      
                $this->session->set_flashdata('app_updated', '<p class="flashdata">Your app has been updated!</p>');
                //Redirect to index page with error above
                redirect('apps/index');
           }
        }
    }
    
    
    public function delete($app_id){
            $this->App_model->delete_app($app_id);
            $this->session->set_flashdata('app_deleted', '<p class="flashdata">Your app has been deleted</p>');        
            //Redirect to list index
            redirect('apps/index');
     }

}