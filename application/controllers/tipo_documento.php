<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tipo_documento extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('tipo_habitaciones_model');
  }


  public function index()
  {
    if($this->session->userdata('username')){
      $this->load->view('home/home');
      $this->load->view('home/mantenimiento/tipo_documento/tipo_documento');
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
        $td_des = $this->input->post('td_des');
        $ns = $this->input->post('ns');
        $nc = $this->input->post('nc');
        $data = array(
          'Descripcion' => $td_des,
          'Nro_Serie' => $ns,
          'Nro_Correlativo' => $nc,
        );
        $this->tipo_habitaciones_model->guardar($data);
        echo 'Registro guardado exitosamente';
    }else{
      show_404();
    }
  }
}
