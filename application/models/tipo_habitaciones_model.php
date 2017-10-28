<?php
class Tipo_habitaciones_model extends CI_Model{

    function __constuct(){
        parent::__construct();
    }
    function mostrar($data){
      $this->db->like('cod_tipo_habitacion',$data);
      $this->db->or_like('tipo_habitacion',$data);
      $this->db->or_like('precio_tipo_habitacion',$data);
      $this->db->or_like('max_h',$data);
      $consulta = $this->db->get('tipo_habitacion');
      return $consulta->result();
    }
    function guardar($guardar){
      $num = $this->db->count_all('tipo_habitacion');
      $num = $num+1;
      $array1 = array(
        'cod_tipo_habitacion' => $num,
      );
      $registro = array_merge($array1,$guardar);
      $this->db->insert('tipo_habitacion',$registro);
    }
}
