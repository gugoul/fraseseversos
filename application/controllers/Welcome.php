<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	function __construct() {
        parent::__construct();

        $this->load->model('sistema_model', '', TRUE);
    }

	public function index()
	{
		$er;
		if ($this->session->flashdata('success') == TRUE){
			$er = $this->session->flashdata('success'); 
		}
		if ($this->session->flashdata('error') == TRUE){
			$er = $this->session->flashdata('error');
			
		}
		$r = $this->sistema_model->listar_frase();
		$s = $this->sistema_model->listar_verso();
		$dados = array(
			'page_title' => 'Aldeia da Palavra',
			's1' => 'Frase do dia',
			'frase' => $r->a,
			'autorf' => $r->b,//'Teste de frase do dia',
			's2' => 'Verso do dia',
			'verso' => $s->a,
			'autorv' => $s->b,
			'error' => $er
		);
		//$this->blade->view('welcome_message', $dados);
		
		$this->blade->view('default', $dados);
	}
	
	 public function email()
    {
        // Carrega a library email
        $this->load->library('email');
        //Recupera os dados do formulário
        $dados = $this->input->post();
         
        //Inicia o processo de configuração para o envio do email
        $config['protocol'] = 'mail'; // define o protocolo utilizado
        $config['wordwrap'] = TRUE; // define se haverá quebra de palavra no texto
        $config['validate'] = TRUE; // define se haverá validação dos endereços de email
         
        /*
         * Se o usuário escolheu o envio com template, define o 'mailtype' para html, 
         * caso contrário usa text
         */
        if(isset($dados['template']))
            $config['mailtype'] = 'html';
        else
            $config['mailtype'] = 'text';
 
        // Inicializa a library Email, passando os parâmetros de configuração
        $this->email->initialize($config);
        
        // Define remetente e destinatário
       // $this->email->from('remetente@email.com', 'Remetente'); // Remetente
       // $this->email->to($dados['email'],$dados['nome']); // Destinatário
		$this->email->from($dados['email'],$dados['nome']); // Remetente
        $this->email->to('rc.assis.job@bol.com.br','Robert'); // Destinatário
 
        // Define o assunto do email
        $this->email->subject($dados['assunto']);
 
        /*
         * Se o usuário escolheu o envio com template, passa o conteúdo do template para a mensagem
         * caso contrário passa somente o conteúdo do campo 'mensagem'
         */
        //if(isset($dados['template']))
        //    $this->email->message($this->load->view('email-template',$dados, TRUE));
       // else
            $this->email->message($dados['mensagem']);
         
        /*
         * Se foi selecionado o envio de um anexo, insere o arquivo no email 
         * através do método 'attach' da library 'Email'
         */
        // if(isset($dados['anexo']))
            // $this->email->attach('./assets/images/unici/logo.png');
 
        /*
         * Se o envio foi feito com sucesso, define a mensagem de sucesso
         * caso contrário define a mensagem de erro, e carrega a view home
         */
        if($this->email->send())
        {
            $this->session->set_flashdata('success','Email enviado com sucesso!');
            $this->index();
        }
        else
        {
            $this->session->set_flashdata('error',$this->email->print_debugger());
            $this->index();
        }
    }
}
