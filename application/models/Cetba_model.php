<?php 
if(! defined('BASEPATH')) exit('No direct script access allowed');

class Cetba_model extends CI_Model{
	public function get_menu_polozky()
	{
		if (!$this->ion_auth->logged_in())
		{
			$this->db->select('displej_nazev, nazev');
			$this->db->from('menu');
			//$this->db->order_by('id_menu');

			$query = $this->db->get();
			return $query->result();
			}
		else{
			$this->db->select('displej_nazev, nazev');
			$this->db->from('menu_logged');

			$query = $this->db->get();
			return $query->result();
		}
	}

	
	function get_kniha($id)
    {
      $this->db->select('id_obdobi, id_knihy, nazev_knihy, autor_knihy, prebal, anotace');
      $this->db->from('knihy');
      $this->db->where('id_knihy', $id);

      $kniha = $this->db->get();
      $result = $kniha->result();
      return $result;
    }

    public function index()
	{
		$this->db->select('nazev_knihy, autor_knihy, id_knihy');
		$this->db->from('knihy');
		$this->db->order_by('id_knihy ASC');

		$query = $this->db->get();
		return $query->result();
	}

	public function get_strana(int $obdobi)
	{       
        $this->db->select('nazev_knihy, autor_knihy, id_knihy');
        $this->db->from('knihy');
        $this->db->where('id_obdobi= '.$obdobi);
        $this->db->order_by('id_knihy');
        
        $query = $this->db->get();
        return $query->result();
	}
	
	function insert_data($data)
    {
        $this->db->insert('knihy', $data);

    }
}