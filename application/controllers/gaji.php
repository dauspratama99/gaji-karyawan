<?php defined('BASEPATH') OR exit ('no direct script acces allowed');
class Gaji extends CI_Controller {
function __construct() {
        parent::__construct();
		$this->load->model('Modelgaji');
		$this->load->model('Modelkaryawan');
}
public function kode()	{
        $this->db->select('RIGHT(idgaji,2) as kode', FALSE); 
        $this->db->order_by('kode','DESC'); 
        $this->db->limit(1); 
        $query = $this->db->get('gaji');  
        if($query->num_rows() <> 0){ 
            $dt = $query->row(); 
            $kode = intval($dt->kode) + 1; 
        }else{ 
            $kode = 1; 
        } 
        $kodemax  = str_pad($kode, 3, "0", STR_PAD_LEFT); 
        $kodejadi = "GJ-".$kodemax;  
        return $kodejadi;
}
public function index() {
		if($this->session->userdata('masuk')==true 
		&&  $this->session->userdata('hakakses')=='admin')	 {
		$d['kode'] = $this->kode();
		$a['judul']	= 'Input Barang Masuk';
		$d['datakaryawan']= $this->Modelgaji->datakaryawan();
		$a['menu']	= $this->load->view('menu','',TRUE);
		$a['konten']	= $this->load->view('gaji/add',$d,TRUE);
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
		$idgaji=$this->input->post('idgaji');
		$date=$this->input->post('tgl');
		$tgl=date("Y-m-d",strtotime($date));
		$kodekaryawan=$this->input->post('kodekaryawan');
		$jumlahpemasangan=$this->input->post('jumlahpemasangan');
		$this->Modelgaji->simpan($idgaji,$tgl,
		$kodekaryawan,$jumlahpemasangan);
		redirect('gaji');
}
public function detail(){
		$kode=$this->uri->segment(3);
		$x['ambildata']=$this->Modelgaji->ambildata($kode);
		$a['judul']='Detail gaji ';
		$a['menu']=$this->load->view('menu','',TRUE);
		$a['konten']=$this->load->view('gaji/viewdetail',$x,TRUE);
		$this->parser->parse('template',$a);
}
public function data(){
		$a['judul']='PENGGAJIAN';
		$data['tampil']=$this->Modelgaji->tampil();
		$a['menu']=$this->load->view('menu','',TRUE);
		$a['konten']=$this->load->view('gaji/viewdata',$data,TRUE);
		$this->parser->parse('template',$a);
} 

}?>