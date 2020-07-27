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
            redirect('editakun');
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
            redirect('akunsaya');
        }
    }
 
    public function Logoutakun()
    {
        $this->session->sess_destroy();
        redirect('akunsaya');
    }
}