<?php
class Ubigeo_model extends CI_Model{

    function __constuct(){
        parent::__construct();
    }
    function mostrar($data){
      $this->db->like('Cod_Ciudad',$data);
      $this->db->or_like('Departamento',$data);
      $this->db->or_like('Provincia',$data);
      $this->db->or_like('Ciudad',$data);
      $consulta = $this->db->get('ubigeo');
      return $consulta->result();
    }
    function guardar($guardar){
      $this->db->insert('ubigeo',$guardar);
    }
}
