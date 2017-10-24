<?php
class Tipo_personas_model extends CI_Model{

    function __constuct(){
        parent::__construct();
    }
    function mostrar($data){
      $this->db->like('Cod_Tipo_Persona',$data);
      $this->db->or_like('Tipo_Persona',$data);
      $consulta = $this->db->get('tipo_persona');
      return $consulta->result();
    }
    
    function guardar($guardar){
      $num = $this->db->count_all('tipo_persona');
      $num = $num+1;
      $array1 = array(
        'Cod_Tipo_Persona' => $num,
      );
      $registro = array_merge($array1,$guardar);
      $this->db->insert('tipo_persona',$registro);
    }
}
