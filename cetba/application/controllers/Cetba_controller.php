<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Cetba_controller extends CI_Controller {
    function  __construct(){
		parent :: __construct();
		$this->load->model('cetba_model'); 
		$this->load->library(['ion_auth']);           
    }
    
    public function menu()
	{

		$data['menu'] = $this->cetba_model->get_menu_polozky();
		$data['knihy'] = $this->cetba_model->index();
		$this->load->view('layout/header');
		$this->load->view('layout/navbar', $data);
		$this->load->view('pages/index', $data);
		$this->load->view('layout/footer');
	}
	
	public function kniha($id)
	  {
	  	$data['menu'] = $this->cetba_model->get_menu_polozky();
	    $data['get_kniha'] = $this->cetba_model->get_kniha($id);
	    $this->load->view('layout/header');
	    $this->load->view('layout/navbar', $data);
	    $this->load->view('pages/kniha', $data);
	    $this->load->view('layout/footer');
	  }

	public function cs_sv_18(){
		$data['menu'] = $this->cetba_model->get_menu_polozky();
		$data['strana1'] = $this->cetba_model->get_strana(1);
		$this->load->view('layout/header');
		$this->load->view('layout/navbar', $data);
		$this->load->view('pages/cs_sv_18', $data);
		$this->load->view('layout/footer');
	}

	public function cs_sv_19(){
		$data['menu'] = $this->cetba_model->get_menu_polozky();
		$data['strana2'] = $this->cetba_model->get_strana(2);
		$this->load->view('layout/header');
		$this->load->view('layout/navbar', $data);
		$this->load->view('pages/cs_sv_19', $data);
		$this->load->view('layout/footer');
	}

	public function sv_20_21(){
		$data['menu'] = $this->cetba_model->get_menu_polozky();
		$data['strana3'] = $this->cetba_model->get_strana(3);
		$this->load->view('layout/header');
		$this->load->view('layout/navbar', $data);
		$this->load->view('pages/sv_20_21', $data);
		$this->load->view('layout/footer');
	}

	public function cs_20_21(){
		$data['menu'] = $this->cetba_model->get_menu_polozky();
		$data['strana4'] = $this->cetba_model->get_strana(4);
		$this->load->view('layout/header');
		$this->load->view('layout/navbar', $data);
		$this->load->view('pages/cs_20_21', $data);
		$this->load->view('layout/footer');
	}

	public function kontakt(){
		$data['menu'] = $this->cetba_model->get_menu_polozky();
		$this->load->view('layout/header');
		$this->load->view('layout/navbar',$data);
		$this->load->view('pages/kontakt',);
		$this->load->view('layout/footer');
	}

	public function add_book(){
		$data['menu'] = $this->cetba_model->get_menu_polozky();
		$this->load->view('layout/header');
		$this->load->view('layout/navbar', $data);
		if ($this->ion_auth->logged_in())
		{
			$this->load->view('pages/add_book');
		}
		else{
			redirect('auth/login', 'refresh');
		}
		$this->load->view('layout/footer');

		if($this->input->post('register'))
		{
		$autor=$this->input->post('autor');
		$nazev=$this->input->post('nazev');
		$pocet_stran=$this->input->post('pocet_stranek');
		$prebal=$this->input->post('prebal');
		$anotace=$this->input->post('anotace');
		
		$que=$this->db->query("select * from knihy where nazev_knihy='".$nazev."'");
		$row = $que->num_rows();
		if($row)
		{
			$data['error']="<h3 style='color:red'>Tato kniha již existuje</h3>";
		}
		else
		{
			$que=$this->db->query("insert into knihy values('','$autor','$nazev','$pocet','$prebal','$anotace','1')");
		
			$data['error']="<h3 style='color:blue'>Kniha přidána úspěšně</h3>";
		}			
				
		}
	//$this->load->view('index',@$data);
	}

	public function add_book_to_db()
	{
		if($this->input->post('register'))
		{
		$autor=$this->input->post('autor');
		$nazev=$this->input->post('nazev');
		$pocet_stran=$this->input->post('pocet_stranek');
		$prebal=$this->input->post('prebal');
		$anotace=$this->input->post('anotace');
		
		$que=$this->db->query("select * from knihy where nazev_knihy='".$nazev."'");
		$row = $que->num_rows();
		if($row)
		{
			$data['error']="<h3 style='color:red'>Tato kniha již existuje</h3>";
		}
		else
		{
			$que=$this->db->query("insert into knihy values('','$autor','$nazev','$pocet','$prebal','$anotace','1')");
		
			$data['error']="<h3 style='color:blue'>Kniha přidána úspěšně</h3>";
		}			
				
		}
	$this->load->view('index',@$data);
			
	}

}