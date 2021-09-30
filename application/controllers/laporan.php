<?php defined('BASEPATH') or exit('No direct script acces allowed');
class Laporan extends CI_Controller {
public function __construct() {
        parent::__construct();
        $this->load->library(array('form_validation', 'session'));
        $this->load->model('Modellaporan');
}
public function pemasangan() {
        $a['judul'] ="cetak per periode";
        $a['menu'] =$this->load->view('menu','',TRUE);
        $a['konten'] =$this->load->view('laporan/menutanggal2','',TRUE);
        $this->parser->parse('template', $a);
}
public function lap_pemasangan() {
        $tgl1 = $this->input->post('tglawal');
        $tgl2 = $this->input->post('tglakhir');
		$tglawal = date("Y-m-d",strtotime($tgl1));
		$tglakhir = date("Y-m-d",strtotime($tgl2));
        $data['awal']=$this->input->post('tglawal');
		$data['akhir']=$this->input->post('tglakhir');
        $data['title']='LAPORAN PEMASANGAN PERIODE';
		$data['data']=$this->Modellaporan->lap_pemasangan_periode($tglawal,$tglakhir);
		$this->load->view('laporan/laporan_pemasangan',$data);
}
function lap_barangmasuk(){
		$data['title']='Laporan barang masuk';
		$data['data']=$this->Modellaporan->lap_barangmasuk();
		$this->load->view('laporan/laporan_barangmasuk',$data);
}
public function barangmasukperiode() {
        $a['judul'] ="cetak per periode";
        $a['menu'] =$this->load->view('menu','',TRUE);
        $a['konten'] =$this->load->view('laporan/menutanggal4','',TRUE);
        $this->parser->parse('template', $a);
}
public function lap_barangmasukperiode() {
        $tgl1 = $this->input->post('tglawal');
        $tgl2 = $this->input->post('tglakhir');
		$tglawal = date("Y-m-d",strtotime($tgl1));
		$tglakhir = date("Y-m-d",strtotime($tgl2));
        $data['awal']=$this->input->post('tglawal');
		$data['akhir']=$this->input->post('tglakhir');
        $data['title']='LAPORAN PEMASANGAN PERIODE';
		$data['data']=$this->Modellaporan->lap_barangmasukperiode($tglawal,$tglakhir);
		$this->load->view('laporan/laporan_barangmasukperiode',$data);
}
function lap_barangkeluar()	{
		$data['title']='Laporan barang masuk';
		$data['data']=$this->Modellaporan->lap_barangkeluar();
		$this->load->view('laporan/laporan_barangkeluar',$data);
}
public function barangkeluarperiode() {
        $a['judul'] ="cetak per periode";
        $a['menu'] =$this->load->view('menu','',TRUE);
        $a['konten'] =$this->load->view('laporan/menutanggal5','',TRUE);
        $this->parser->parse('template', $a);
}
public function lap_barangkeluarperiode() {
        $tgl1 = $this->input->post('tglawal');
        $tgl2 = $this->input->post('tglakhir');
		$tglawal = date("Y-m-d",strtotime($tgl1));
		$tglakhir = date("Y-m-d",strtotime($tgl2));
        $data['awal']=$this->input->post('tglawal');
		$data['akhir']=$this->input->post('tglakhir');
        $data['title']='LAPORAN PEMASANGAN PERIODE';
		$data['data']=$this->Modellaporan->lap_barangkeluarperiode($tglawal,$tglakhir);
		$this->load->view('laporan/laporan_barangkeluarperiode',$data);
}
function lap_pelanggan(){
		$data['title']='Laporan Pelanggan';
		$data['data']=$this->Modellaporan->lap_pelanggan();
		$this->load->view('laporan/laporan_pelanggan',$data);
}
function lap_barang(){
		$data['title']='Laporan Barang';
		$data['data']=$this->Modellaporan->lap_barang();
		$this->load->view('laporan/laporan_barang',$data);
}
function lap_jabatan(){
		$data['title']='Laporan jabatan';
		$data['data']=$this->Modellaporan->lap_jabatan();
		$this->load->view('laporan/laporan_jabatan',$data);
}
function lap_karyawan()	{
		$data['title']='Laporan karyawan';
		$data['data']=$this->Modellaporan->lap_karyawan();
		$this->load->view('laporan/laporan_karyawan',$data);
}
function lap_gaji()	{
		$data['title']='Laporan barang masuk';
		$data['data']=$this->Modellaporan->lap_gaji();
		$this->load->view('laporan/laporan_gaji',$data);
}
public function gajiperiode() {
        $a['judul'] ="cetak per periode";
        $a['menu'] =$this->load->view('menu','',TRUE);
        $a['konten'] =$this->load->view('laporan/menutanggal6','',TRUE);
        $this->parser->parse('template', $a);
}
public function lap_gajiperiode() {
        $tgl1 = $this->input->post('tglawal');
        $tgl2 = $this->input->post('tglakhir');
		$tglawal = date("Y-m-d",strtotime($tgl1));
		$tglakhir = date("Y-m-d",strtotime($tgl2));
        $data['awal']=$this->input->post('tglawal');
		$data['akhir']=$this->input->post('tglakhir');
        $data['title']='LAPORAN PEMASANGAN PERIODE';
		$data['data']=$this->Modellaporan->lap_gajiperiode($tglawal,$tglakhir);
		$this->load->view('laporan/laporan_gajiperiode',$data);
    }
}