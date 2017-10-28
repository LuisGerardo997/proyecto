<?php
class Tipo_productos_model extends CI_Model{

    function __constuct(){
        parent::__construct();
    }
    function mostrar($data){
      $this->db->like('Cod_Tipo_Producto',$data);
      $this->db->or_like('Tipo_Producto',$data);
      $this->db->or_like('Descripcion',$data);
      $consulta = $this->db->get('tipo_producto');
      return $consulta->result();
    }
    function guardar($guardar){
      $num = $this->db->count_all('tipo_producto');
      $num = $num+1;
      $array1 = array(
        'Cod_Tipo_Producto' => $num,
      );
      $registro = array_merge($array1,$guardar);
      $this->db->insert('tipo_producto',$registro);
    }
}
