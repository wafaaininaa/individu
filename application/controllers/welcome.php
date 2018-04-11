<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->data['hasil'] = $this->model_bio->getUser('db_bio');
		$this->load->view('welcome_message', $this->data);
	}
	
	public function form_input(){
		$this->load->view('form-input');
	}
	
	public function insert(){
		$id_anggota = $_POST['id_anggota'];
		$nama = $_POST['nama'];
		$no_hp = $_POST['no_hp'];
		$data = array('id_anggota' => $id_anggota, 'nama' => $nama, 'no_hp' => $no_hp);
		$tambah = $this->model_bio->tambahdata('db_bio', $data);
		if($tambah > 0){
			redirect('welcome/index');
		}else{
			echo 'Gagal disimpan';
		}
		
	}
	
	public function delete($id_anggota){
		$hapus = $this->model_bio->hapusData('db_bio',$id_anggota);
		if($hapus > 0){
			redirect('welcome/index');
		}else{
			echo 'Gagal dihapus';
		}
	}
	
	public function form_edit($id_anggota){
		$this->data['dataEdit'] = $this->model_bio->dataEdit('db_bio',$id_anggota);
		$this->load->view('form-edit', $this->data);
	}
	
	public function update($id_anggota){
		$id_anggota = $_POST['id_anggota'];
		$nama = $_POST['nama'];
		$no_hp = $_POST['no_hp'];
		$data = array('id_anggota' => $id_anggota, 'nama' => $nama, 'no_hp' => $no_hp);
		$edit = $this->model_bio->editData('db_bio', $data, $id_anggota);
		if($edit > 0){
			redirect('welcome/index');
		}else{
			echo 'Gagal disimpan';
		}
		
	}
}