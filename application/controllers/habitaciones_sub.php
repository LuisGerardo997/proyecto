<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Habitaciones_sub extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('Habitaciones_sub_model');
  }


  public function index()
  {
    if($this->session->userdata('username')){
      $this->load->view('home/home');
      $data0 = $this->Habitaciones_sub->select()
      $option->form_dropdown('tipo',$data0)
      $this->load->view('home/mantenimiento/habitaciones/Habitaciones_sub');
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
}


  public function guardar(){
    if ($this->input->is_ajax_request()){
        $tipo = $this->input->post('tipo');
        $precio = $this->input->post('precio');
        $capacidad = $this->input->post('capacidad');
        $data = array(
          'Tipo_Habitacion' => $tipo,
          'Precio_Tipo_Habitacion' => $precio,
          'Max_H' => $capacidad,
        );
        $this->tipo_habitaciones_model->guardar($data);
        echo 'Registro guardado exitosamente';
    }else{
      show_404();
    }
  }
}
