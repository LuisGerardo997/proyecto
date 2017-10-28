<?php
class Habitaciones_sub_model extends CI_Model{

    function __constuct(){
        parent::__construct();
        $this->load->helper('form');
    }
    function mostrar($data){
        $this->db->select('h.cod_habitacion, th.tipo_habitacion, h.piso');
        $this->db->group_start();
        $this->db->like('h.cod_habitacion',$data);
        $this->db->or_like('th.tipo_habitacion',$data);
        $this->db->or_like('h.piso',$data);
        $this->db->group_end();
        $this->db->where('h.estado is null',null,false);
        $this->db->from('habitacion h');
        $this->db->join('tipo_habitacion th','th.cod_tipo_habitacion = h.cod_tipo_habitacion');
        $consulta = $this->db->get();
        return $consulta->result();
    }
    function guardar($guardar){
      $this->db->insert('habitacion',$guardar);
    }
    function actualizar($cod,$hab){
        $this->db->where('cod_habitacion',$cod);
        $this->db->update('habitacion',$hab);
        if($this->db->affected_rows()>0){
            return true;
        }else{
            return false;
        }
    }
    function eliminar($cod, $hab){
        $this->db->where('cod_habitacion', $cod);
        $this->db->update('habitacion', $hab);
        if($this->db->affected_rows()>0){
            return true;
        }else{
            return false;
        }
    }
    function select(){
      $this->db->select('cod_tipo_habitacion, tipo_habitacion');
      $resultado= $this->db->get('tipo_habitacion');
      return $resultado -> result_array();
    }
}
