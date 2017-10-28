<?php
class Forma_pago_model extends CI_Model{

    function __constuct(){
        parent::__construct();
    }
    function mostrar($data){
      $this->db->or_like('Forma_Pago',$data);
      $this->db->or_like('Descripcion',$data);

      $consulta = $this->db->get('forma_pago');
      return $consulta->result();
    }
    function guardar($guardar){
      $this->db->insert('forma_pago',$guardar);
}
}