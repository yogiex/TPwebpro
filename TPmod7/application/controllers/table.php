<?php 

class Table extends CI_Controller(){

	public function index() {
		$data['nim'] = '1303170030';
		$this->load->view('templates/header', $data);
		$this->load->view('awalantable');
		$this->load->view('templates/footer');

	}
}

?>