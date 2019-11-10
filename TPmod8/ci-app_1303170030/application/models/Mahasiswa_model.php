<?php

class Mahasiswa_model extends CI_model {

	public function getAllMahasiswa() {
		//use query builder to get data in table "mahasiswa"
		return $this->db->get('mahasiswa')->result_array();

	}

	public function tambahDataMahasiswa() {
		$data = [
			"nama" => $this->input->post('nama', true),
			"nim" => $this->input->post('nim', true),
			"email" => $this->input->post('email', true),
			"jurusan" => $this->input->post('jurusan', true),
		];

		return $this->db->insert('mahasiswa',$data);
		//buat array untuk menyimpan nama,nim,email dan jurusan.
		//use query builder to insert $data in table "mahasiswa"

	}

	public function hapusDataMahasiswa($id) {
		//use query builder to delete data based on id
		$this->db->where('id',$id);
		return $this->db->delete('mahasiswa');

	}

	public function getMahasiswaById($id) {
		//get data mahasiswa based on id
		$this->db->where('id',$id);
		return $this->db->get('mahasiswa')->row_array();

	}

	public function ubahDataMahasiswa() {
		$data = [
			"nama" => $this->input->post('nama', true),
			"nim" => $this->input->post('nim', true),
			"email" => $this->input->post('email', true),
			"jurusan" => $this->input->post('jurusan', true),
		];
		$id = $this->input->post('id',true);
		$this->db->where('id',$id);
		return $this->db->update('mahasiswa',$data);
		//use query builder class to update data mahasiswa based on id

	}

}
