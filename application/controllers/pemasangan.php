<?php
 defined('BASEPATH') OR exit ('no direct script acces allowed');

class Pemasangan extends CI_Controller {

    function __construct() {
        parent::__construct();
		 $this->load->model('Modelpemasangan');
        $this->load->model('Modelbarang');
		$this->load->model('Modelkaryawan');
       $this->load->model('Modelpelanggan');
    }

	public function kode()	{
        $this->db->select('RIGHT(kodepemasangan,2) as kode', FALSE); 
        $this->db->order_by('kode','DESC'); 
        $this->db->limit(1); 
        $query = $this->db->get('pemasangan');  
        if($query->num_rows() <> 0){ 
           $dt = $query->row();  
           $kode = intval($dt->kode) + 1; 
        }else{ 
            $kode = 1; 
        } 
        $kodemax  = str_pad($kode, 3, "0", STR_PAD_LEFT); 
        $kodejadi = "P-".$kodemax;  
        return $kodejadi;
}
function simpantemp()
	{
	$kodebarang=$this->input->post('kodebarang',true);
	$jumlah=$this->input->post('jumlah',true);

	$this->Modelpemasangan->smptemp($kodebarang,$jumlah);
	}


function simpantempkaryawan()
	{
	$kodekaryawan=$this->input->post('kodekaryawan',true);
	$t_jumlah=$this->input->post('t_jumlah',true);

	$this->Modelpemasangan->smptempkaryawan($kodekaryawan,$t_jumlah);
	}

function hapusitem($kode)
	{
	$this->Modelpemasangan->hapustmp($kode);
	redirect('pemasangan');
}

function hapusitemkaryawan($kode)
	{
	$this->Modelpemasangan->hapustmpkaryawan($kode);
	redirect('pemasangan');
}


    public function index() {
		if($this->session->userdata('masuk')==true 
		&&  $this->session->userdata('hakakses')=='admin')
		 {
	
	$a['judul']	= 'Input Barang Masuk';
	$d['kode'] = $this->kode();
	$d['databarang']= $this->Modelpemasangan->databarang();
	$d['datatemp']	= $this->Modelpemasangan->datatemp();	
		$d['datatempkaryawan']	= $this->Modelpemasangan->datatempkaryawan();	

	$d['datakaryawan']= $this->Modelkaryawan->datakaryawan();
		$d['datapelanggan']= $this->Modelpelanggan->datapelanggan();

	$a['menu']	= $this->load->view('menu','',TRUE);
	$a['konten']	= $this->load->view('pemasangan/add',$d,TRUE);
	$this->parser->parse('template',$a);
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
	
        
	 function simpantransaksi()
		 {
	
	$kodepemasangan=$this->input->post('kodepemasangan');
	$date=$this->input->post('tanggalpasang');
	$tanggalpasang=date("Y-m-d",strtotime($date));
	$pelanggan=$this->input->post('pelanggan');
	$nointernet=$this->input->post('nointernet');

	$jumlahpasang=$this->input->post('jumlahpasang');

	$this->Modelpemasangan->simpan($kodepemasangan,$tanggalpasang,
		$pelanggan,$nointernet,$jumlahpasang);
	redirect('pemasangan');
		}

public function detail(){

$kode=$this->uri->segment(3);
$x['ambildata']=$this->Modelpemasangan->ambildata($kode);
	$a['judul']='Detail pemasangan ';

	$a['menu']=$this->load->view('menu','',TRUE);

$a['konten']=$this->load->view('pemasangan/viewdetail',$x,TRUE);

$this->parser->parse('template',$a);

}


	public function data(){
	$a['judul']='barang masuk';
$data['tampil']=$this->Modelpemasangan->tampil();
	$a['menu']=$this->load->view('menu','',TRUE);
$a['konten']=$this->load->view('pemasangan/viewdata',$data,TRUE);

$this->parser->parse('template',$a);

	
	} 

}
 ?>