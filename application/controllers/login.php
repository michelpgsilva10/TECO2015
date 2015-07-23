<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('login_model');
    }

	public function index()
	{
		$this->load->view('login');
	}
	public function logar()
	{
		$this->form_validation->set_rules('email', 'E-mail', 'trim|required|xss_clean');
        $this->form_validation->set_rules('senha', 'Senha', 'trim|required|xss_clean');
        
        if ($this->form_validation->run() == FALSE) {

            $this->my_load_view_2('login', null);
            
        } else {

            $this->load->helper('security');

            $login = $this->input->post('email', TRUE);
            $senha = $this->input->post('senha', TRUE);
            
			
            if ($resultado == FALSE) {
                $data["mensagem"] = "<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert'>×</button><h4>Atenção ! </h4>Usuário e/ou senha inválida !</div>";
                $this->load->view('login', $data);
                
            } else {
				$resultado = $this->login_model->buscarUserEmail($login,$senha);	
                if (($resultado)) {
                    
                
                    $idCliente = $resultado["ID_CLIENTE"];
                                        
                    //abre uma sessão
                    $this->session->set_userdata('id_cliente', $resultado['id_contratante']);
                    $this->session->set_userdata('login', TRUE);
                    
                    //Coloca dados Cliente
                    $this->session->set_userdata('nome_cliente', $resultado['nome']);
                    
					$dados = array(
									'nome_cliente' => $resultado['nome'],
									'pago' => $resultado['confirmacao_pgto'],
									'cancelado' => $resultado['cancelamento'],
									'pacote' => $resultado['pacote'], );
					
					$this->load->view('area_cliente', $data);
					
                } else {
                    $data["mensagem"] = "<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert'>×</button><h4>Atenção ! </h4>Usuário e/ou senha inválida !</div>";
                    $this->load->view('login', $data);
                }
            }
        }
	}
}
?>