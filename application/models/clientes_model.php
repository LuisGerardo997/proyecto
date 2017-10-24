<?php
class Clientes_model extends CI_Model{

    function __constuct(){
        parent::__construct();
    }
    function mostrar($data){
      $this->db->group_start();
      $this->db->like('p.Cod_Persona',$data);
      $this->db->or_like('p.Nombres',$data);
      $this->db->or_like('p.Apellido_Paterno',$data);
      $this->db->or_like('p.Apellido_Materno',$data);
      $this->db->or_like('u.Ciudad',$data);
      $this->db->or_like('ec.Estado_Civil',$data);
      $this->db->group_end();
      $this->db->where('p.Estado','0');
      $this->db->from('persona p');
      $this->db->join('ubigeo u','u.Cod_Ciudad = p.Cod_Ciudad_Direccion');
      $this->db->join('estado_civil ec','ec.Cod_Estado_Civil = p.Cod_Estado_Civil');
      $consulta = $this->db->get();
      return $consulta->result();
    }
    function guardar($guardar){
      $this->db->insert('persona',$registro);
    }
}
