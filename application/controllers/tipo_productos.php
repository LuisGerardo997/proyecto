<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tipo_productos extends CI_Controller {
  function __construct(){
    parent::__construct();

    $this->load->model('Tipo_productos_model');
  }


  public function index()
  {
    if($this->session->userdata('username')){
      $this->load->view('home/home');
      $this->load->view('home/mantenimiento/tipo_productos/tipo_productos');
      $this->load->view('home/footer');

    }else{
      header('Location:login');
    }
  }
  public function mostrar(){
    if ($this->input->is_ajax_request()){
      $buscar = $this->input->post('buscar');
      $datos = $this->Tipo_productos_model->mostrar($buscar);
      echo json_encode($datos);
    }else{
      show_404();
    }
  }

  public function guardar(){
    if ($this->input->is_ajax_request()){
        $Cod_Tipo_Productos = $this->input->post('Cod_Tipo_Productos');
        $Tipo_Productos = $this->input->post('Tipo_Productos');
        $Descripcion = $this->input->post('Descripcion');
        $data = array(
          'Cod_Tipo_Producto' => $Cod_Tipo_Productos,
          'Tipo_Producto' => $Tipo_Productos,
          'Descripcion' => $Descripcion,
        );
        $this->Tipo_productos_model->guardar($data);
        echo 'Registro guardado exitosamente';
    }else{
      show_404();
    }
  }
}
