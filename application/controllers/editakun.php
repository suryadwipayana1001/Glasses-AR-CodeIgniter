<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class editakun extends CI_Controller {
 
    function __construct(){
        parent::__construct();
        $this->load->model('m_customer');

    }
     
    public function index()
    {
        $x['data']=$this->m_customer->show_customer();
        $this->load->view("t_users/header");
        $this->load->view("v_users/v_editakun",$x);
        $this->load->view("t_users/footer");
       
    }
        function dataakun(){
        $id_customer=$this->input->post('id_customer');
        $nama_customer=$this->input->post('nama_customer');
        $email_customer=$this->input->post('email_customer');
        $password_customer=$this->input->post('password_customer');
        $tanggallahir_customer=$this->input->post('tanggallahir_customer');
        $this->m_customer->edit_customer($id_customer,$nama_customer, $email_customer,$password_customer,$tanggallahir_customer);
        redirect('editakun');
}
}
?>