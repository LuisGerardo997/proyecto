<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ubigeo extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('ubigeo_model');
  }


  public function index()
  {
    if($this->session->userdata('username')){
      $this->load->view('home/home');
      $this->load->view('home/mantenimiento/ubigeo/ubigeo');
      $this->load->view('home/footer');

    }else{
      header('Location:login');
    }
  }
  public function mostrar(){
    if ($this->input->is_ajax_request()){
      $buscar = $this->input->post('buscar');
      $datos = $this->ubigeo_model->mostrar($buscar);
      echo json_encode($datos);
    }else{
      show_404();
    }
  }
  public function guardar(){
    if ($this->input->is_ajax_request()){
        $Cod =$this->input->post('Cod');
        $Departamento=$this->input->post('Departamento');
        $Nombre=$this->input->post('Nombre');
        $Ciudad=$this->input->post('Ciudad');
        $var = array(
          'Cod_Ciudad' => $Cod,
          'Departamento' => $Departamento,
          'Provincia' => $Nombre,
          'Ciudad' => $Ciudad,
        );
        $this->ubigeo_model->guardar($var);
        echo 'Registro guardado exitosamente';
    }else{
      show_404();
    }
  }
}
