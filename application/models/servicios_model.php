<?php
class Servicios_model extends CI_Model{

    function __construct(){
        parent::__construct();
    }
    function mostrar($data){
      $this->db->or_like('Servicio',$data);
      $this->db->or_like('Precio',$data);

      $consulta = $this->db->get('servicio');
      return $consulta->result();
    }
    function guardar($guardar){
     $this->db->insert('servicio',$guardar);
}
}