<?php
class Tipo_habitaciones_model extends CI_Model{

    function __constuct(){
        parent::__construct();
    }
    function mostrar($data){
      $this->db->like('Cod_Tipo_Habitacion',$data);
      $this->db->or_like('Tipo_Habitacion',$data);
      $this->db->or_like('Precio_Tipo_Habitacion',$data);
      $this->db->or_like('Max_H',$data);
      $consulta = $this->db->get('tipo_habitacion');
      return $consulta->result();
    }
    function guardar($guardar){
      $num = $this->db->count_all('tipo_habitacion');
      $num = $num+1;
      $array1 = array(
        'Cod_Tipo_Habitacion' => $num,
      );
      $registro = array_merge($array1,$guardar);
      $this->db->insert('tipo_habitacion',$registro);
    }
}
