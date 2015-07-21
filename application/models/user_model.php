<?php

class user_model extends CI_Model {

    function _construct() {
        parent::_construct();
    }
	
	public function novoUserCliente($login, $senha, $data) {

        $resultado = $this->buscarClienteCpf($cpf);

        $data['id_cliente']= $resultado["ID_CLIENTE"];
        $data['login']= $login;
        $str = $this->db->insert_string('teco_contratante', $data);
        $this->db->query($str);
        return $this->db->affected_rows();
    }
	
    public function verifica_adm_logado() {
        if ($this->session->userdata('login_adm') !== true) {

            redirect(site_url('admin'));
        }
    }

    public function buscarUserEmail($email) {

        $this->db->select('*');
        $this->db->from('users_cliente');
        $this->db->where('LOGIN', $email);
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
        $this->db->from('users_cliente');
        $this->db->where('ID_CLIENTE', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $resultado = $query->result_array();

            return $resultado[0];
        } else {
            return FALSE;
        }
    }

    function alterarSenha($id, $novaSenha) {

        $where = "ID_CLIENTE = " . $id;
        $dados = array('SENHAUSER' => $novaSenha);
        $str_update = $this->db->update_string('users_cliente', $dados, $where);
        $this->db->query($str_update);
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