<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class profil extends CI_Controller {
 
    function __construct(){
        parent::__construct();
        $this->load->model('m_user');

    }
     
    public function index()
    {
        
        $id_user = $this->session->id_user;
        $x['data_user'] = $this->m_user->tampil_user($id_user);

        $this->load->view("t_admin/header");
        $this->load->view("t_admin/navbar");
        $this->load->view("v_admin/v_profil",$x);
        $this->load->view("t_admin/footer");
       
    }
}
?>