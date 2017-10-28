<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto_1 extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('productos_model');
  }


  public function index()
  {
    if($this->session->userdata('username')){
      $this->load->view('home/home');
      $this->load->view('home/mantenimiento/producto_1/producto_1');
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
        $Cod_Productos = $this->input->post('Cod_Productos');
        $Cod_Marca = $this->input->post('Cod_Marca');
        $Cod_Tipo_Producto = $this->input->post('Cod_Tipo_Producto');
        $Producto = $this->input->post('Producto');
        $Descripcion = $this->input->post('Descripcion');
        $Precio_Producto = $this->input->post('Precio_Producto');
        $Stock_Producto = $this->input->post('Stock_Producto');
        $Stock_Minimo = $this->input->post('Stock_Minimo');
        $Stock_Máximo = $this->input->post('Stock_Máximo');
        $data = array(
          'Cod_Producto' => $Cod_Productos,
          'Cod_Marca' => $Cod_Marca,
          'Cod_Tipo_Producto' => $Cod_Tipo_Producto,
          'Producto' => $Producto,
          'Descripcion' => $Descripcion,
          'Precio_Producto' => $Precio_Producto,
          'Stock_Producto' => $Stock_Producto,
          'Stock_Minimo' => $Stock_Minimo,
          'Stock_Maximo' => $Stock_Máximo,
        );
        $this->tipo_habitaciones_model->guardar($data);
        echo 'Registro guardado exitosamente';
    }else{
      show_404();
    }
  }
}
