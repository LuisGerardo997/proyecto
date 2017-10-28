<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Area extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('area_model');
  }


  public function index()
  {
    if($this->session->userdata('username')){
      $this->load->view('home/home');
      $this->load->view('home/mantenimiento/area/area');
      $this->load->view('home/footer');

    }else{
      header('Location:login');
    }
  }
  public function mostrar(){
    if ($this->input->is_ajax_request()){
      $buscar = $this->input->post('buscar');
      $datos = $this->area_model->mostrar($buscar);
      echo json_encode($datos);
    }else{
      show_404();
    }
  }
  public function guardar(){
    if ($this->input->is_ajax_request()){
        $Area = $this->input->post('Area');
        $Descripcion = $this->input->post('Descripcion');
        $data = array(
          'Area' => $Area,
          'Descripcion' => $Descripcion,
        );
        $this->area_model->guardar($data);
        echo 'Registro guardado exitosamente';
    }else{
      show_404();
    }
  }
}
