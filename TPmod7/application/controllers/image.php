<?php 

class Image extends CI_Controller(){
	public function index() {
		$data['nim'] = '1303170030';
		$this->load->view('templates/header', $data);
		$this->load->view('awalan/image');
		$this->load->view('templates/footer');
	}
}
 ?>