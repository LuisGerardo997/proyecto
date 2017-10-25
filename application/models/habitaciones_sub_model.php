<?php
class Habitaciones_sub_model extends CI_Model{

    function __constuct(){
        parent::__construct();
        $this->load->helper('form');
    }
    function mostrar($data){
      $this->db->like('h.Cod_Habitacion',$data);
      $this->db->or_like('th.Tipo_Habitacion',$data);
      $this->db->or_like('h.Piso',$data);
      $this->db->from('habitacion h');
      $this->db->from('tipo_habitacion th','h.Cod_Tipo_Habitacion = th.Cod_Tipo_Habitacion');
      $consulta = $this->db->get();
      return $consulta->result();
    }
    function guardar($guardar){
      $num = $this->db->count_all('habitacion');
      $num = $num+1;
      $array1 = array(
        'Cod_Habitacion' => $num,
      );
      $registro = array_merge($array1,$guardar);
      $this->db->insert('habitacion',$registro);
    }
    function select(){
      $this->db->select('Cod_Tipo_Habitacion, Tipo_Habitacion');
      $resultado= $this->db->get('tipo_habitacion');
      return $resultado -> result_array();
    }
}
