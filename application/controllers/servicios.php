<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicios extends CI_Controller {
  function __construct(){
    parent::__construct();
      
    $this->load->model('servicios_model');
  }


  public function index()
  {
    if($this->session->userdata('username')){
      $this->load->view('home/home');
      $this->load->view('home/mantenimiento/servicios/servicios');
      $this->load->view('home/footer');

    }else{
      header('Location:login');
    }
  }
  public function mostrar(){
    if ($this->input->is_ajax_request()){
      $buscar = $this->input->post('buscar');
      $datos = $this->servicios_model->mostrar($buscar);
      echo json_encode($datos);
    }else{
      show_404();
    }
  }
    
  public function guardar(){
    if ($this->input->is_ajax_request()){
        $serv = $this->input->post('serv');
        $s_pre = $this->input->post('s_pre');
        $data = array(
          'Servicio' => $serv,
          'Precio' => $s_pre,
        );
        $this->servicios_model->guardar($data);
        echo 'Registro guardado exitosamente';
    }else{
      show_404();
    }
  }
}

