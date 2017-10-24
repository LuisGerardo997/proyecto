<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tipo_personas extends CI_Controller {
  function __construct(){
    parent::__construct();

    $this->load->model('Tipo_personas_model');
  }


  public function index()
  {
    if($this->session->userdata('username')){
      $this->load->view('home/home');
      $this->load->view('home/mantenimiento/registros/tipo_personas');
      $this->load->view('home/footer');

    }else{
      header('Location:login');
    }
  }
  public function mostrar(){
    if ($this->input->is_ajax_request()){
      $buscar = $this->input->post('buscar');
      $datos = $this->Tipo_personas_model->mostrar($buscar);
      echo json_encode($datos);
    }else{
      show_404();
    }
  }

  public function guardar(){
    if ($this->input->is_ajax_request()){
        $tipo = $this->input->post('tipo');
        $data = array(
          'Tipo_Persona' => $tipo,
        );
        $this->Tipo_personas_model->guardar($data);
        echo 'Registro guardado exitosamente';
    }else{
      show_404();
    }
  }
}
