<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function appointment_submit_model($array){
       return $this->db->insert('appointment', $array);
    }
    
    
    
     public function record_count() {
        return $this->db->count_all("gall");
    }
    public function fetch_countries($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("gall");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }
   
    
}
?>
