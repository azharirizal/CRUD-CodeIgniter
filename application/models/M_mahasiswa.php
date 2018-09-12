<?php

/**
* 
*/
class M_mahasiswa extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function jumlah_data()
	{
		return $this->db->count_all('mahasiswa');
	}

	function read()
	{
		return $this->db->query('SELECT * FROM mahasiswa ORDER BY id_mahasiswa DESC')->result();
	}

	function save()
 	{
  		$data['nim'] =$this->input->post('nim');
  		$data['nama'] =$this->input->post('nama');
  		$data['kelas'] =$this->input->post('kelas');
  		$data['jurusan'] =$this->input->post('jurusan');

  		return $this->db->insert('mahasiswa', $data);
 	}

 	function edit($id)
 	{
  		return $this->db->get_where('mahasiswa', array('id_mahasiswa' => $id))->row();
 	}

 	function update()
 	{
  		$data['nim'] =$this->input->post('nim');
  		$data['nama'] =$this->input->post('nama');
  		$data['kelas'] =$this->input->post('kelas');
  		$data['jurusan'] =$this->input->post('jurusan');

  		return $this->db->where('id_mahasiswa', $this->input->post('id'))->update('mahasiswa', $data);
 	}

 	function delete($id)
 	{
  		return $this->db->delete('mahasiswa', array('id_mahasiswa' => $id));
 	}
}

?>