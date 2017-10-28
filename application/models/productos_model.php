<?php
class Productos_model extends CI_Model{

    function __constuct(){
        parent::__construct();
    }
    function mostrar($data){
      $this->db->like('Cod_Producto',$data);
      $this->db->or_like('Cod_Marca',$data);
      $this->db->or_like('Cod_Tipo_Producto',$data);
      $this->db->like('Producto',$data);
      $this->db->or_like('Descripcion',$data);
      $this->db->or_like('Precio_Producto',$data);
      $this->db->like('Stock_Producto',$data);
      $this->db->or_like('Stock_Minimo',$data);
      $this->db->or_like('Stock_Maximo',$data);
      $consulta = $this->db->get('productos');
      return $consulta->result();
    }
    function guardar($guardar){
      $num = $this->db->count_all('productos');
      $num = $num+1;
      $array1 = array(
        'Cod_Producto' => $num,
      );
      $registro = array_merge($array1,$guardar);
      $this->db->insert('productos',$registro);
    }
}
