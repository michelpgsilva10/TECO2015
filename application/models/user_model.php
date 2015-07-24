<?php

class user_model extends CI_Model {

    function _construct() {
        parent::_construct();
    }
	
	function buscarClienteCpf($cpf) {

        $this->db->select('*');
        $this->db->from('teco_contratante');
        $this->db->where('CPF', $cpf);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $resultado = $query->result_array();
            return $resultado[0];
        } else {
            return FALSE;
        }
    }
	
	public function novoUserCliente($login, $data) {

        $resultado = $this->buscarClienteCpf($data['CPF']);
		if(!$resultado){
        $str = $this->db->insert_string('teco_contratante', $data);
        $this->db->query($str);
        return $this->db->affected_rows();
		}else{
			return FALSE;
		}
    }

    public function buscarUserEmail($cpf) {

        $this->db->select('*');
        $this->db->from('teco_contratante');
        $this->db->where('CPF', $cpf);
		$this->db->where('cancelamento', 0);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $resultado = $query->result_array();

            return $resultado[0];
        } else {
            return FALSE;
        }
    }

    public function buscarUserIdCliente($id) {

        $this->db->select('*');
        $this->db->from('teco_contratante');
        $this->db->where('id_contratante', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $resultado = $query->result_array();

            return $resultado[0];
        } else {
            return FALSE;
        }
    }
	
	public function cancelamentoId($id) {
			$data = array(
			'cancelamento' => 1
			);
			$this->db->where('id_contratante', $id);
			$this->db->update('teco_contratante', $data);
			return $this->db->affected_rows();
    }

    function atualizaCadastro($id, $data) {//Função que atualiza e Coloca 0 Para o Cancelamento
		$data['cancelamento'] = 0;
        $this->db->where('id_contratante', $id);
		$this->db->update('teco_contratante', $data);
		return $this->db->affected_rows();
    }

    public function coutUsersAtivo($adm = 0) {

        $this->db->select('*');
        $this->db->from('users_cliente');
        $this->db->where('ATIVO', 1);
        $this->db->where('ADMIN', $adm);
        $query = $this->db->get();
        $quantidade = $this->db->count_all_results();

        if ($query->num_rows() > 0) {
            return $quantidade;
        } else {
            return 0;
        }
    }
    
    public function coutUsers($adm = 0) {

        $this->db->select('*');
        $this->db->from('users_cliente');
        $this->db->where('ADMIN', $adm);
        $query = $this->db->get();
        $quantidade = $this->db->count_all_results();

        if ($query->num_rows() > 0) {
            return $quantidade;
        } else {
            return 0;
        }
    }

}

?>