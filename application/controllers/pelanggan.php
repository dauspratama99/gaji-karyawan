<?php

class pelanggan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library(array('form_validation', 'session'));
        $this->load->model('Modelpelanggan','pelanggan');
    }


public function kode()
	{
        $this->db->select('RIGHT(kodepelanggan,2) as kode', FALSE); 
        $this->db->order_by('kode','DESC'); 
        $this->db->limit(1); 
        $query = $this->db->get('pelanggan');  
        if($query->num_rows() <> 0){ 
            $dt = $query->row(); 
            $kode = intval($dt->kode) + 1; 
        }else{ 
            $kode = 1; 
        } 
        $kodemax  = str_pad($kode, 3, "0", STR_PAD_LEFT); 
        $kodejadi = "PL-".$kodemax;  
        return $kodejadi;
    }
    public function index() {
		if($this->session->userdata('masuk')==true 
		&&  $this->session->userdata('hakakses')=='admin')
		 {
        $querydatapelanggan = $this->pelanggan->datapelanggan();
        $data = array(
            'tampildata' => $querydatapelanggan
        );
        $template = array(
            'menu' => $this->load->view('menu', '', TRUE),
            'judul' => 'Data pelanggan',
            'konten' => $this->load->view('pelanggan/viewdata', $data, TRUE),
        );
        $this->parser->parse('template', $template);
    }
	else
			{
			$msg='<div class="alert alert-success alert-dismissible">'
                    . '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'
                    . 'ANDA HARUS LOGIN TERLEBIH DAHULU'
                    . '</div>';
            $this->session->set_flashdata('msg', $msg);
            redirect('log');
        }
	}

    public function tambah() {
		$d['kode'] = $this->kode();
        $template = array(
            'menu' => $this->load->view('menu', '', TRUE),
            'judul' => 'Tambah pelanggan',
            'konten' => $this->load->view('pelanggan/formtambah', $d, TRUE),
        );
        $this->parser->parse('template', $template);
    }

    public function simpan() {
        $querysimpandata = $this->pelanggan->simpandata();
        if ($querysimpandata == FALSE) {
            $this->tambah();
        } else {
            $pesan = '<div class="alert alert-success alert-dismissible">'
                    . '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'
                    . 'Data Berhasil di Simpan'
                    . '</div>';
            $this->session->set_flashdata('pesan', $pesan);
            redirect('pelanggan/tambah');
        }
    }

    public function edit() {
        $kodepelanggan = $this->uri->segment(3);
        $queryambildata = $this->pelanggan->ambildata($kodepelanggan);
        if ($queryambildata->num_rows() > 0) {
            $baris = $queryambildata->row_array();
            $data = array(
                'kodepelanggan' => $baris['kodepelanggan'],
                'tanggalorder' => $baris['tanggalorder'],

                'namapelanggan' => $baris['namapelanggan'],
                'alamat'        => $baris['alamat'],
               'nohp'          => $baris['nohp'],
                'email'        => $baris['email'],
					
            );
        } else {
            exit('Data tidak DiTemukan');
        }
        $template = array(
            'menu' => $this->load->view('menu', '', TRUE),
            'judul' => 'Edit pelanggan',
            'konten' => $this->load->view('pelanggan/formedit', $data, TRUE),
        );
        $this->parser->parse('template', $template);
    }

    public function update() {
        $kodepelanggan = $this->input->post('kodepelanggan', TRUE);
        $queryupdatedata = $this->pelanggan->updatedata();
        $pesan = '<div class="alert alert-success alert-dismissible">'
                . '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'
                . 'Data Berhasil di Update'
                . '</div>';
        $this->session->set_flashdata('pesan', $pesan);
        redirect('pelanggan/edit/' . $kodepelanggan);
    }

    public function hapus() {
        $kodepelanggan = $this->uri->segment(3);
        $queryhapus = $this->pelanggan->hapusdata($kodepelanggan);
        if ($queryhapus) {
            $pesan = '<div class="alert alert-success alert-dismissible">'
                    . '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'
                    . 'Data Berhasil di Hapus'
                    . '</div>';
            $this->session->set_flashdata('pesan', $pesan);
            redirect('pelanggan/index');
        }
    }

}
