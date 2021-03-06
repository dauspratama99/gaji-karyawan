<?php defined('BASEPATH') OR exit ('no direct script acces allowed');
class Karyawan extends CI_Controller {
function __construct() {
        parent::__construct();
		 $this->load->model('Modelkaryawan');
        $this->load->model('Modeljabatan');
}
public function kode()	{
        $this->db->select('RIGHT(kodekaryawan,2) as kode', FALSE); 
        $this->db->order_by('kode','DESC'); 
        $this->db->limit(1); 
        $query = $this->db->get('karyawan');  
        if($query->num_rows() <> 0){ 
           $dt = $query->row(); 
           $kode = intval($dt->kode) + 1; 
        }else{ 
            $kode = 1; 
        } 
        $kodemax  = str_pad($kode, 3, "0", STR_PAD_LEFT); 
        $kodejadi = "KRY-".$kodemax;  
        return $kodejadi;
}
public function index() {
		if($this->session->userdata('masuk')==true 
		&&  $this->session->userdata('hakakses')=='admin')
		 {
		$d['kode'] = $this->kode();
		$a['judul']	= 'Input Data Karyawan';
		$d['datajabatan']= $this->Modeljabatan->datajabatan();
		$a['menu']	= $this->load->view('menu','',TRUE);
		$a['konten']	= $this->load->view('karyawan/add',$d,TRUE);
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
		$kodekaryawan=$this->input->post('kodekaryawan');
		$namakaryawan=$this->input->post('namakaryawan');
		$jabatan=$this->input->post('jabatan');
		$jeniskelamin=$this->input->post('jeniskelamin');
		$alamat=$this->input->post('alamat');
		$nohp=$this->input->post('nohp');
		$email=$this->input->post('email');
		$jumlahpemasangan=$this->input->post('jumlahpemasangan');
		$this->Modelkaryawan->simpan($kodekaryawan,$namakaryawan,$jabatan,$jeniskelamin,
		$alamat,$nohp,$email,$jumlahpemasangan);
		redirect('karyawan/data');
}
public function data(){
		$a['judul']='karyawan';
		$data['tampil']=$this->Modelkaryawan->tampil();
		$a['menu']=$this->load->view('menu','',TRUE);
		$a['konten']=$this->load->view('karyawan/viewdata',$data,TRUE);
		$this->parser->parse('template',$a);
} 
public function edit() {
        $kodekaryawan = $this->uri->segment(3);
        $queryambildata = $this->Modelkaryawan->ambildata($kodekaryawan);
        if ($queryambildata->num_rows() > 0) {
            $baris = $queryambildata->row_array();
            $data = array(
            'kodekaryawan' => $baris['kodekaryawan'],
            'namakaryawan' => $baris['namakaryawan'],
            'namajabatan' => $baris['namajabatan'],
            'jeniskelamin' => $baris['jeniskelamin'],
			'alamat' => $baris['alamat'],
            'nohp' => $baris['nohp'],
            'email' => $baris['email'],
            'jumlahpemasangan' => $baris['jumlahpemasangan']
            );
        } else {
            exit('Data tidak DiTemukan');
        }
        $template = array(
            'menu' => $this->load->view('menu', '', TRUE),
            'judul' => 'Edit karyawan',
            'konten' => $this->load->view('karyawan/formedit', $data, TRUE),
        );
        $this->parser->parse('template', $template);
}
public function update() {
        $kodekaryawan = $this->input->post('kodekaryawan', TRUE);
        $queryupdatedata = $this->Modelkaryawan->updatedata();
        $pesan = '<div class="alert alert-success alert-dismissible">'
        . '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'
        . 'Data Berhasil di Update'
        . '</div>';
        $this->session->set_flashdata('pesan', $pesan);
        redirect('karyawan/edit/' . $kodekaryawan);
}
public function hapus() {
        $kodekaryawan = $this->uri->segment(3);
        $queryhapus = $this->Modelkaryawan->hapusdata($kodekaryawan);
        if ($queryhapus) {
            $pesan = '<div class="alert alert-success alert-dismissible">'
        . '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'
        . 'Data Berhasil di Hapus'
        . '</div>';
        $this->session->set_flashdata('pesan', $pesan);
        redirect('karyawan/data');
        }
}
}?>