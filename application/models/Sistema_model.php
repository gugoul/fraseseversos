<?php
/*  */
class Sistema_model extends CI_Model {

    /**
     * author: Ramon Silva 
     * email: silva018-mg@yahoo.com.br
     * 
     */
    
    function __construct() {
        parent::__construct();
		
		$this->load->library('form_validation');
		$this->load->library('session'); 
    }
	
	public function gerador($contador)
	{
		 if($_SESSION['data_h']== date('d/m/Y'))
		 {
			return $_SESSION['fr'];
		 }
		 else
		 {
			 $_SESSION['data_h'] = date('d/m/Y');
			 $_SESSION['fr'] = rand(1,$contador);
			 $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
		 }
	}
	
	public function listar_frase()
	{	
		$cont = $this->contador('id_fr','frases');
		$this->gerador($cont->a);
		
		$this->db->select('frases_fr,autor_fr');
		$this->db->from('frases');
        $this->db->where('id_fr',$_SESSION['fr']);
        $this->db->limit(1);
        //return $this->db->get('produtos')->row();
        return $this->db->get()->row();
	}

	public function contador($id,$tabela)
	{
		$this->db->select("COUNT($id) as a");
		$this->db->from($tabela);
		return $this->db->get()->row();
	}
	
	public function listar($table,$fields,$where='',$ordem,$perpage=0,$start=0,$one=false,$array='array'){
        
        $this->db->select($fields);
        $this->db->from($table);
        $this->db->order_by($ordem,'desc');
        $this->db->limit($perpage,$start);
        if($where){
            $this->db->where($where);
        }
        
        $query = $this->db->get();
        
        $result =  !$one  ? $query->result() : $query->row();
        return $result;
    }
	/***=Inicio da Seção de CRUD Frase=***/	
	//Cadastro de Frases com campos já validados no Controller
	public function cadFrase()
	{
		$data = array(
                'frases_fr' => $this->input->post('frase'),
                'autor_fr' => $this->input->post('autor'),
                'tag_fr' => $this->input->post('tag'),);

		if ($this->cadastrar('frases', $data) == TRUE) {
			return true;
		}
		else{
			return false;
		}
	}
	
	public function edtFrase()
	{
		$data = array(
                'frases_fr' => $this->input->post('frase'),
                'autor_fr' => $this->input->post('autor'),
                'tag_fr' => $this->input->post('tag'),);

		if ($this->editar('frases', $data,'id_fr',$this->input->post('idd')) == TRUE) {
			return true;
		}
		else{
			return false;
		}
	}
	
	/***=Fim da Seção CRUD Verso=***/
	
		public function cadVerso()
	{
		$data = array(
                'versos_vr' => $this->input->post('verso'),
                'autor_vr' => $this->input->post('autor'),
                'tag_vr' => $this->input->post('tag'),);

		if ($this->cadastrar('versos', $data) == TRUE) {
			return true;
		}
		else{
			return false;
		}
	}
	
	public function edtVerso()
	{
		$data = array(
                'versos_vr' => $this->input->post('verso'),
                'autor_vr' => $this->input->post('autor'),
                'tag_vr' => $this->input->post('tag'),);

		if ($this->editar('versos', $data,'id_vr',$this->input->post('idd')) == TRUE) {
			return true;
		}
		else{
			return false;
		}
	}
	
	/***=Fim da Seção CRUD Verso=***/
	
	//Função Genérica para Cadastrar
	public function cadastrar($tabela,$data)
	{
		$op = $this->db->insert($tabela,$data);
		
		if($op)
		{
			return TRUE;
		}

		return FALSE;
	
	}
	
	//Função Genérica para Editar
	public function editar($tabela,$data,$whr,$id)
	{
		$this->db->where($whr,$id);
		$this->db->update($tabela,$data);
		
		if($this->db->affected_rows() >= 0)
		{
			return TRUE;
		}

		return FALSE;
		
	}
	
	//Função Genérica para Deletar
	public function deletar($tabela,$whr,$id)
	{
		$this->db->where($whr,$id);
		$this->db->delete($tabela);
		
		if($this->db->affected_rows() >= 0)
		{
			return TRUE;
		}

		return FALSE;
	}
	
	//Função Genérica para buscar único item por ID
	public function get_by_id($campos,$table,$whr)
	{
		$this->db->select($campos);
		$this->db->from($table);
		$this->db->where($whr);
		$query = $this->db->get();

		return $query->row();
	}
	
	//Função para paginação
	public function paginacao($url,$tabela,$linhas,$qtde){
        if(empty($qtde))
		{
			$qtde = 10;
		}	
       
        $config['base_url'] = base_url().$url;
        $config['total_rows'] = $linhas;
        $config['per_page'] = $qtde;
        $config['next_link'] = 'Próxima';
        $config['prev_link'] = 'Anterior';
        $config['full_tag_open'] = '<div class="pagination alternate"><ul>';
        $config['full_tag_close'] = '</ul></div>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li><a style="color: #2D335B"><b>';
        $config['cur_tag_close'] = '</b></a></li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['first_link'] = 'Primeira';
        $config['last_link'] = 'Última';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
		
		$this->pagination->initialize($config); 	       
    }	
}