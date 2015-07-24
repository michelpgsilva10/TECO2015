<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this -> load -> library('form_validation');
		$this -> load -> model('login_model');
	}

	public function index() {
		$this -> load -> view('login');
	}

	public function logar() {
		$this -> load -> helper('security');
		$this -> form_validation -> set_rules('email', 'E-mail', 'trim|required|valid_email|xss_clean');
		$this -> form_validation -> set_rules('senha', 'Senha', 'trim|required|xss_clean');

		if ($this -> form_validation -> run() == FALSE) {

			$this -> load -> view('login', null);

		} else {

			$login = $this -> input -> post('email', TRUE);
			$senha = $this -> input -> post('senha', TRUE);

			$resultado = $this -> login_model -> login($login, $senha);
			if (($resultado)) {

				//abre uma sessão
				$this -> session -> set_userdata('id_contratante', $resultado['id_contratante']);

				//Coloca dados Cliente
				$this -> session -> set_userdata('nome_cliente', $resultado['nome']);

				$dados = array(
								'nome_cliente' => $resultado['nome'], 
								'pago' => $resultado['confirmacao_pgto'], 
								'cancelado' => $resultado['cancelamento'], 
								'pacote' => $resultado['pacote'],
								'id' => $resultado['id_contratante']  
							   );

				$this -> load -> view('area_cliente', $dados);

			} else {
				$data["mensagem"] = "<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert'>×</button><h4>Atenção ! </h4>Usuário e/ou senha inválida !</div>";
				$this -> load -> view('login', $data);
			}
		}
	}

}
?>