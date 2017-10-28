<?php
class Proveedores_model extends CI_Model{

    function __constuct(){
        parent::__construct();
    }
    function mostrar($data){
      $this->db->like('Cod_Proveedor',$data);
      $this->db->or_like('Cod_Persona',$data);
      $this->db->or_like('Cod_Ciudad',$data);
      $this->db->or_like('Ruc',$data);
      $this->db->or_like('Razon_Social',$data);
      $this->db->or_like('Descripcion',$data);

      $consulta = $this->db->get('proveedores');
      return $consulta->result();
    }
    function guardar($guardar){
      $this->db->insert('proveedores',$guardar);
    return 'llegó';
    }
}