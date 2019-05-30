<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {
    
    public function register()
	{
            $page['data'] = $this->uri->segment(1);
                 $this->load->view('admin/include/header',$page);
		$this->load->view('admin/register');
                $this->load->view('admin/include/footer');
	}
     public function login()
	{
            $page['data'] = $this->uri->segment(1);
		$this->load->view('admin/login');
                $this->load->view('admin/include/footer');
	}
      public function register_submit(){
        $s1=$this->input->post('fname');
        $s2=$this->input->post('lname');
        $s3=$this->input->post('email');
        $s4=$this->input->post('cemail');
        $s5=$this->input->post('password');
       $data = array(
        'fname' => $s1,
        'lname' => $s2,
        'email' => $s3,
        'password' => $s5,
    );
        
       $result=$this->adminModel->registerSubmitModel($data); 
       if($result > 0){
            $this->session->set_flashdata('item', "yes");
       } else {
           $this->session->set_flashdata('item', "no");
       }
        redirect(base_url('adminRegister'),'refresh');

    } 
    
    public function loginValidation(){
           
               $this->load->model('adminModel');
               $result=$this->adminModel->loginSubmitModel();
               //echo $result;
              if($result==1){
                  $a=$this->input->post('email');
                  $query=$this->db->query("select * from admin where email = '$a'");
                  foreach ($query->result() as $row)
{
        $name= $row->fname;
        
}
                  $data = array(
                  'email' => $this->input->post('email'),
                  'name' => $name,
                    'is_logged_in' => 1
                );
                  $this->session->set_userdata($data);
                  redirect('adminDash');
              }else{
                 $this->session->set_flashdata('item', "no");
                  redirect('adminLogin','refresh');
                  //$this->load->view(base_url()+'adminLogin',$data);
              }
               
           }
//                $data = array(
//                  'email' => $this->input->post('email'),
//                    'is_logged_in' => 1
//                );
//                $this->session->set_userdata($data);
//                echo"ho gya";
//                //redirect('main/members');
//            }else{
//                echo"nhi huA";
//                //$this->load->view('adminLogin');
//            }
           
        
        
//       public function validate_credentials(){
//           $this->load->model('adminModel');
//            if ($this->adminModel->loginSubmitModel()) {
//                return true;
//            }else{
//                $this->form_validation->set_message('validate_credentials', 'Incorrect username/password');
//                return false;
//            }
//       }
}

?>