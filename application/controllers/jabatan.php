<?php class Jabatan extends CI_Controller {
public function __construct() {
        parent::__construct();
        $this->load->library(array('form_validation', 'session'));
        $this->load->model('Modeljabatan', 'jabatan');
}
public function kode(){
        $this->db->select('RIGHT(kodejabatan,2) as kode', FALSE); 
        $this->db->order_by('kode','DESC'); 
        $this->db->limit(1); 
        $query = $this->db->get('jabatan');  
        if($query->num_rows() <> 0){ 
            $dt = $query->row(); 
            $kode = intval($dt->kode) + 1; 
        }else{ 
            $kode = 1; 
        } 
        $kodemax  = str_pad($kode, 3, "0", STR_PAD_LEFT); 
        $kodejadi = "JB-".$kodemax;  
        return $kodejadi;
}
public function index(){
		if($this->session->userdata('masuk')==true 
		&&  $this->session->userdata('hakakses')=='admin')
		 {
        $querydatajabatan = $this->jabatan->datajabatan();
        $data = array(
            'tampildata' => $querydatajabatan
        );
        $template = array(
            'menu' => $this->load->view('menu', '', TRUE),
            'judul' => 'Data jabatan',
            'konten' => $this->load->view('jabatan/viewdata', $data, TRUE),
        );
        $this->parser->parse('template', $template);
		}else{
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
            'judul' => 'Tambah jabatan',
            'konten' => $this->load->view('jabatan/formtambah', $d, TRUE),
        );
        $this->parser->parse('template', $template);
}
public function simpan() {
        $querysimpandata = $this->jabatan->simpandata();
        if ($querysimpandata == FALSE) {
            $this->tambah();
        } else {
            $pesan = '<div class="alert alert-success alert-dismissible">'
                    . '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'
                    . 'Data Berhasil di Simpan'
                    . '</div>';
            $this->session->set_flashdata('pesan', $pesan);
            redirect('jabatan/tambah');
        }
}
public function edit() {
        $kodejabatan = $this->uri->segment(3);
        $queryambildata = $this->jabatan->ambildata($kodejabatan);
        if ($queryambildata->num_rows() > 0) {
            $baris = $queryambildata->row_array();
            $data = array(
                'kodejabatan' => $baris['kodejabatan'],
                'namajabatan' => $baris['namajabatan'],
				'gajipokok' => $baris['gajipokok'],
                'tunjanganjabatan' => $baris['tunjanganjabatan']
            );
        } else {
            exit('Data tidak DiTemukan');
        }
        $template = array(
            'menu' => $this->load->view('menu', '', TRUE),
            'judul' => 'Edit jabatan',
            'konten' => $this->load->view('jabatan/formedit', $data, TRUE),
        );
        $this->parser->parse('template', $template);
}
public function update() {
        $kodejabatan = $this->input->post('kodejabatan', TRUE);
        $queryupdatedata = $this->jabatan->updatedata();
        $pesan = '<div class="alert alert-success alert-dismissible">'
                . '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'
                . 'Data Berhasil di Update'
                . '</div>';
        $this->session->set_flashdata('pesan', $pesan);
        redirect('jabatan/edit/' . $kodejabatan);
}
public function hapus() {
        $kodejabatan = $this->uri->segment(3);
        $queryhapus = $this->jabatan->hapusdata($kodejabatan);
        if ($queryhapus) {
            $pesan = '<div class="alert alert-success alert-dismissible">'
                    . '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'
                    . 'Data Berhasil di Hapus'
                    . '</div>';
            $this->session->set_flashdata('pesan', $pesan);
            redirect('jabatan/index');
        }
    }
}