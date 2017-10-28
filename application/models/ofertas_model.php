<?php
class Ofertas_model extends CI_Model{

    function __constuct(){
        parent::__construct();
    }
    function mostrar($data){
      $this->db->like('Oferta',$data);
      $this->db->or_like('Descuento',$data);
      $this->db->or_like('Fecha_Inicio',$data);
      $this->db->or_like('Fecha_Fin',$data);
      $consulta = $this->db->get('ofertas');
      return $consulta->result();
    }
    function guardar($guardar){
      $this->db->insert('ofertas',$guardar);
    }
}
