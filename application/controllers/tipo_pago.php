<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tipo_pago extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('tipo_pago_model');
  }


  public function index()
  {
    if($this->session->userdata('username')){
      $this->load->view('home/home');
      $this->load->view('home/mantenimiento/tipo_pago/tipo_pago');
      $this->load->view('home/footer');

    }else{
      header('Location:login');
    }
  }
  public function mostrar(){
    if ($this->input->is_ajax_request()){
      $buscar = $this->input->post('buscar');
      $datos = $this->tipo_pago_model->mostrar($buscar);
      $datos = $this->tipo_pago_model->mostrar($buscar);
      echo json_encode($datos);
    }else{
      show_404();
    }
  }
  public function guardar(){
    if ($this->input->is_ajax_request()){
        $FP = $this->input->post('FP');
        $FP_DES = $this->input->post('FP_DES');
        $data = array(
          'Forma_Pago' => $FP,
          'Descripcion' => $FP_DES,
        );
        $this->tipo_pago_model->guardar($data);
        echo 'Registro guardado exitosamente';
    }else{
      show_404();
    }
  }
}
