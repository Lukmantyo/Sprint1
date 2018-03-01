<?php 

class booking extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');
	}

	public function index(){
		$data['customer'] = $this->m_data->tampil_booking()->result();
		$this->load->view('tampil_booking', $data);
	}
}
?>