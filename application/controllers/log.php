<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log extends CI_Controller{

	public function __construct()
		{
        parent::__construct();
		$this->load->library(array('form_validation','session'));

		$this->load->model('login');
	}
	function index()
	{
		$this->load->view('login/vlogin');

	}

	function masuk()
	{
		$user = strip_tags(str_replace("'","",$this->input->post('un',true)));
		$pass = strip_tags(str_replace("'","",$this->input->post('ps',true)));
		$cekakun = $this->login->in($user,$pass);
		if(strlen($user)==''||strlen($pass)=='')
		{
			$this->session->set_flashdata('msg','Username atau Password anda tidak boleh kosong');
			$url=base_url();redirect($url);
		}
		else
		{
			if($cekakun->num_rows()>0)
			{
				$rcekuser=$cekakun->row_array();
				$this->session->set_userdata('masuk',TRUE);
				$this->session->set_userdata('status_login','oke');
				$this->session->set_userdata('id',$rcekuser['id']);
				$this->session->set_userdata('user',$rcekuser['user']);
				$this->session->set_userdata('password',$rcekuser['password']);
				$this->session->set_userdata('hakakses',$rcekuser['hakakses']);
			}
			else
			{
				$this->session->set_userdata('masuk',FALSE);
			}
		}
		if($this->session->userdata('masuk')==TRUE)
		{
			$user=$this->session->userdata('user');
			redirect('template');
		}
		else
		{
			$this->session->set_flashdata('msg','Periksa kembali username dan password anda');
			$url=base_url();
			redirect($url);
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		$url=base_url();
		redirect($url);
	}
}








