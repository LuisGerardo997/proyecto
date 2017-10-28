<?php
class Area_model extends CI_Model{

    function __constuct(){
        parent::__construct();
    }
    function mostrar($data){
      $this->db->like('Area',$data);
      $this->db->or_like('Descripcion',$data);
      $consulta = $this->db->get('Area');
      return $consulta->result();
    }
    function guardar($guardar){
      $this->db->insert('Area',$guardar);
    }
}
