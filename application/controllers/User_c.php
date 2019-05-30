<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_c extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        
                
  
    }

	public function index()
	{
            $page['data'] = $this->uri->segment(1);
                 $this->load->view('user/include/header',$page);
                 $this->load->view('user/include/slider');
                 
                 
                 
                  $config = array();
        $config["base_url"] = base_url() . "User_c/gallery_c";
        $config["total_rows"] = $this->User_model->record_count();
        $config["per_page"] = 3;
        $config["uri_segment"] = 3;
        
        $config['full_tag_open'] = "<ul class='pagination' style='margin-left: 50%'>";
    $config['full_tag_close'] = '</ul>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active"><a href="#">';
    $config['cur_tag_close'] = '</a></li>';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';



    $config['prev_link'] = '<i class="fa fa-long-arrow-left"></i>Previous Page';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';


    $config['next_link'] = 'Next Page<i class="fa fa-long-arrow-right"></i>';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';

        
        
        $this->pagination->initialize($config);
        
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->User_model->fetch_countries($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
                 
                 
                 
                 
                 
                 
		$this->load->view('user/index',$data);
                $this->load->view('user/include/footer');
	}
        
        public function aboutus_c(){
             $page['data'] = $this->uri->segment(1);
                 $this->load->view('user/include/header',$page);
                 $this->load->view('user/include/banner');
                $this->load->view('user/about');
                $this->load->view('user/include/footer');
        }
        
        public function contactus_c(){
             $page['data'] = $this->uri->segment(1);
                 $this->load->view('user/include/header',$page);
                 $this->load->view('user/include/banner');
                $this->load->view('user/contact');
                $this->load->view('user/include/footer');
        }
        public function event_c(){
             $page['data'] = $this->uri->segment(1);
                 $this->load->view('user/include/header',$page);
                 $this->load->view('user/include/banner');
                $this->load->view('user/event');
                $this->load->view('user/include/footer');
        }
         public function faq_c(){
             $page['data'] = $this->uri->segment(1);
                 $this->load->view('user/include/header',$page);
                 $this->load->view('user/include/banner');
                $this->load->view('user/faq');
                $this->load->view('user/include/footer');
        }
         public function gallery_c(){
             $page['data'] = $this->uri->segment(1);
                 $this->load->view('user/include/header',$page);
                 $this->load->view('user/include/banner');
                 
                 //apna
                 $config = array();
        $config["base_url"] = base_url() . "User_c/gallery_c";
        $config["total_rows"] = $this->User_model->record_count();
        $config["per_page"] = 3;
        $config["uri_segment"] = 3;
        
        $config['full_tag_open'] = "<ul class='pagination' style='margin-left: 50%'>";
    $config['full_tag_close'] = '</ul>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active"><a href="#">';
    $config['cur_tag_close'] = '</a></li>';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';



    $config['prev_link'] = '<i class="fa fa-long-arrow-left"></i>Previous Page';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';


    $config['next_link'] = 'Next Page<i class="fa fa-long-arrow-right"></i>';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';

        
        
        $this->pagination->initialize($config);
        
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->User_model->
            fetch_countries($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
                 
                 
                 
                 
                 
                $this->load->view('user/gallery',$data);
                $this->load->view('user/include/footer');
        }
        public function services_c(){
             $page['data'] = $this->uri->segment(1);
                 $this->load->view('user/include/header',$page);
                 $this->load->view('user/include/banner');
                $this->load->view('user/services');
                $this->load->view('user/include/footer');
        }
        public function appointment_submit(){
            if ($this->input->post('fname') && $this->input->post('email')&&$this->input->post('lname')&&$this->input->post('date')&&$this->input->post('time')){
                
            $s1=$this->input->post('fname');
        $s2=$this->input->post('lname');
        $s3=$this->input->post('email');
        $s4=$this->input->post('date');
        $s5=$this->input->post('time');
        $s6=$this->input->post('phone');
        $s7=$this->input->post('adress');
        $data = array(
        'fname' => $s1,
        'lname' => $s2,
        'email' => $s3,
        'date' => $s4,
         'time' => $s5,
            'phone' => $s6,
         'adress' => $s7
);
        $result=$this->db->insert('appointment', $data);
        echo $result;
        }else{
             redirect(base_url());
        }

}

     public function query_submit(){
         if ($this->input->post('qname') && $this->input->post('qemail')&&$this->input->post('qsubject')&&$this->input->post('qdate')&&$this->input->post('qmessage')){
            $this->form_validation->set_rules('qname', 'name', 'trim|required|min_length[3]|max_length[12]');
                $this->form_validation->set_rules('qemail', 'Email', 'trim|required|valid_email');
                $this->form_validation->set_rules('qsubject', 'Subject', 'trim|required|min_length[4]|max_length[12]');
               
                $this->form_validation->set_rules('qmessage', 'Message', 'trim|required|min_length[5]|max_length[100]');
                if ($this->form_validation->run() == TRUE){
            $s1=$this->input->post('qname');
        $s2=$this->input->post('qemail');
        $s3=$this->input->post('qsubject');
        $s4=$this->input->post('qdate');
        $s7=$this->input->post('qmessage');
        $data = array(
        'name' => $s1,
        'email' => $s2,
        'subject' => $s3,
        'date' => $s4,
         'message' => $s7
);
        $result=$this->db->insert('query', $data);
        echo $result;
                }else{
                    redirect(base_url());
                }

}
  else {
 redirect(base_url());

}


        
        }
}