<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class akunsaya extends CI_Controller {
 
    function __construct(){
        parent::__construct();
        $this->load->model('m_customer');
    }
     
    public function index()
    {
        $this->load->view("t_users/header");
        if($this->session->logged_in == FALSE){
           $this->load->view("v_users/v_akunsaya");
         }else{
            redirect('editakun');
        }
 
        $this->load->view("t_users/footer");
      
      
       
    }
 
    public function Login()
    {
        $email_customer       = $this->input->post('email_customer');
        $password_customer       = $this->input->post('password_customer');
 
        $status         = $this->m_customer->login($email_customer,($password_customer));
        if($status){
            $session = array(
                'nama'          => $email_customer,
                'logged_in'     => TRUE
                );
            $this->session->set_userdata($session);
            $this->session->unset_userdata('gagal');
            redirect('akunsaya');
        }else{
            $session = array('gagal' => 1);
            $this->session->set_userdata($session);
            redirect('akunsaya');
        }
    }
 
    public function Logout()
    {
        $this->session->sess_destroy();
        redirect('akunsaya');
    }
}