<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class login extends CI_Controller {
 
    function __construct(){
        parent::__construct();
        $this->load->model('m_user');
    }
     
    public function index()
    {
    	$this->load->view("t_admin/header");
       
        if($this->session->logged_in == FALSE){

            $this->load->view("v_admin/v_login");
        }else{
            $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            Login Sukses
            </div>
            ');
            redirect('beranda');
        }
 
       
    }
 
    public function Login()
    {
        $email_user       = $this->input->post('email_user');
        $password_user       = $this->input->post('password_user');
 
        $status         = $this->m_user->login($email_user,($password_user));
        if($status){
            foreach ($status->result_array()as $i) {
                $id_user=$i['id_user'];
                $level = $i['level_user'];
            }
            $session = array(
                'nama'          => $email_user,
                'logged_in'     => TRUE,
                'id_user'       => $id_user,
                'level'         => $level 
                );
            $this->session->set_userdata($session);
            $this->session->unset_userdata('gagal');
            redirect('login');
        }else{
            $session = array('gagal' => 1);
            $this->session->set_userdata($session);
              $this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            Masukan Email dan Password dengan Benar
            </div>
            ');
            redirect('login');
        }
    }
 
    public function Logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}