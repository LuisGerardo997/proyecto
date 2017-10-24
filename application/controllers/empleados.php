<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empleados extends CI_Controller {
  function __construct(){
    parent::__construct();
  }


  public function index()
  {
    if($this->session->userdata('username')){
      $this->load->view('home/home');
      $this->load->view('home/mantenimiento/registros/empleados');
      $this->load->view('home/footer');

    }else{
      header('Location:login');
    }
  }
  public function mostrar(){
    if ($this->input->is_ajax_request()){
      $buscar = $this->input->post('buscar');
      $this->load->model('empleados_model');
      $datos = $this->empleados_model->mostrar($buscar);
      echo json_encode($datos);
    }else{
      show_404();
    }
  }
}
