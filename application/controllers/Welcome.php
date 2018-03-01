<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	function __construct() {
        parent::__construct();

        $this->load->model('sistema_model', '', TRUE);
    }

	public function index()
	{
		$r = $this->sistema_model->listar_frase();
		$dados = array(
			'page_title' => 'Aldeia da Palavra',
			's1' => 'Frase do dia',
			'frase' => $r->frases_fr,
			'autorf' => $r->autor_fr,//'Teste de frase do dia',
			's2' => 'Verso do dia',
			'verso' => 'Teste de verso do dia',
			'autorv' => 'Nome'
		);
		//$this->blade->view('welcome_message', $dados);
		
		$this->blade->view('default', $dados);
	}
}
