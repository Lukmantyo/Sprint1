<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

      function __construct(){

            parent::__construct();

            $this->load->model('m_data');

      }

     

      public function index(){

            $x['user']=$this->m_data->tampil_data();

            $this->load->view('v_tampil',$x);

      }

}