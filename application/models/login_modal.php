<?php

class login_model extends CI_Model {

    function _construct() {
        parent::_construct();
    }
	
	public function login($login, $senha) {

        $this->db->select('id_contratante,nome,pacote,confirmacao_pgto,cancelamento');
        $this->db->from('teco_contratante');
        $this->db->where('email', $login);
		$this->db->where('senha', $senha);
		
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $resultado = $query->result_array();
            return $resultado[0];
        } else {
            return FALSE;
        }
    }
	
    

}

?>