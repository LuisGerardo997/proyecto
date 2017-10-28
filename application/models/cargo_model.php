<?php
class Cargo_model extends CI_Model{

    function __constuct(){
        parent::__construct();
    }
    function mostrar($data){
      $this->db->like('Cod_Cargo',$data);
      $this->db->or_like('Cod_Area',$data);
      $this->db->or_like('Descripcion',$data);
      $this->db->or_like('Cargo',$data);
      $consulta = $this->db->get('cargo');
      return $consulta->result();
    }
    function guardar($guardar){
      $num = $this->db->count_all('cargo');
      $num = $num+1;
      $array1 = array(
        'Cod_Cargo' => $num,
      );
      $registro = array_merge($array1,$guardar);
      $this->db->insert('cargo',$registro);
    }
}
