<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tipo_personas extends CI_Controller {
    function __construct(){
        parent::__construct();
    }


	public function index()
	{
        if($this->session->userdata('username')){
            $this->load->view('home/home');
            $this->load->view('home/mantenimiento/registros/tipo_personas');
            $this->load->view('home/footer');

        }else{
            header('Location:login');
        }
    }
    public function mostrar(){
      if ($this->input->is_ajax_request()){
        $buscar = $this->input->post('buscar');
        $datos = $this->Personas_model->mostrar($buscar);
        echo json_encode($datos);
      }else{
        show_404();
      }
    }
}
