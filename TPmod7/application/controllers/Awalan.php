<?php

class Awalan extends CI_Controller {

	public function home() {
	#	//$this->load->helper('url');
		$data['nim'] = '1303170030';
		$this->load->view('templates/header', $data);
		$this->load->view('home');
		$this->load->view('templates/footer');
	}

	public function image() {
		//$this->load->helper('url');
		$data['nim'] = '1303170030';
		$this->load->view('templates/header', $data);
		$this->load->view('image');
		$this->load->view('templates/footer');
	}
	public function table() {
		//$this->load->helper('url');
		$data['nim'] = '1303170030';
		$this->load->view('templates/header', $data);
		$this->load->view('table');
		$this->load->view('templates/footer');

	}

}

?>
