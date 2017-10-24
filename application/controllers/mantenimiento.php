<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mantenimiento extends CI_Controller {
  function __construct(){
    parent::__construct();
  }

  public function personas(){
    if($this->session->userdata('username')){
      $this->load->view('home/home');
      $this->load->view('home/mantenimiento/registros/personas');
      $this->load->view('home/footer');
    }else{
        header('Location:login');
    }

  }

  public function habitaciones(){
    if($this->session->userdata('username')){
      $this->load->view('home/home');
      $this->load->view('home/mantenimiento/habitaciones/habitaciones');
      $this->load->view('home/footer');
    }else{
        header('Location:login');
    }

  }
}
