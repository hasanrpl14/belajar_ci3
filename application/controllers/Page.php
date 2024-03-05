<?php

class Page extends CI_Controller
{
	public function index()
	{
		$this->load->view('home');
	}

	public function about()
	{
		$this->load->view('about');
	}

	// public function contact()
	// {
	// 	$this->load->view('contact');
	// 	// $this->load->view('nama_view');
	// }
	public function contact()
	{
		if ($this->input->method() === 'post') {
			print_r($this->input->post());
		}

		$this->load->view('contact');
	}
}