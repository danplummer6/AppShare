<?php
class explore_model extends CI_Model {
 
function getApps(){
  $this->db->select("id,app_name,app_body");
  $this->db->from('apps');
  $query = $this->db->get();
  return $query->result();
	} 
}
?>