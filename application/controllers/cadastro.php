<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {
	 function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->library('form_validation');
    }
	public function index()
	{
		$this->load->view('cadastro');
	}
	Private function validaCPF($cpf) {
        // Verifica se o número digitado contém todos os digitos
        $cpf = str_pad(preg_replace('[^0-9]', '', $cpf), 11, '0', STR_PAD_LEFT);
        $cpf = str_replace('.', '', $cpf);
        $cpf = str_replace('-', '', $cpf);
        // Verifica se nenhuma das sequências abaixo foi digitada, caso seja, retorna falso
        if (strlen($cpf) != 11 || $cpf == '00000000000' || $cpf == '11111111111' || $cpf == '22222222222' || $cpf == '33333333333' || $cpf == '44444444444' || $cpf == '55555555555' || $cpf == '66666666666' || $cpf == '77777777777' || $cpf == '88888888888' || $cpf == '99999999999') {
            return false;
        } else {// Calcula os números para verificar se o CPF é verdadeiro
            for ($t = 9; $t < 11; $t++) {
                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $cpf{$c} * (($t + 1) - $c);
                }

                $d = ((10 * $d) % 11) % 10;

                if ($cpf{$c} != $d) {
                    return false;
                }
            }

            return true;
        }
    }

	public function novo()
	{
		$this->load->helper('security');


        $this->form_validation->set_rules('nome', 'Nome', 'trim|required|xss_clean');
        $this->form_validation->set_rules('cpf', 'CPF', 'trim|required|xss_clean');
        $this->form_validation->set_rules('rg', 'RG', 'trim|required|xss_clean');
        $this->form_validation->set_rules('orgao_expeditor', 'Orgao Expeditor', 'trim|required|xss_clean');
        $this->form_validation->set_rules('rga', 'R.G.A', 'trim|required|xss_clean');
        $this->form_validation->set_rules('dta_nasc', 'Data Nascimento', 'trim|required|xss_clean');
        $this->form_validation->set_rules('curso', 'Curso', 'trim|required|xss_clean');
		$this->form_validation->set_rules('semestre', 'Semestre', 'trim|required|xss_clean');
        $this->form_validation->set_rules('email', 'E-mail', 'trim|required|xss_clean|valid_email');
        $this->form_validation->set_rules('telefone', 'Telefone', 'trim|xss_clean');
        $this->form_validation->set_rules('telefone_alt', 'Telefone alternativo', 'trim|required|xss_clean');

        $this->form_validation->set_rules('senha', 'Senha', 'trim|required|xss_clean');
        $this->form_validation->set_rules('senha_confirma', 'Confime a Senha', 'trim|required|xss_clean');
		
		$this->form_validation->set_rules('pacote', 'Pacote', 'trim|required|xss_clean');
        $this->form_validation->set_rules('forma_pagamento', 'Forma de Pagamento', 'trim|required|xss_clean');
        $this->form_validation->set_rules('num_parcelas', 'Numero de Parcelas', 'trim|required|xss_clean');
        $this->form_validation->set_rules('Apelido', 'Apelido', 'trim|required|xss_clean');
        

        $this->form_validation->set_rules('cidade', 'Cidade', 'trim|required|xss_clean');
        $this->form_validation->set_rules('estado', 'Estado', 'trim|required|xss_clean');
        $this->form_validation->set_rules('rua', 'Rua', 'trim|required|xss_clean');
        $this->form_validation->set_rules('complemento', 'Complemento', 'trim|xss_clean');
        $this->form_validation->set_rules('num', 'Número', 'trim|required|xss_clean');
        $this->form_validation->set_rules('bairro', 'Bairro', 'trim|required|xss_clean');
        $this->form_validation->set_rules('cep', 'CEP', 'trim|required|xss_clean');

        $senha = $this->input->post('senha', TRUE);
        $senha_confirma = $this->input->post('senha_confirma', TRUE);
        $email = $this->input->post('email', TRUE);
        $data = $this->input->post('dta_nasc', TRUE);

        $dados = array(
            'nome' => $this->input->post('nome', TRUE),
            'email_cliente' => $email,
            'CPF' => $this->input->post('cpf', TRUE),
            'RG' => $this->input->post('rg', TRUE),
            'orgao_expeditor' => $this->input->post('orgao_expeditor', TRUE),
            'rga' => $this->input->post('rga', TRUE),
            'data_nascimento' => implode("-", array_reverse(explode("/", $data))),
            'curso' => $this->input->post('curso', TRUE),
            'semestre' => $this->input->post('semestre', TRUE),
            'tel_residencial' => $this->input->post('telefone', TRUE),
            'tel_celular' => $this->input->post('telefone_alt', TRUE),
            'endereco_cidade' => $this->input->post('cidade', TRUE),
            'endereco_uf' => strtoupper($this->input->post('estado', TRUE)),
            'endereco_rua' => $this->input->post('rua', TRUE),
            'endereco_apto' => $this->input->post('complemento', TRUE),
            'endereco_numero' => $this->input->post('num', TRUE),
            'endereco_bairro' => $this->input->post('bairro', TRUE),
            'endereco_cep' => $this->input->post('cep', TRUE),
            'pacote' => $this->input->post('pacote', TRUE),
            'forma_pagamento' => $this->input->post('forma_pagamento', TRUE),
        	'num_parcelas' => $this->input->post('num_parcelas', TRUE),
        	'apelido' => $this->input->post('apelido', TRUE),
        );

        if ($this->form_validation->run() == FALSE) {

            $dados["email"] = $email;
            $this->view('cadastro', $dados);
        } else {

            if ($senha != $senha_confirma) {
                $mensagem = "<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert'>×</button>As senha não são iguais !</div>";
                $dados["mensagem"] = $mensagem;
                $dados["email"] = $email;
                $this->load->view('cadastro', $dados);
            } else {
                if (!$this->validaCPF($dados['cpf'])) {

                    $dados["email"] = $email;
                    $dados["mensagem"] = "<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert'>×</button>CPF invalido !</div>";
                    $this->view('cadastro', $dados);
                } else {
                	$data['senha'] = $senha;
                    if ($this->user_model->novoUserCliente($email, $senha, $dados)) {

                        redirect('area_user');
                    } else {

                        $dados["email"] = $email;
                        $dados["mensagem"] = "<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert'>×</button>Ocorreu um erro ao incluir os dados de cadastro !</div>";
                        $this->view('cadastro', $dados);
                    }
                }
            }
        }
    }
	
}
?>