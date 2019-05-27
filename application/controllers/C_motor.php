<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_motor extends CI_Controller
{
	var $API ="";

	function __construct() {
		parent::__construct();
		$this->API="https://api.akhmad.id/uaspromnet";
	}

	public function index()
	{
		$this->curl->http_header("X-Nim", "1701266");
		$data['user'] = json_decode($this->curl->simple_get($this->API.'/user'));
		//$this->curl->debug();

		$this->load->view('v_user', $data);
	}

	public function motor()
	{
		$this->curl->http_header("X-Nim", "1701266");
		$data['motor'] = json_decode($this->curl->simple_get($this->API.'/motor'))->data;
		//$this->curl->debug();
		$this->load->view('v_motor', $data);
	}

	public function tenor()
	{
		$this->curl->http_header("X-Nim", "1701266");
		$data['tenor'] = json_decode($this->curl->simple_get($this->API.'/cicil'))->data;
		//$this->curl->debug();
		$this->load->view('v_tenor', $data);	
	}

	public function uangmuka()
	{
		$this->curl->http_header("X-Nim", "1701266");
		$data['uangmuka'] = json_decode($this->curl->simple_get($this->API.'/uangmuka'))->data;
		//$this->curl->debug();
		$this->load->view('v_uangmuka', $data);	
	}

	public function penjualan()
	{
		$this->curl->http_header("X-Nim", "1701266");
		$data['penjualan'] = json_decode($this->curl->simple_get($this->API.'/penjualan'));
		//$this->curl->debug();
		$this->load->view('v_penjualan', $data);
	}

	function add()
	{
		$data = array(
			'id_motor'		=>$this->input->post('id_motor'),
			'id_cicil'		=>$this->input->post('id_cicil'),
			'id_uang_muka'	=>$this->input->post('id_uang_muka'),
			'cicilan_pokok'	=>$this->input->post('cicilan_pokok'),
			'cicilan_bunga'	=>$this->input->post('cicilan_bunga'),
			'cicilan_total'	=>$this->input->post('cicilan_total'));
		$insert = $this->curl->simple_post($this->API.'/penjualan', $data, array(
		CURLOPT_BUFFERSIZE => 10)); 
        if($insert)
        {
            $this->session->set_flashdata('hasil','Insert Data Berhasil');
        }else
        {
            $this->session->set_flashdata('hasil','Insert Data Gagal');
        }

	}

}




 ?>