<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User class.
 * 
 * @extends CI_Controller
 */
class Sistema extends CI_Controller {

	/**
	 * __construct function.
	 * 
	 * @access public
	 * @return void
	 */
	public function __construct() {
		
		parent::__construct();
		$this->load->model('sistema_model', '', TRUE);		
		$this->load->library('form_validation');
		$this->load->library('session'); 
		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
		} else {
			redirect('/login');	
		}
	}
	
	
	public function index() {

	}
	
	public function painel()
	{
		$f = $this->sistema_model->contador('id_fr','frases');
		$v = $this->sistema_model->contador('id_vr','versos');	
		$dados = array(
			'page_title' => 'Paine Administrativo',
			'pagina' => 'content2',
			'nfrases' => $f->a,
			'nversos' => $v->a
		);

		$this->blade->view('painel',$dados);
	}
	
	public function frases()
	{
		$cont = $this->sistema_model->contador('id_fr','frases');
		$this->sistema_model->paginacao('sistema/frases','frases',$cont->a,'15');
		$fra = $this->sistema_model->listar('frases',
		'id_fr as a, frases_fr as b, autor_fr as c, tag_fr as d ',
		'','id_fr','15',$this->uri->segment(3));
		$dados = array(
			'page_title' => 'Paine Administrativo',
			'pagina' => 'frases',
			'titulo_p' => 'Frases - CRUD',
			'frase' => '',
			'frases' => $fra,
			'pag' => $this->pagination->create_links()
		);
 
		$this->blade->view('painel',$dados);
	}
	
	/***=INICIO CRUD VERSO=***/
	public function fraseNova()
	{
        $this->form_validation->set_rules('frase', 'Frase', 'required|trim');
        $this->form_validation->set_rules('autor', 'Autor', 'required|trim');

        if ($this->form_validation->run() == FALSE){
            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);

        }else{
			if($this->sistema_model->cadFrase() == true){
				echo json_encode(['success'=>'dados salvos com sucesso!']);
			}
			else{
				echo json_encode(['error'=>'Erro ao salvar dados no servidor!']);
			}
        }
	}
	
	public function fraseEdt()
	{
        $this->form_validation->set_rules('idd', 'ID', 'required|trim');
        $this->form_validation->set_rules('frase', 'Frase', 'required|trim');
        $this->form_validation->set_rules('autor', 'Autor', 'required|trim');

        if ($this->form_validation->run() == FALSE){
            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);

        }else{
			if($this->sistema_model->edtFrase() == true){
				echo json_encode(['success'=>'dados salvos com sucesso!']);
			}
			else{
				echo json_encode(['error'=>'Erro ao salvar dados no servidor!']);
			}
        }
	}
	
	public function fraseId()
	{
		$id = $this->uri->segment(3);
		
		$data = $this->sistema_model->get_by_id('id_fr as a, frases_fr as b, autor_fr as c, tag_fr as d',
		'frases',"id_fr = $id");
		echo json_encode($data);
	}
	
	public function fraseDel()
	{
		$id = $this->uri->segment(3);
		$data = $this->sistema_model->deletar('frases','id_fr',$id);
		echo json_encode($data);
	}
	/***=FIM CRUD FRASE=***/
	
	
	public function versos()
	{
		$cont = $this->sistema_model->contador('id_vr','versos');
		$this->sistema_model->paginacao('sistema/versos','versos',$cont->a,'15');
		$ver = $this->sistema_model->listar('versos',
		'id_vr as a, versos_vr as b, autor_vr as c, tag_vr as d ',
		'','id_vr','15',$this->uri->segment(3));
		$dados = array(
			'page_title' => 'Paine Administrativo',
			'pagina' => 'versos',
			'titulo_p' => 'Versos CRUD',
			'versos' => $ver,
			'pag' => $this->pagination->create_links()
		);
		
		$this->blade->view('painel',$dados);		
	}
	
	/***=INICIO CRUD VERSO=***/
	public function versoNovo()
	{
        $this->form_validation->set_rules('verso', 'Frase', 'required|trim');
        $this->form_validation->set_rules('autor', 'Autor', 'required|trim');

        if ($this->form_validation->run() == FALSE){
            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);

        }else{
			if($this->sistema_model->cadVerso() == true){
				echo json_encode(['success'=>'dados salvos com sucesso!']);
			}
			else{
				echo json_encode(['error'=>'Erro ao salvar dados no servidor!']);
			}
        }
	}
	
	public function versoEdt()
	{
        $this->form_validation->set_rules('idd', 'ID', 'required|trim');
        $this->form_validation->set_rules('verso', 'Verso', 'required|trim');
        $this->form_validation->set_rules('autor', 'Autor', 'required|trim');

        if ($this->form_validation->run() == FALSE){
            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);

        }else{
			if($this->sistema_model->edtVerso() == true){
				echo json_encode(['success'=>'dados salvos com sucesso!']);
			}
			else{
				echo json_encode(['error'=>'Erro ao salvar dados no servidor!']);
			}
        }
	}
	
	public function versoId()
	{
		$id = $this->uri->segment(3);
		
		$data = $this->sistema_model->get_by_id('id_vr as a, versos_vr as b, autor_vr as c, tag_vr as d',
		'versos',"id_vr = $id");
		echo json_encode($data);
	}
	
	public function versoDel()
	{
		$id = $this->uri->segment(3);
		$data = $this->sistema_model->deletar('versos','id_vr',$id);
		echo json_encode($data);
	}
	/***=FIM CRUD VERSO=***/
	
}	