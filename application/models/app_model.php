<?php
class App_model extends CI_Model{
    
    public function get_all_apps($user_id){
        $this->db->where('app_user_id',$user_id);
        $this->db->order_by('create_date', 'asc'); 
        $query = $this->db->get('apps');
        return $query->result();
    }
    
    public function get_app($id){
        $this->db->select('*');
        $this->db->from('apps');
        $this->db->where('id',$id);
        $query = $this->db->get();
         if($query->num_rows() != 1){
            return FALSE;
        }
        return $query->row();
    }
    
    public function create_app($data){
	$insert = $this->db->insert('apps', $data);
	return $insert;
    }
    
     public function edit_app($app_id,$data){
        $this->db->where('id', $app_id);
        $this->db->update('apps', $data); 
        return TRUE;
    }
    
    public function get_app_data($app_id){
        $this->db->where('id',$app_id);
        $query = $this->db->get('apps');
        return $query->row();
    }
    
     public function delete_app($app_id){
        $this->db->where('id',$app_id);
        $this->db->delete('apps');
        return;
    }
}