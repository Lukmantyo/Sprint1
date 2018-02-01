<?php 
 
 
class Crud extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');
 
	}
 
	function index(){
		$data['user'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_tampil',$data);
	}
 
	function tambah(){
		$this->load->view('v_input');
	}
 
	function tambah_aksi(){
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$pekerjaan = $this->input->post('pekerjaan');
 
		$data = array(
			'Id' => $id,
			'Username' => $username,
			'Password' => $password,
			'Fullname' => $fullname,
			'Level' => $level
			);
		$this->m_data->input_data($data,'user');
		redirect('crud/index');
	}
 
	function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'user');
		redirect('crud/index');
	}
 
	function edit($id){
		$where = array('id' => $id);
		$data['user'] = $this->m_data->edit_data($where,'user')->result();
		$this->load->view('v_edit',$data);
	}
	function update(){
	$id = $this->input->post('Id');
	$username = $this->input->post('Nama');
	$password = $this->input->post('Password');
	$fullname = $this->input->post('Fullname');
 	$level = $this->input->post('Level');
	$data = array(
		'username' => $username,
		'password' => $password,
		'fullname' => $fullname,
		'level' => $level,
	);
 
	$where = array(
		'id' => $id
	);
 
	$this->m_data->update_data($where,$data,'user');
	redirect('crud/index');
}
 
}