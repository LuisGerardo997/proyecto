<?php
class Tipo_documento_model extends CI_Model{

    function __construct(){
        parent::__construct();
    }
    function mostrar($data){
      $this->db->or_like('Descripcion',$data);
      $this->db->or_like('Nro_Serie',$data);
      $this->db->or_like('Nro_Correlativo',$data);

      $consulta = $this->db->get('tipo_documento');
      return $consulta->result();
    }
    function guardar($guardar){
      $num = $this->db->insert('tipo_documento',$guardar);
}