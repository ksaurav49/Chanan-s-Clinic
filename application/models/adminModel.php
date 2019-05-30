<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class adminModel extends CI_Model
{
    public function registerSubmitModel($array){
       return $this->db->insert('admin', $array);
    }
    
    public function loginSubmitModel(){
         $this->db->where('email', $this->input->post('email'));
         $this->db->where('password', ($this->input->post('password')));
         $query = $this->db->get('admin');
         $num = $query->num_rows();
         return $num;
    }
    public function slider($array){
        return $this->db->insert('slider', $array);
    }
    
    public function delSlide(){
        $id=$this->uri->segment(3);
    return $this->db->query("delete from slider where id = $id");
        
    }
    
    public function gallery($array){
        return $this->db->insert('gall', $array);
    }
    public function event($array){
        return $this->db->insert('event', $array);
    }
    public function pgallery($array){
        return $this->db->insert('gallery', $array);
    }
     public function pgalleryv($array){
        return $this->db->insert('gallery', $array);
    }
    public function galleryv($array){
        return $this->db->insert('gall', $array);
    }
    
     public function delGallery(){
        $id=$this->uri->segment(3);
        return $this->db->query("delete from gall where id = $id");
        
    }
    public function delGalleryv(){
        $id=$this->uri->segment(3);
        return $this->db->query("delete from gall where id = $id");
        
    }
    public function faReply(){
        $message=$this->input->post('descr');
        $status="Replied..";
        $id=$this->uri->segment(3);
        return $this->db->query("update query set ans='$message', status='$status' where id='$id'");
        
    }
    
    
    
   
   
   
   
}
    
   
    

?>