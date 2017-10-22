<?php
class Login_model extends CI_Model{
    
    function __constuct(){
        parent::__construct();
    }
    
    
    public function ingresar($user,$pass){
        $this->db->where('Usuario',$user);
        $this->db->where('Contrasea',$pass);
        $result = $this->db->get('persona');
        
        if ($result->num_rows()== 1){
            return 1;
        }else{
            return 0;
        }
    }
}
?>