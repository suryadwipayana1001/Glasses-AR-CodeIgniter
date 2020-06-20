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
}
?>