<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TrainerController extends CI_Controller {


	public function index()
	{

	   $this->load->view('frontend/header');
	   $this->load->view('index1');
	   $this->load->view('frontend/footer');
	}
	public function store()
	{
		$data=[
			'name'=>$this->input->post('name'),
			'email'=>$this->input->post('email'),
			'phone'=>$this->input->post('phone'),
			'course'=>$this->input->post('course'),
			'cv'=>$this->input->post('cv')
		];
		$this->load->model('Model');
		$data=$this->Model->MyData($data);
		redirect(base_url('trainer'));
	}
}

