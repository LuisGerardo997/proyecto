<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tipo_transaccion extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('tipo_habitaciones_model');
  }


  public function index()
  {
    if($this->session->userdata('username')){
      $this->load->view('home/home');
      $this->load->view('home/mantenimiento/tipo_transaccion/tipo_transaccion');
      $this->load->view('home/footer');

    }else{
      header('Location:login');
    }
  }
  public function mostrar(){
    if ($this->input->is_ajax_request()){
      $buscar = $this->input->post('buscar');
      $datos = $this->tipo_habitaciones_model->mostrar($buscar);
      echo json_encode($datos);
    }else{
      show_404();
    }
  }
  public function guardar(){
    if ($this->input->is_ajax_request()){
        $TT =  $this->input->post('TT');
        $TT_DES = $this->input->post('TT_DES');
        $data = array(
          'Tipo_Transaccion' => $TT,
          'Descripcion' => $TT_DES,
        );
        $this->tipo_habitaciones_model->guardar($data);
        echo 'Registro guardado exitosamente';
    }else{
      show_404();
    }
  }
}
