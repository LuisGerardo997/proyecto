<?php
class Tipo_transaccion_model extends CI_Model{

    function __construct(){
        parent::__construct();
    }
    function mostrar($data){
      $this->db->or_like('Tipo_Transacion',$data);
      $this->db->or_like('Descripcion',$data);

      $consulta = $this->db->get('tipo_transaccion');
      return $consulta->result();
    }
    function guardar($guardar){
      $num = $this->db->insert('tipo_transaccion',$guardar);
}