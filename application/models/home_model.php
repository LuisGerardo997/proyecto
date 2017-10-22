<?php
class Home_model extends CI_Model{
    
    function __constuct(){
        parent::__construct();
    }
    
    
    public function cargo($user){
        $this->db->select('c.Cargo');
        $this->db->from('persona p');
        $this->db->join('cargo c', 'p.Cod_Cargo = c.Cod_Cargo');
        $this->db->where('p.Usuario',$user);
        $result = $this->db->get();
        return $result->result();
       
    }
}
?>