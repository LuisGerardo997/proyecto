<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Caja extends CI_Controller {
  function __construct(){
    parent::__construct();
  }


  public function index()
  {
    if($this->session->userdata('username')){
      $this->load->view('home/home');
      $this->load->view('home/mantenimiento/caja/caja');
      $this->load->view('home/footer');

    }else{
      header('Location:login');
    }
  }
  public function mostrar(){
    if ($this->input->is_ajax_request()){
      $buscar = $this->input->post('buscar');
      $datos = $this->caja_model->mostrar($buscar);
      echo json_encode($datos);
    }else{
      show_404();
    }
  }
  public function guardar(){
    if ($this->input->is_ajax_request()){
        $NumerodeCaja = $this->input->post('NumerodeCaja');
        $Descripcion = $this->input->post('Descripcion');
        $data = array(
          'Nro_Caja' => $NumerodeCaja,
          'Descripcion' => $Descripcion,
        );
        $this->caja_model->guardar($data);
        echo 'Registro guardado exitosamente';
    }else{
      show_404();
    }
  }
}
