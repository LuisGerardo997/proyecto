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
      $this->load->view('home/bar2');
      $data = $this->Clientes_model->select();
      $data1 = $this->Clientes_model->select1();
      $data2 = $this->Clientes_model->select2();
      $resulta = array(
        'tipo_p' => $data,
        'ciudad' => $data1,
        'ec' => $data2,
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
        $ec = $this->input->post('ec');
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
          'cod_persona' => $dni,
          'cod_ciudad_nacimiento' => $ciudad_n,
          'cod_ciudad_direccion' => $ciudad_r,
          'cod_tipo_persona' => $tipo_p,
          'cod_estado_civil' => $ec,
          'nombres' => $nombres,
          'apellido_paterno' => $apellido_p,
          'apellido_materno' => $apellido_m,
          'email' => $email,
          'direccion' =>  $direccion,
          'nro_cuenta_bancaria' => $cuenta_b,
          'nombre_banco' => $entidad_b,
          'tel_domicilio' => $tel_f,
          'tel_movil' => $tel,
          'genero' => $genero,
          'estado' => '0',
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
