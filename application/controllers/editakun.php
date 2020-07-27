<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class editakun extends CI_Controller {
 
    function __construct(){
        parent::__construct();
        $this->load->model('m_user');

    }
     
    public function index()
    {
        
        $id_user = $this->session->id_user;
        $x['data_user'] = $this->m_user->tampil_user($id_user);

        $this->load->view("t_users/header");
        $this->load->view("v_users/v_editakun",$x);
        $this->load->view("t_users/footer");
       
    }
    public function edit_akun(){

        $id_user=$this->input->post('id_user');
        $nama_user=$this->input->post('nama_user');
        $email_user=$this->input->post('email_user');
        $password_user=$this->input->post('password_user');
        $tanggallahir_user=$this->input->post('tanggallahir_user');
        $alamat_user=$this->input->post('alamat_user');
        $nohp_user=$this->input->post('nohp_user');
        $jeniskelamin_user=$this->input->post('jeniskelamin_user');
        $level_user=$this->input->post('level_user');
        $this->m_user->edit_user1($id_user,$nama_user,$email_user,$password_user,$tanggallahir_user,$alamat_user,$nohp_user,$jeniskelamin_user);
        redirect('editakun');
    }
}
?>