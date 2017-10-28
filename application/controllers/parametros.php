<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parametros extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('parametros_model');
  }


  public function index()
  {
    if($this->session->userdata('username')){
      $this->load->view('home/home');
      $this->load->view('home/mantenimiento/parametros/parametros');
      $this->load->view('home/footer');

    }else{
      header('Location:login');
    }
  }
  public function mostrar(){
    if ($this->input->is_ajax_request()){
      $buscar = $this->input->post('buscar');
      $datos = $this->parametros_model->mostrar($buscar);
      echo json_encode($datos);
    }else{
      show_404();
    }
  }
  public function guardar(){
    if ($this->input->is_ajax_request()){
        $p_des = $this->input->post('p_des');
        $valor = $this->input->post('valor');
        $data = array(
          'Descripcion' => $p_des,
          'Valor' => $valor,
        );
        $this->parametros_model->guardar($data);
        echo 'Registro guardado exitosamente';
    }else{
      show_404();
    }
  }
}
