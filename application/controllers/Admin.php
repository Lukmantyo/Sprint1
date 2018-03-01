<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('welcome_message'));
	}

	public function index()
	{
		$data['user'] = $this->m_data->tampil_data()->result();
		$this->load->view('comp/header');
		$this->load->view('admin', $data);
		$this->load->view('comp/footer');
	}
	function ruteadmin(){
		$data['datarute'] = $this->m_data->gets_rute()->result();
		$this->load->view('comp/header');
		$this->load->view('ruteadmin', $data);
		$this->load->view('comp/footer');
	}
	function trans(){
		$data['trans'] = $this->m_data->gets_trans()->result();
		$this->load->view('comp/header');
		$this->load->view('admintrans', $data);
		$this->load->view('comp/footer');
	}
}
