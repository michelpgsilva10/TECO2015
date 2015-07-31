<?php
Class Teco_contratante_model extends CI_MODEL {
	
	function __construct() {
		parent::__construct();
	}
	
	function detalhe_contratante($id_contratante) {
		$this -> db -> select("tc.*, LOWER(SUBSTR(nome, 1, 4)) AS nome_senha, EXTRACT(YEAR FROM data_nascimento) AS ano_senha", false);
		$this -> db -> from('teco_contratante as tc');
		$this -> db -> where('id_contratante', $id_contratante);
		
		$query = $this -> db -> get();
		
		if ($query -> num_rows() > 0)
			return $query -> row();
		else 
			return false;
	}
	
}
?>