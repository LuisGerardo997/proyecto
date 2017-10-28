<?php
class Clientes_model extends CI_Model{

    function __constuct(){
        parent::__construct();
    }
    function mostrar($data){
      $this->db->group_start();
      $this->db->like('p.cod_persona',$data);
      $this->db->or_like('p.nombres',$data);
      $this->db->or_like('p.apellido_paterno',$data);
      $this->db->or_like('p.apellido_materno',$data);
      $this->db->or_like('u.ciudad',$data);
      $this->db->or_like('ec.estado_civil',$data);
      $this->db->group_end();
      $this->db->where('p.estado','0');
      $this->db->from('persona p');
      $this->db->join('ubigeo u','u.cod_ciudad = p.cod_ciudad_direccion');
      $this->db->join('estado_civil ec','ec.cod_estado_civil = p.cod_estado_civil');
      $consulta = $this->db->get();
      return $consulta->result();
    }
    function guardar($guardar){
      if ($this->db->insert('persona',$guardar)){
        return 1;
      }else{
        return 0;
    }
  }
    function select(){
      $this->db->select('cod_tipo_persona, tipo_persona');
      $resultado= $this->db->get('tipo_persona');
      return $resultado -> result_array();
    }
    function select1(){
      $this->db->select('cod_ciudad, ciudad');
      $resultado= $this->db->get('ubigeo');
      return $resultado -> result_array();
    }
    function select2(){
      $this->db->select('cod_estado_civil, estado_civil');
      $resultado= $this->db->get('estado_civil');
      return $resultado -> result_array();
    }
}
