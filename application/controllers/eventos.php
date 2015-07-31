<?php

class Eventos extends MY_Controller {
	
	function __construct() {
		$this -> load -> model('teco_contratante_model');
		$this -> load -> library('dompdf/dompdf');
	}
	
	function contratoTECO($id_contratante) {
		$datestring = "%m%d";
		$time = time();
		$load = mdate($datestring, $time) . do_hash("AAEUFMTKING", 'md5');
		
		if ($this -> session -> userdata('load') == $load) {
			$data = array('dados_contratante' => $this -> teco_contratante_model -> detalhe_contratante($id_contratante));
			$this -> load -> view('ContratoTECO', $data);
		} else
			redirect('login');
	}	
}

?>