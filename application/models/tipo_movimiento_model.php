<?php
class Tipo_movimiento_model extends CI_Model{

    function __constuct(){
        parent::__construct();
    }
    function mostrar($data){
      $this->db->like('Cod_Tipo_Movimiento',$data);
      $this->db->or_like('Tipo_Habitacion',$data);
      $consulta = $this->db->get('tipo_movimiento');
      return $consulta->result();
    }
    function guardar($guardar){
      $num = $this->db->count_all('tipo_movimiento');
      $num = $num+1;
      $array1 = array(
        'Cod_Tipo_Movimiento' => $num,
      );
      $registro = array_merge($array1,$guardar);
      $this->db->insert('tipo_movimiento',$registro);
    }
}
