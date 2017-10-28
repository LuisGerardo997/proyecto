<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ofertas extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('ofertas_model');
  }


  public function index()
  {
    if($this->session->userdata('username')){
      $this->load->view('home/home');
      $this->load->view('home/mantenimiento/ofertas/ofertas');
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
  public function guardar(){
    if ($this->input->is_ajax_request()){
        $Oferta = $this->input->post('Oferta');
        $Descuento = $this->input->post('Descuento');
        $FechaInicio = $this->input->post('FechaInicio');
        $FechaFinal = $this->input->post('FechaFinal');
        $data = array(
          'Oferta' => $Oferta,
          'Descuento' => $Descuento,
          'Fecha_Inicio' => $FechaInicio,
          'Fecha_Fin' => $FechaFinal,
            
        );
        $this->tipo_habitaciones_model->guardar($data);
        echo 'Registro guardado exitosamente';
    }else{
      show_404();
    }
  }
}
