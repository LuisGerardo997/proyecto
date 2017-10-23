<?php
class Personas_model extends CI_Model{

    function __constuct(){
        parent::__construct();
    }
    function mostrar($data){
      $this->db->like('Cod_Tipo_Persona',$data);
      $this->db->or_like('Tipo_Persona',$data);
      $consulta = $this->db->get('tipo_persona');
      return $consulta->result();
    }
}
