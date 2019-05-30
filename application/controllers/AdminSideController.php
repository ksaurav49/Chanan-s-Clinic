<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminSideController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        
                if (!$this->session->userdata('is_logged_in')){
                redirect('adminLogin'); 
            }
  
    }
    public function dashLoad(){
         $page['data'] = $this->uri->segment(1);
        $this->load->view('admin/include/header',$page);
		$this->load->view('admin/index');
                $this->load->view('admin/include/footer');
    }
     public function logout(){
        $this->session->sess_destroy();
           redirect('adminLogin');
    }
    
    public function addSlider(){
        $page['data'] = $this->uri->segment(1);
        $this->load->view('admin/include/header',$page);
		$this->load->view('admin/addSlider');
                $this->load->view('admin/include/footer');
    }
    
    public function sliderSubmit(){
            $upload_path = "assets/image/slider";
            $config['upload_path'] = $upload_path;

            $config['allowed_types'] = '*';
        
            $image_data = array();
             $this->load->library('upload', $config);
             
             if($this->upload->do_upload('image')){
                 $image_data=$this->upload->data();
                 $config['image_library'] = 'gd2';
                    $config['source_image'] = $image_data['full_path']; //get original image
                    $config['maintain_ratio'] = TRUE;
                    $config['width'] = 1920;
                    $config['height'] = 989;
                    $config['allowed_types']        = 'gif|jpg|png';
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize();
                    $file = $upload_path . $image_data['file_name'];
                    if (file_exists($file)) {
                        unlink($file);
                    }
             }
             $data= array('name' => $this->input->post('name'),
                 'image' => $image_data['file_name']);
             $this->load->model('adminModel');
             $a=$this->adminModel->slider($data);
            if($a){
                $this->session->set_flashdata('item', "yes");
                  redirect('adminSlide','refresh');
                
            }else{
                $this->session->set_flashdata('item', "no");
                  redirect('adminSlide','refresh');
            }

        }
        
        public function deleteSlider(){
      
            
            $page['data'] = $this->uri->segment(1);
        $this->load->view('admin/include/header',$page);
		$this->load->view('admin/delS');
                $this->load->view('admin/include/footer');

    }
    public function delSlides(){
        $image=$this->uri->segment(4);
        
        $r="/chana/assets/image/slider/".$image;
      
        unlink($_SERVER['DOCUMENT_ROOT'].$r);
        $this->load->model('adminModel');
        $w=$this->adminModel->delSlide();
         if($w == 1){
              $this->session->set_flashdata('item', "yes");
             redirect('delSlider','refresh');
         } else {
             $this->session->set_flashdata('item', "no");
                  redirect('adminSlide','refresh');
         }
    }
      public function addGallery(){ 
                $page['data'] = $this->uri->segment(1);
                $this->load->view('admin/include/header',$page);
		$this->load->view('admin/galleryn');
                $this->load->view('admin/include/footer');

    }
    public function paddGallery(){ 
                $page['data'] = $this->uri->segment(1);
                $this->load->view('admin/include/header',$page);
		$this->load->view('admin/patientgal');
                $this->load->view('admin/include/footer');

    }
    public function addGalleryv(){ 
                $page['data'] = $this->uri->segment(1);
                $this->load->view('admin/include/header',$page);
		$this->load->view('admin/galleryv');
                $this->load->view('admin/include/footer');

    }
    public function paddGalleryv(){ 
                $page['data'] = $this->uri->segment(1);
                $this->load->view('admin/include/header',$page);
		$this->load->view('admin/patientvideo');
                $this->load->view('admin/include/footer');

    }
    public function pvideosubmit(){
        $a=date('Y-m-d');
        $b="video";
             $data= array(
                  
                 'pid' => $this->uri->segment(3),
                 'date' => $a,
                 'image' => $this->input->post('image'),
                 'name' => $this->input->post('name'),
                 'descr' => $this->input->post('descr'),
                 'type' =>  $b);
                 
             $this->load->model('adminModel');
             $a=$this->adminModel->pgalleryv($data);
            if($a){
                $this->session->set_flashdata('item', "yes");
                  redirect('ga','refresh');
                
            }else{
                $this->session->set_flashdata('item', "no");
                  redirect('ga','refresh');
            }
    }


    
    
    public function pgallerySubmit(){ 
            $upload_path = "assets/image/pgallery";
            $config['upload_path'] = $upload_path;

            $config['allowed_types'] = '*';
        
            $image_data = array();
             $this->load->library('upload', $config);
             
             if($this->upload->do_upload('image')){
                 $image_data=$this->upload->data();
                 $config['image_library'] = 'gd2';
                    $config['source_image'] = $image_data['full_path']; //get original image
                    $config['maintain_ratio'] = FALSE;
                    $config['width'] = 290;
                    $config['height'] = 200;
                    $config['allowed_types'] = 'gif|jpg|png';
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize();
                    $file = $upload_path . $image_data['file_name'];
                    if (file_exists($file)) {
                        unlink($file);
                    }
             }
             $a=date('Y-m-d');
             $data= array(
                  
                 'pid' => $this->uri->segment(3),
                 'date' => $a,
                 'image' => $image_data['file_name'],
                 'name' => $this->input->post('name'),
                 'descr' => $this->input->post('descr'));
                 
             $this->load->model('adminModel');
             $a=$this->adminModel->pgallery($data);
            if($a){
                $this->session->set_flashdata('item', "yes");
                  redirect('ga','refresh');
                
            }else{
                $this->session->set_flashdata('item', "no");
                  redirect('ga','refresh');
            }

    }
    
    
    public function gallerySubmite(){ 
            $upload_path = "assets/image/event";
            $config['upload_path'] = $upload_path;

            $config['allowed_types'] = '*';
        
            $image_data = array();
             $this->load->library('upload', $config);
             
             if($this->upload->do_upload('image')){
                 $image_data=$this->upload->data();
                 $config['image_library'] = 'gd2';
                    $config['source_image'] = $image_data['full_path']; //get original image
                    $config['maintain_ratio'] = FALSE;
                    $config['width'] = 770;
                    $config['height'] = 340;
                    $config['allowed_types'] = 'gif|jpg|png';
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize();
                    $file = $upload_path . $image_data['file_name'];
                    if (file_exists($file)) {
                        unlink($file);
                    }
             }
             $data= array(
                 'name' => $this->input->post('name'),
                 'image' => $image_data['file_name'],
                 'descr' => $this->input->post('descr'),
                 'date' => $this->input->post('date'),
                 'month' => $this->input->post('month')
                 
                 
                 );
             $this->load->model('adminModel');
             $a=$this->adminModel->event($data);
            if($a){
                $this->session->set_flashdata('item', "yes");
                  redirect('ga','refresh');
                
            }else{
                $this->session->set_flashdata('item', "no");
                  redirect('ga','refresh');
            }

    }
    
    
    
    
    
    public function gallerySubmit(){ 
            $upload_path = "assets/image/gallery";
            $config['upload_path'] = $upload_path;

            $config['allowed_types'] = '*';
        
            $image_data = array();
             $this->load->library('upload', $config);
             
             if($this->upload->do_upload('image')){
                 $image_data=$this->upload->data();
                 $config['image_library'] = 'gd2';
                    $config['source_image'] = $image_data['full_path']; //get original image
                    $config['maintain_ratio'] = FALSE;
                    $config['width'] = 331;
                    $config['height'] = 332;
                    $config['allowed_types'] = 'gif|jpg|png';
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize();
                    $file = $upload_path . $image_data['file_name'];
                    if (file_exists($file)) {
                        unlink($file);
                    }
             }
             $data= array(
                 'imgname' => $this->input->post('class'),
                 'class' => $this->input->post('class'),
                 'descr' => $this->input->post('descr'),
                 'img' => $image_data['file_name']);
             $this->load->model('adminModel');
             $a=$this->adminModel->gallery($data);
            if($a){
                $this->session->set_flashdata('item', "yes");
                  redirect('ga','refresh');
                
            }else{
                $this->session->set_flashdata('item', "no");
                  redirect('ga','refresh');
            }

    }
    
        public function gallerySubmitv(){ 
            
        
           $a="video";
             
             $data= array(
                 'imgname' => $this->input->post('class'),
                 'class' => $this->input->post('class'),
                 'descr' => $this->input->post('descr'),
                 'img' => $this->input->post('image'),
                 'type' => $a);
             $this->load->model('adminModel');
             $a=$this->adminModel->galleryv($data);
            if($a){
                $this->session->set_flashdata('item', "yes");
                  redirect('gav','refresh');
                
            }else{
                $this->session->set_flashdata('item', "no");
                  redirect('gav','refresh');
            }

    }
    
    
    
    
     public function delGallery(){ 
                $page['data'] = $this->uri->segment(1);
                $this->load->view('admin/include/header',$page);
		$this->load->view('admin/gallerydel');
                $this->load->view('admin/include/footer');

    }
    public function delGalleryv(){ 
                $page['data'] = $this->uri->segment(1);
                $this->load->view('admin/include/header',$page);
		$this->load->view('admin/gallerydelv');
                $this->load->view('admin/include/footer');

    }
    public function galleryDelSubmit(){
        $image=$this->uri->segment(4);
        
        $r="/chana/assets/image/gallery/".$image;
      
        unlink($_SERVER['DOCUMENT_ROOT'].$r);
        $this->load->model('adminModel');
        $w=$this->adminModel->delGallery();
         if($w == 1){
              $this->session->set_flashdata('item', "yes");
             redirect('gad','refresh');
         } else {
             $this->session->set_flashdata('item', "no");
                  redirect('gad','refresh');
         }
    }
    public function galleryDelSubmitv(){
        $image=$this->uri->segment(4);
        
        
        $this->load->model('adminModel');
        $w=$this->adminModel->delGalleryv();
         if($w == 1){
              $this->session->set_flashdata('item', "yes");
             redirect('gadv','refresh');
         } else {
             $this->session->set_flashdata('item', "no");
                  redirect('gadv','refresh');
         }
    }
     public function faqView(){
            $page['data'] = $this->uri->segment(1);
        $this->load->view('admin/include/header',$page);
		$this->load->view('admin/faq_view');
                $this->load->view('admin/include/footer');

    }
     public function faqReply(){
            $page['data'] = $this->uri->segment(1);
            $array = $this->uri->segment(2);
               $query=$this->db->query("SELECT * FROM query where id=$array");
   $row = $query->row();

   $obj = array(
    'id' => $row->id,
    'name' => $row->name,
     'email' => $row->email,
      'subject' => $row->subject,
      'date' => $row->date,
      'message' => $row->message
  );
        $this->load->view('admin/include/header',$page);
		$this->load->view('admin/faq_reply',$obj);
                $this->load->view('admin/include/footer');

    }
     public function faqManage(){
            $page['data'] = $this->uri->segment(1);
        $this->load->view('admin/include/header',$page);
		$this->load->view('admin/faq_manage');
                $this->load->view('admin/include/footer');

    }
    public function faqReplySubmit(){
        $data= array('message' => $this->input->post('descr'),
                 'status' => 'Replied..');
             $this->load->model('adminModel');
             $a=$this->adminModel->faReply();
            if($a){
                $this->session->set_flashdata('item', "yes");
                  redirect('fam','refresh');
                
            }else{
                $this->session->set_flashdata('item', "no");
                  redirect('fam','refresh');
            }

        
    }
    public function appointManage(){
            $page['data'] = $this->uri->segment(1);
            
        $this->load->view('admin/include/header',$page);
		$this->load->view('admin/appoint');
                $this->load->view('admin/include/footer');

    }
     public function appointManageT(){
            $page['data'] = $this->uri->segment(1);
            
        $this->load->view('admin/include/header',$page);
		$this->load->view('admin/appointT');
                $this->load->view('admin/include/footer');

    }
     public function appointSubmit(){
          $page['data'] = $this->uri->segment(1);
            $array = $this->uri->segment(2);
               $query=$this->db->query("SELECT * FROM appointment where id=$array");
   $row = $query->row();
   $this->db->query("update appointment set status='Replied' where id=$array");

   $obj = array(
    'fname' => $row->fname,
       'lname' => $row->lname,
     'email' => $row->email,
       'phone' => $row->phone,
       'date' => $row->date,
      'adress' => $row->adress
  );
   $ob = array(
       'id' => $row->id,
    'fname' => $row->fname,
       'lname' => $row->lname,
     'email' => $row->email,
       'phone' => $row->phone,
       'date' => $row->date,
      'adress' => $row->adress
  );
   $qu=$this->db->query("select * from patient where fname='$row->fname' AND email='$row->email'");
   if($qu->num_rows() == 0){
       $query=$this->db->insert('patient', $obj);
   }
   
           
            $this->load->view('admin/include/header',$page);
		$this->load->view('admin/appoint_reply',$ob);
                $this->load->view('admin/include/footer');


    }
    public function appointReplySubmit(){
        $array = $this->uri->segment(3);
        $query=$this->db->query("SELECT * FROM patient where id=$array");
   $row = $query->row();

    $id = $row->id;
    $time=$this->input->post('time');
    
      $query=$this->db->query("insert into appoint (patient_id,fname,phone,date,time,adress) values('$row->id', '$row->fname','$row->phone', CURDATE(),'$time','$row->adress')");
//       $this->load->library('email');
//       
//       $this->email->from('your@example.com', 'Your Name');
//$this->email->to($email);
//$this->email->cc('another@another-example.com');
//$this->email->bcc('them@their-example.com');
//
//$this->email->subject('About confirmation of appointment');
//$this->email->message($message);
//
//$this->email->send();

//        $status="Replied..";
//      
//         $a=$this->db->query("update appointment set status='$status' where appoint_id='$id'");
         if($query){
                $this->session->set_flashdata('item', "yes");
                  redirect('apoint','refresh');
                
            }else{
                $this->session->set_flashdata('item', "no");
                  redirect('apoint','refresh');
            }
        
    }
      public function patientEntry(){ 
                $page['data'] = $this->uri->segment(1);
                $this->load->view('admin/include/header',$page);
		$this->load->view('admin/patient_entry');
                $this->load->view('admin/include/footer');

    }
    public function patientEntrySubmit(){ 
                
                
            $s1=$this->input->post('fname');
            $s2=$this->input->post('lname');
        $s3=$this->input->post('email');
        $s4=$this->input->post('phone');
        $s5=$this->input->post('date');
        $s6=$this->input->post('depart');
        $s7=$this->input->post('adress');
        $s8=$this->input->post('time');
        
        $data = array(
        'fname' => $s1,
        'lname' => $s2,
        'email' => $s3,
        'phone' => $s4,
         'date' => $s5,
            'depart' => $s6,
         'adress' => $s7
);

        //
        $r=$this->db->query("select * from patient where phone='$s4'");
        //echo $r->num_rows();
        //echo $r;
        if($r){
            $result=$this->db->insert('patient', $data);
            $r=$this->db->query("select * from patient where phone='$s4'");
            $row = $r->row();
        $query=$this->db->query("insert into appoint (patient_id,fname,phone,date,time,adress) values('$row->id', '$row->fname','$row->phone', CURDATE(),'$s8','$row->adress')");
        if($query >0){
            $this->session->set_flashdata('item', "yes");
            redirect('pe','refresh');
        }
        }else{
            $this->session->set_flashdata('item', "no");
            redirect('pe','refresh');
        }
         
        
    }
    
 public function payment(){
            $page['data'] = $this->uri->segment(1);
            
        $this->load->view('admin/include/header',$page);
		$this->load->view('admin/payment_invoice');
                $this->load->view('admin/include/footer');

    }
     public function payg(){
            $page['data'] = $this->uri->segment(1);
            
        $this->load->view('admin/include/header',$page);
		$this->load->view('admin/payment_detail');
                $this->load->view('admin/include/footer');

    }
     public function exprofile(){
            $page['data'] = $this->uri->segment(1);
            
        $this->load->view('admin/include/header',$page);
		$this->load->view('admin/extra_profile');
                $this->load->view('admin/include/footer');

    }
      public function Detail(){
            $page['data'] = $this->uri->segment(1);
            
        $this->load->view('admin/include/header',$page);
		$this->load->view('admin/details');
                $this->load->view('admin/include/footer');

    }
    public function appointAdmin(){
          $page['data'] = $this->uri->segment(1);
            $array = $this->uri->segment(2);
               $query=$this->db->query("SELECT * FROM patient where id=$array");
   $row = $query->row();
   //$this->db->query("update appointment set status='Replied' where id=$array");

   $obj = array(
       'id' => $row->id,
    'fname' => $row->fname,
       'lname' => $row->lname,
     'email' => $row->email,
       'phone' => $row->phone,
       'date' => $row->date,
      'adress' => $row->adress
  );
    $this->load->view('admin/include/header',$page);
		$this->load->view('admin/appointAdmin',$obj);
                $this->load->view('admin/include/footer');

    }
    public function paySubmit(){
         $id = $this->uri->segment(3);
         $total=$this->input->post('total');
         $paid=$this->input->post('paid');
         $rest=$total-$paid;
         $a=date('Y-m-d');
          $data = array(
        'p_id' => $id,
        'total' => $total,
        'paid' => $paid,
        'rest' => $rest,
         'date' => $a
           
);
          $result=$this->db->insert('pay_sum', $data);
          if($result>0){
              $this->session->set_flashdata('item', "yes");
            redirect('pay/'.$id);
          }
          
    }

   public function evmh(){
            $page['data'] = $this->uri->segment(1);
            
        $this->load->view('admin/include/header',$page);
		$this->load->view('admin/Eventmanage');
                $this->load->view('admin/include/footer');

    }  
    
    
    
}