<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tipo_movimiento extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('tipo_movimiento_model');
  }


  public function index()
  {
    if($this->session->userdata('username')){
      $this->load->view('home/home');
      $this->load->view('home/mantenimiento/tipo_movimiento/tipo_movimiento');
      $this->load->view('home/footer');

    }else{
      header('Location:login');
    }
  }
  public function mostrar(){
    if ($this->input->is_ajax_request()){
      $buscar = $this->input->post('buscar');
      $datos = $this->tipo_movimiento_model->mostrar($buscar);
      echo json_encode($datos);
    }else{
      show_404();
    }
  }
  public function guardar(){
    if ($this->input->is_ajax_request()){
        $TipodeMovimiento = $this->input->post('TipodeMovimiento');
        $data = array(
          'Tipo_Movimiento' => $TipodeMovimiento,
        );
        $this->tipo_movimiento_model->guardar($data);
        echo 'Registro guardado exitosamente';
    }else{
      show_404();
    }
  }
}
