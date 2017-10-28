<?php
class Empleados_model extends CI_Model{

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
      $this->db->where('p.estado','1');
      $this->db->from('persona p');
      $this->db->join('ubigeo u','u.cod_ciudad = p.cod_ciudad_direccion');
      $this->db->join('estado_civil ec','ec.cod_estado_civil = p.cod_estado_civil');
      $consulta = $this->db->get();
      return $consulta->result();
    }
}
