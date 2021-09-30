<?php defined('BASEPATH') OR exit ('no direct script acces allowed');
class Barangmasuk extends CI_Controller {
function __construct() {
     parent::__construct();
	 $this->load->model('Modelbarangmasuk');
     $this->load->model('Modelbarang');
     }
function simpantemp(){
	$kodebarang=$this->input->post('kodebarang',true);
	$bjumlah=$this->input->post('bjumlah',true);
	$bket=$this->input->post('bket',true);
	$this->Modelbarangmasuk->smptemp($kodebarang,$bjumlah,$bket);
	}
function hapusitem($kode)	{
	$this->Modelbarangmasuk->hapustmp($kode);
	redirect('barangmasuk');
	}
public function index() {
	if($this->session->userdata('masuk')==true 
	&&  $this->session->userdata('hakakses')=='admin') {
	$a['judul']	= 'Input Barang Masuk';
	$d['databarang']= $this->Modelbarangmasuk->databarang();
	$d['datatemp']	= $this->Modelbarangmasuk->datatemp();	
	$a['menu']	= $this->load->view('menu','',TRUE);
	$a['konten']	= $this->load->view('barangmasuk/add',$d,TRUE);
	$this->parser->parse('template',$a);
	}else{
	$msg='<div class="alert alert-success alert-dismissible">'
    . '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'
    . 'ANDA HARUS LOGIN TERLEBIH DAHULU'
    . '</div>';
    $this->session->set_flashdata('msg', $msg);
    redirect('log');
    }
	}	 
function simpantransaksi() {
	$idmasuk=$this->input->post('idmasuk');
	$date=$this->input->post('tanggalmasuk');
	$tanggalmasuk=date("Y-m-d",strtotime($date));
	$this->Modelbarangmasuk->simpan($idmasuk,$tanggalmasuk);
	redirect('barangmasuk');
	}
public function detail(){
	$kode=$this->uri->segment(3);
	$x['ambildata']=$this->Modelbarangmasuk->ambildata($kode);
	$a['judul']='Detail barangmasuk ';
	$a['menu']=$this->load->view('menu','',TRUE);
	$a['konten']=$this->load->view('barangmasuk/viewdetail',$x,TRUE);
	$this->parser->parse('template',$a);
	}
public function data(){
	$a['judul']='barang masuk';
	$data['tampil']=$this->Modelbarangmasuk->tampil();
	$a['menu']=$this->load->view('menu','',TRUE);
	$a['konten']=$this->load->view('barangmasuk/viewdata',$data,TRUE);
	$this->parser->parse('template',$a);
	} 
}?>