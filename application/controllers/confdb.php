<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Confdb extends CI_Controller {

	public function index()
	{
        $this->load->model('login_model');   
        if(isset($_POST['motor'])){
            $this->load->database($_POST['motor']);
            $this->login_model->configurardb($_POST['motor']);
        }
        $this->load->view('confdb');   
            
	}
}