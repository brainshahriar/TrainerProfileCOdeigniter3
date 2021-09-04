<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {


	public function MyData($data)
	{
		return $this->db->insert('signup',$data);
	}
}
