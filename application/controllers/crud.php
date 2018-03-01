<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');

	}

	function index(){
		$data['user'] = $this->m_data->tampil_data()->result();
		$this->load->view('comp/header');
		$this->load->view('admin', $data);
		$this->load->view('comp/footer');
	}
	function tambah(){
		$this->load->view('v_input');
	}

	function tambah_aksi(){
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$fullname = $this->input->post('fullname');
		$level = $this->input->post('level');

		$data = array(
			'id' => $id,
			'username' => $username,
			'password' => $password,
			'fullname' => $fullname,
			'level' => $level
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
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$fullname = $this->input->post('fullname');
		$level = $this->input->post('level');
		$data = array(
			'id' => $id,
			'username' => $username,
			'password' => $password,
			'fullname' => $fullname,
			'level' => $level
		);

		$where = array(
			'id' => $id
		);

		$this->m_data->update_data($where,$data,'user');
		redirect('crud/index');
	}
	function tambahrute(){
		$this->load->view('inputrute');
	}

	function tambah_rute(){
		$id = $this->input->post('id');
		$depart_at = $this->input->post('depart_at');
		$arrival_at = $this->input->post('arrival_at');
		$rute_from = $this->input->post('rute_from');
		$rute_to = $this->input->post('rute_to');
		$price = $this->input->post('price');
		$transportation_id = $this->input->post('transportation_id');
		$date = $this->input->post('date');

		$data = array(
			'id' => $id,
			'depart_at' => $depart_at,
			'arrival_at' => $arrival_at,
			'rute_from' => $rute_from,
			'rute_to' => $rute_to,
			'price' => $price,
			'transportation_id' => $transportation_id,
			'date' => $date
		);
		$this->m_data->input_data($data,'rute');
		redirect('admin');
	}

	function hapusrute($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'rute');
		redirect('crud/index');
	}

	function editrute($id){
		$where = array('id' => $id);
		$data['rute'] = $this->m_data->edit_data($where,'rute')->result();
		$this->load->view('editrute',$data);
	}
	function updaterute(){
		$id = $this->input->post('id');
		$depart_at = $this->input->post('depart_at');
		$arrival_at = $this->input->post('arrival_at');
		$rute_from = $this->input->post('rute_from');
		$rute_to = $this->input->post('rute_to');
		$price = $this->input->post('price');
		$transportation_id = $this->input->post('transportation_id');
		$date = $this->input->post('date');
		$data = array(
			'id' => $id,
			'depart_at' => $depart_at,
			'arrival_at' => $arrival_at,
			'rute_from' => $rute_from,
			'rute_to' => $rute_to,
			'price' => $price,
			'transportation_id' => $transportation_id,
			'date' => $date
		);

		$where = array(
			'id' => $id
		);

		$this->m_data->update_data($where,$data,'rute');
		redirect('admin');
	}
function tambahtrans(){
		$this->load->view('v_input');
	}

	function tambah_trans(){
		$id = $this->input->post('id');
		$code = $this->input->post('code');
		$description = $this->input->post('description');
		$seat_qty = $this->input->post('seat_qty');

		$data = array(
			'id' => $id,
			'code' => $code,
			'description' => $description,
			'seat_qty' => $seat_qty,
		);
		$this->m_data->input_data($data,'transportation');
		redirect('admin');
	}

	function hapustrans($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'transportation');
		redirect('admin');
	}

	function edittrans($id){
		$where = array('id' => $id);
		$data['rute'] = $this->m_data->edit_data($where,'transportation')->result();
		$this->load->view('edittrans',$data);
	}
	function updatetrans(){
		$id = $this->input->post('id');
		$code = $this->input->post('code');
		$description = $this->input->post('description');
		$seat_qty = $this->input->post('seat_qty');
		$data = array(
			'id' => $id,
			'code' => $code,
			'description' => $description,
			'seat_qty' => $seat_qty,
		);

		$where = array(
			'id' => $id
		);

		$this->m_data->update_data($where,$data,'transportation');
		redirect('admin');
	}
}