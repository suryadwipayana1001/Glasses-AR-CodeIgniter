<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class akunsaya extends CI_Controller {
 
    function __construct(){
        parent::__construct();
        $this->load->model('m_user');
        $this->load->model('m_keranjang');
    }
     
    public function index()
    {
        if($this->session->logged_in == TRUE){
        $id_user = $this->session->id_user; 
        var_dump($id_user);

         $carts = $this->m_keranjang->cek_user($id_user);
                foreach ($carts->result_array() as $i) {
                    $cartku=$i['cart'];
                    $cartku=unserialize($cartku);
                }
            var_dump($cartku);
            $this->cart->insert($cartku);
        }
        $this->load->view("t_users/header");
        if($this->session->logged_in == FALSE){
           $this->load->view("v_users/v_akunsaya");
         }else{
             $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            Berhasil Login
            </div>
            ');
            redirect('akunsaya/editakun');
        }
 
        $this->load->view("t_users/footer");
    }
 
    public function Loginakun()
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

            redirect('akunsaya');
        }else{
            $session = array('gagal' => 1);
            $this->session->set_userdata($session);
          $this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            Masukan Email atau Password dengan Benar
            </div>
            ');
            redirect('akunsaya');
        }
    }
 
    public function Logoutakun()
    {

        $this->session->sess_destroy();
        redirect('akunsaya');
    }
    public function daftar()
    {
        $this->load->view("t_users/header");
        $this->load->view("v_users/v_daftar");      
        $this->load->view("t_users/footer");

    }
function simpan_user(){
        $id_user=$this->input->post('id_user');
        $nama_user=$this->input->post('nama_user');
        $email_user=$this->input->post('email_user');
        $password_user=$this->input->post('password_user');
        $tanggallahir_user=$this->input->post('tanggallahir_user');
        $alamat_user=$this->input->post('alamat_user');
        $nohp_user=$this->input->post('nohp_user');
        $jeniskelamin_user=$this->input->post('jeniskelamin_user');
        $level_user=$this->input->post('level_user');
        $cek_user=$this->m_user->cek_user($email_user);
        $cek_email=$cek_user->num_rows();
        if($cek_email>0){
            $this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            Data Email Sudah Terdaftar
            </div>
            ');
            redirect('akunsaya/daftar');
        }else{
           
            $this->m_user->simpan_user($id_user,$nama_user,$email_user,$password_user,$tanggallahir_user,$alamat_user,$nohp_user,$jeniskelamin_user,$level_user);
             $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            Berhasil Melakukan Pendaftaran
            </div>');
            redirect('akunsaya');
        }
         }
  
   public function editakun()
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
        $cek_user=$this->m_user->cek_user($email_user);
        $cek_email=$cek_user->num_rows();
        if($cek_email>0){
            $this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            Data Email Sudah Terdaftar
            </div>
            ');
            redirect('akunsaya/editakun');
        }else{

        $this->m_user->edit_user1($id_user,$nama_user,$email_user,$password_user,$tanggallahir_user,$alamat_user,$nohp_user,$jeniskelamin_user);
        $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         Data Berhasil Dirubah
            </div>
            ');
        redirect('akunsaya/editakun');
    }
    }      
}