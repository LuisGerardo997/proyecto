<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tipo_habitaciones extends CI_Controller {
  function __construct(){
    parent::__construct();
  }


  public function index()
  {
    if($this->session->userdata('username')){
      $this->load->view('home/home');
      $this->load->view('home/mantenimiento/habitaciones/tipo_habitaciones');
      $this->load->view('home/footer');

    }else{
      header('Location:login');
    }
  }
  public function mostrar(){
    if ($this->input->is_ajax_request()){
      $buscar = $this->input->post('buscar');
      $this->load->model('tipo_habitaciones_model');
      $datos = $this->tipo_habitaciones_model->mostrar($buscar);
      echo json_encode($datos);
    }else{
      show_404();
    }
  }
}
