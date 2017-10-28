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
      $this->load->helper('form');
      $this->load->view('home/home');
      $this->load->view('home/bar2');
      $data = $this->Habitaciones_sub_model->select();
      $resulta = array(
        'registro' => $data,
      );
      $this->load->view('home/mantenimiento/habitaciones/Habitaciones_sub',$resulta);
      $this->load->view('home/footer');

    }else{
      header('Location:login');
    }
  }
  public function mostrar(){
    if ($this->input->is_ajax_request()){
      $buscar = $this->input->post('buscar');
      $datos = $this->Habitaciones_sub_model->mostrar($buscar);
      echo json_encode($datos);
    }else{
      show_404();
    }
  }
  public function guardar(){
    if ($this->input->is_ajax_request()){
        $habitacion = $this->input->post('habitacion');
        $tipo = $this->input->post('tipo');
        $piso = $this->input->post('piso');
        $data = array(
          'cod_habitacion' => $habitacion,
          'cod_tipo_habitacion' => $tipo,
          'piso' => $piso,
        );
        $this->Habitaciones_sub_model->guardar($data);
        echo 'Registro guardado exitosamente';
    }else{
      show_404();
    }
  }

  function actualizar(){
    if ($this->input->is_ajax_request()){
      $idselect = $this->input->post('idselect');
      $habitacion = $this->input->post('habitacion_e');
      $tipo = $this->input->post('tipo');
      $piso = $this->input->post('piso_e');
      $data = array(
        'cod_habitacion' => $habitacion,
        'cod_tipo_habitacion' => $tipo,
        'piso' => $piso,
      );
      if($this->Habitaciones_sub_model->actualizar($idselect, $data) == true){
        echo 'Registro actualizado. =D';
      }else{
        echo 'Actualización de registro fallida T_T.';
      }
    }else{
      show_404();
    }
  }

  function eliminar(){
    if ($this->input->is_ajax_request()){
      $idselect = $this->input->post('id');
      $data = array(
        'estado' => '0',
      );
      if($this->Habitaciones_sub_model->eliminar($idselect, $data) == true){
        echo 'Registro eliminado :D';
      }else{
        echo 'Falló al eliminar el registro D:';
      }
    }else{
      show_404();
    }
}
}
