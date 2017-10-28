<?php
class Ubigeo_model extends CI_Model{

    function __constuct(){
        parent::__construct();
    }
    function mostrar($data){
      $this->db->like('Cod_Caja',$data);
      $this->db->or_like('Nro_Caja',$data);
      $this->db->or_like('Descripcion',$data);
      $consulta = $this->db->get('caja');
      return $consulta->result();
    }
    function guardar($guardar){
      $num = $this->db->count_all('caja');
      $num = $num+1;
      $array1 = array(
        'Cod_Caja' => $num,
      );
      $registro = array_merge($array1,$guardar);
      $this->db->insert('caja',$registro);
    }
}
