<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('Clientes_model');
  }


  public function index()
  {
    if($this->session->userdata('username')){
      $this->load->view('home/home');
      $data = $this->Clientes_model->select();
      $data1 = $this->Clientes_model->select1();
      $resulta = array(
        'tipo_p' => $data,
        'ciudad' => $data1,
      );
      $this->load->view('home/mantenimiento/registros/clientes',$resulta);
      $this->load->view('home/footer');

    }else{
      header('Location:login');
    }
  }
  public function mostrar(){
    if ($this->input->is_ajax_request()){
      $buscar = $this->input->post('buscar');
      $datos = $this->Clientes_model->mostrar($buscar);
      echo json_encode($datos);
    }else{
      show_404();
    }
  }
  public function guardar(){
    if ($this->input->is_ajax_request()){
        $dni = $this->input->post('dni');
        $nombres = $this->input->post('nombres');
        $apellido_p = $this->input->post('apellido_p');
        $apellido_m = $this->input->post('apellido_m');
        $genero = $this->input->post('genero');
        $tipo_p = $this->input->post('tipo_p');
        $ciudad_n = $this->input->post('ciudad_n');
        $ciudad_r = $this->input->post('ciudad_r');
        $cuenta_b = $this->input->post('cuenta_b');
        $entidad_b = $this->input->post('entidad_b');
        $email = $this->input->post('email');
        $direccion = $this->input->post('direccion');
        $tel = $this->input->post('tel');
        $tel_f = $this->input->post('tel_f');
        $capacidad = $this->input->post('capacidad');
        $data = array(
          'Cod_Persona' => $dni,
          'Cod_Ciudad_Nacimiento' => $ciudad_n,
          'Cod_Ciudad_Direccion' => $ciudad_r,
          'Cod_Tipo_Persona' => $tipo_p,
          'Nombres' => $nombres,
          'Apellido_Paterno' => $apellido_p,
          'Apellido_Materno' => $apellido_m,
          'Email' => $email,
          'Direccion' =>  $direccion,
          'Nro_Cuenta_Bancaria' => $cuenta_b,
          'Nombre_Banco' => $entidad_b,
          'Tel_Domicilio' => $tel_f,
          'Tel_Movil' => $tel,
          'Genero' => $genero,
          'Estado' => '0',
        );
        if ($this->Clientes_model->guardar($data)){
          echo 'Registro guardado exitosamente';
        }else{
          echo 'Registro fallido';
        }
      
    }else{
      show_404();
    }
  }
}
