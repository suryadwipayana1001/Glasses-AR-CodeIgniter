<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class login extends CI_Controller {
 
    function __construct(){
        parent::__construct();
        $this->load->model('m_admin');
    }
     
    public function index()
    {
    	$this->load->view("t_admin/header");
      
       
        if($this->session->logged_in == FALSE){
            $this->load->view("v_admin/v_login");
        }else{
            redirect('beranda');
        }
 
       
    }
 
    public function Login()
    {
        $username_admin       = $this->input->post('username_admin');
        $password_admin       = $this->input->post('password_admin');
 
        $status         = $this->m_admin->login($username_admin,($password_admin));
        if($status){
            $session = array(
                'nama'          => $username_admin,
                'logged_in'     => TRUE
                );
            $this->session->set_userdata($session);
            $this->session->unset_userdata('gagal');
            redirect('login');
        }else{
            $session = array('gagal' => 1);
            $this->session->set_userdata($session);
            redirect('login');
        }
    }
 
    public function Logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}