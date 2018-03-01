<?php 
 
class M_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('user');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
 
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
 
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
 
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
	
	function tampil_booking(){
		return $this->db->get('customer');
	}

	function cari($value){
		$this->db->where($value);
		$this->db->from('rute');
		$this->db->join('transportation', 'rute.transportation_id = transportation.id');
		return $this->db->get();
	}

	//fungsi model database > rute

	function gets_rute(){
		return $this->db->get('rute');
	}

	function get_rute_by_id($id){
		$this->db->where('id', $id);
		return $this->db->get('rute');
	}

	// end fungsi model database > rute

	//fungsi model database > customer

	function insert_cust($value){
		return $this->db->insert('customer', $value);
	}

	function get_id_by_name($phone, $email){
		$this->db->select('id');
		$this->db->where(array('phone'=>$phone, 'email'=>$email));
		return $this->db->get('customer');
	}

	// end fungsi model database > customer

	//fungsi model database > reservasi

	function insert_res($value){
		return $this->db->insert('reservation', $value);
	}

	function konfirmasi($kode, $value){
		$this->db->set($value);
		$this->db->where('reservation_code', $kode);
		return $this->db->update('reservation');
	}

	// end fungsi model database > reservasi

	//fungsi model database > transport

	function get_trans_by_id($id){
		$this->db->where('id', $id);
		return $this->db->get('transportation');
	}

	// end fungsi model database > transport
}

