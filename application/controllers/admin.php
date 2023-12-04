<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{


	public function index()
	{
		$data['mahasiswa'] = $this->M_mahasiswa->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('v_mhs', $data);
		$this->load->view('templates/footer');
	}
	public function tambah_data()
	{
		$npm = $this->input->post('npm');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$data = array(
			'npm' => $npm,
			'nama' => $nama,
			'alamat' => $alamat,
		);
		$this->M_mahasiswa->input_data($data);
		redirect('admin/index');
	}

	public function hapus($id)
	{
		$where = array('id' => $id,);
		$this->M_mahasiswa->hapus_data($where, 'tb_mhs');
		redirect('admin/index');
	}

	public function edit($id){
		$where = array('id' => $id , );
		$data['mahasiswa']=$this->M_mahasiswa->edit_data($where, 'tb_mhs');
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit', $data);
		$this->load->view('templates/footer');
	}

	public function update(){
		$id = $this->input->post('id');
		$npm = $this->input->post('npm');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$data = array(
			'npm' => $npm,
			'nama' => $nama,
			'alamat' => $alamat,
		);
		$where = array('id' =>$id , );
		$this->M_mahasiswa->update_data($where, $data,'tb_mhs');
		redirect('admin/index');
	}

	public function print(){
		$data['mahasiswa'] = $this->M_mahasiswa->tampil_data()->result();
		$this ->load->view('print_mahasiswa',$data);
	}
}