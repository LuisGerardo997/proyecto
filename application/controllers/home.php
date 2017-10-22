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
            $this->load->view('home/home');
            $this->load->view('home/mantenimiento');
            $this->load->view('home/footer');
            
        }else{
            header('Location:login');
        }
    }
    public function mantenimiento(){
        $this->load->view('home/home');
        $this->load->view('home/footer');
    
    }
}