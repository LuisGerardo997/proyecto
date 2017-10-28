<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proveedores extends CI_Controller {
  function __construct(){
    parent::__construct();

    $this->load->model('Proveedores_model');
  }


  public function index()
  {
    if($this->session->userdata('username')){
      $this->load->view('home/home');
      $this->load->view('home/mantenimiento/proveedores/proveedores');
      $this->load->view('home/footer');

    }else{
      header('Location:login');
    }
  }
  public function mostrar(){
    if ($this->input->is_ajax_request()){
      $buscar = $this->input->post('buscar');
      $datos = $this->Proveedores_model->mostrar($buscar);
      echo json_encode($datos);
    }else{
      show_404();
    }
  }

  public function guardar(){
    if ($this->input->is_ajax_request()){
        $PR=$this->input->post('PR');
        $CPS=$this->input->post('CPS');
        $CC=$this->input->post('CC');
        $RUC=$this->input->post('RUC');
        $RSO=$this->input->post('RSO');
        $PDES=$this->input->post('PDES');
        $data = array(
          'Cod_Proveedor' => $PR,
          'Cod_Persona' => $CPS,
          'Cod_Ciudad' => $CC,
          'RUC' => $RUC,
          'Razon_Social' => $RSO,
          'Descripcion' => $PDES,
        );
        $this->Proveedores_model->guardar($data);
        echo 'Registro guardado exitosamente';
    }else{
      show_404();
    }
  }
}
