<?php
class Parametros_model extends CI_Model{

    function __construct(){
        parent::__construct();
    }
    function mostrar($data){
      $this->db->or_like('Descripcion',$data);
      $this->db->or_like('Valor',$data);

      $consulta = $this->db->get('parametros');
      return $consulta->result();
    }
    function guardar($guardar){
      $this->db->insert('parametros',$guardar);
}
}