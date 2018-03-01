<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
	}

	public function index()
	{
		$data['rute'] = $this->m_data->gets_rute()->result();
		$this->load->view('welcome_message', $data);
	}

	function cari(){
		$from = $this->input->get('from');
		$to = $this->input->get('to');
		$tanggal = $this->input->get('tanggal');

		$data['cari'] = $this->m_data->cari(array('rute_from'=>$from, 'rute_to'=>$to, 'date'=>$tanggal))->result();

		// echo var_dump($data['cari']);

		$this->load->view('cari', $data);
	}

	function pesan($idrute){
		$getdatarute = $this->m_data->get_rute_by_id($idrute)->row_array();
		$getdatatrans = $this->m_data->get_trans_by_id($getdatarute['transportation_id'])->row_array();

		$data['idrute'] = $idrute;
		$data['seat'] = $getdatatrans['seat_qty'];
		$this->load->view('pesan', $data);
	}

	function reservasi(){
		$idrute = $this->input->post('idrute');

		$name = $this->input->post('name');
		$addr = $this->input->post('addr');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$gender = $this->input->post('gender');

		$datacust = array(
			'name' => $name,
			'address' => $addr,
			'phone' => $phone,
			'gender' => $gender,
			'email' => $email
		);

		$this->m_data->insert_cust($datacust);

		$getdatacust = $this->m_data->get_id_by_name($phone, $email)->row_array();

		$getdatarute = $this->m_data->get_rute_by_id($idrute)->row_array();

		$rescode = random_string('alnum', 6);
		$resat = $getdatarute['date'];
		$resdate = date('Y-m-d');

		$seat = $this->input->post('seat');

		$idcust = $getdatacust['id'];

		$datareservasi = array(
			'reservation_code' => $rescode,
			'reservation_at' => $resat,
			'reservation_date' => $resdate,
			'seat_code' => $seat,
			'customer_id' => $idcust,
			'rute_id' => $idrute,
			'user_id' => 0,
			'img' => '',
			'status' => 0
		);

		$this->m_data->insert_res($datareservasi);
		redirect(base_url('welcome/pembayaran'.$rescode));
	}

	function pembayaran($rescode){
		$data['rescode'] = $rescode;
		$this->load->view('pembayaran', $data);
	}

	function bukti(){
		$this->load->view('bukti');
	}

	 function do_upload()
        {
        	$kode = $this->input->post('rescode');
                $config['upload_path']          = '././bukti/';
                $config['allowed_types']        = 'jpg|png';
                $config['max_size']             = 2048;
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;
                $config['file_name']			= $kode;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('buktifile'))
                {
                        $this->session->set_flashdata('error', $this->upload->display_errors());

                        redirect(base_url('welcome/bukti'));
                }
                else
                {
                        $img = $this->upload->data();

                        $this->session->set_flashdata('success', 'Upload File Success');

                        $datakonf = array(
                        	'img' => $img['file_name'],
                        	'status' => '1'
                        );

                        $this->m_data->konfirmasi($kode, $datakonf);

                        redirect(base_url('welcome/bukti'));
                }
        }

	function login(){
		$this->load->view('login');

	}

	function rute(){
		$this->load->view('rute');
	}

	function contact(){
		$this->load->view('contact');
	}

	function asia(){
		$this->load->view('asia');
	}

	function eropa(){
		$this->load->view('eropa');
	}

	function adminlte(){
		$this->load->view('adminlte');
	}

	function lokal(){
		$this->load->view('lokal');
	}

	function lainnya(){
		$this->load->view('lainnya');
	}


}
