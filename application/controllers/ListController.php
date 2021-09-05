<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListController extends CI_Controller {


	public function list()
	{

	   $this->load->view('frontend/header');
	   $this->load->model('Model');
	   $data['trainer']=$this->Model->getTrainer();
	   $this->load->view('list',$data);
	   $this->load->view('frontend/footer');
	}

	public function add()
	{

	   $this->load->view('frontend/header');
	   $this->load->view('index2');
	   $this->load->view('frontend/footer');
	}

	public function store1()
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
		
		
			redirect(base_url('list'));
		
	}




	public function edit($id)
	{
		$this->load->model('Model');
		$data['trainer']=$this->Model->editTrainer($id);
		$this->load->view('frontend/header');
		$this->load->view('edit',$data);
		$this->load->view('frontend/footer');
	 
	}
	public function update($id)
	{
		$data=[
			'name'=>$this->input->post('name'),
			'email'=>$this->input->post('email'),
			'phone'=>$this->input->post('phone'),
			'course'=>$this->input->post('course'),
			'cv'=>$this->input->post('cv')
		];
		$this->load->model('Model');
		$this->Model->updateTrainer($data,$id);
		redirect(base_url('list'));

	}
	public function delete($id)
	{
		$this->load->model('Model');
		$this->Model->deleteTrainer($id);
		redirect(base_url('list'));
	}


}

