<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {


	public function getTrainer()
	{
		$query=$this->db->get('signup');
		return $query->result();
	}
	public function MyData($data)
	{
		return $this->db->insert('signup',$data);
	}
	public function editTrainer($id)
	{
		$query = $this->db->get_where('signup',['id'=>$id]);
		return $query->row();
	} 
	public function updateTrainer($data,$id)
	{
		return $this->db->update('signup',$data,['id'=>$id]);
	}
	public function deleteTrainer($id)
	{
		return $this->db->delete('signup',['id'=>$id]);
	}
	
}
