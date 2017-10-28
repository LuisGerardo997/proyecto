<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cargo extends CI_Controller {
  function __construct(){
    parent::__construct();
  }


  public function index()
  {
    if($this->session->userdata('username')){
      $this->load->view('home/home');
      $this->load->view('home/mantenimiento/cargo/cargo');
      $this->load->view('home/footer');

    }else{
      header('Location:login');
    }
  }
  public function mostrar(){
    if ($this->input->is_ajax_request()){
      $buscar = $this->input->post('buscar');
      $datos = $this->cargo_model->mostrar($buscar);
      echo json_encode($datos);
    }else{
      show_404();
    }
  }
  public function guardar(){
    if ($this->input->is_ajax_request()){
        $Cod_Area = $this->input->post('Cod_Area');
        $Descripcion = $this->input->post('Descripcion');
        $Cargo = $this->input->post('Cargo');
        $data = array(
          'Cod_Area' => $Cod_Area,
          'Descripcion' => $Descripcion,
          'Cargo' => $Cargo,
        );
        $this->cargo_model->guardar($data);
        echo 'Registro guardado exitosamente';
    }else{
      show_404();
    }
  }
}
