<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    function __construct(){
        parent::__construct();
    }


	public function index()
	{
        if($this->session->userdata('username')){
            $user = $this->session->userdata('username');
            $this->load->model('home_model');
            $this->home_model->cargo($user);
            $cargo = $this->session->userdata('cargo');
            $data = array('cargo' => '$cargo');
            $this->load->view('home/home',$data);
            $this->load->view('home/bar1');
            $this->load->view('home/inicio');
            $this->load->view('home/footer');

        }else{
            header('Location:login');
        }
    }
    public function gestionar_db(){
      $this->load->view('panel_control');
    }
}
