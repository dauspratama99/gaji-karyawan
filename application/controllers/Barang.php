<?php class Barang extends CI_Controller {
public function __construct() {
        parent::__construct();
        $this->load->library(array('form_validation', 'session'));
        $this->load->model('Modelbarang', 'barang');
		}
public function kodebarang()	{
		$this->db->select('RIGHT(kodebarang,2) as kodebarang', FALSE); 
        $this->db->order_by('kodebarang','DESC'); 
        $this->db->limit(1); 
        $query = $this->db->get('barang');  
        if($query->num_rows() <> 0){ 
            $dt = $query->row(); 
            $kodebarang = intval($dt->kodebarang) + 1; 
        }else{ 
            $kodebarang = 1; 
        } 
        $kodemax  = str_pad($kodebarang, 3, "0", STR_PAD_LEFT); 
        $kodejadi = "KBR-".$kodemax;  
        return $kodejadi;
		}
public function index()	{
		if($this->session->userdata('masuk')==true 
		&&  $this->session->userdata('hakakses')=='admin')
		 {
        $querydatabarang = $this->barang->databarang();
        $data = array(
            'tampildata' => $querydatabarang
        );
        $template = array(
            'menu'   => $this->load->view('menu', '', TRUE),
            'judul'  => 'Data Barang',
            'konten' => $this->load->view('barang/viewdata', $data, TRUE),
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
		$g['kodebarang'] = $this->kodebarang();
        $template = array(	
            'menu'   => $this->load->view('menu', '', TRUE),
            'judul'  => 'Tambah Barang',
            'konten' => $this->load->view('barang/formtambah', $g, TRUE),
        );
        $this->parser->parse('template', $template);
		}       
public function simpan() {
        $querysimpandata = $this->barang->simpandata();
        if ($querysimpandata == FALSE) {
            $this->tambah();
        } else {
            $pesan = '<div class="alert alert-success alert-dismissible">'
                    . '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'
                    . 'Data Berhasil di Simpan'
                    . '</div>';
            $this->session->set_flashdata('pesan', $pesan);
            redirect('barang/tambah');
        }
		}
public function edit() {
        $kodebarang = $this->uri->segment(3);
        $queryambildata = $this->barang->ambildata($kodebarang);
        if ($queryambildata->num_rows() > 0) {
            $baris = $queryambildata->row_array();
            $data = array(
                'kodebarang' => $baris['kodebarang'],
                'namabarang' => $baris['namabarang'],
                'typebarang' => $baris['typebarang'],
              'stok' => $baris['stok'],
				'satuan' => $baris['satuan']
            );
        } else {
            exit('Data tidak DiTemukan');
        }
        $template = array(
            'menu'   => $this->load->view('menu', '', TRUE),
            'judul'  => 'Edit Barang',
            'konten' => $this->load->view('barang/formedit', $data, TRUE),
        );
        $this->parser->parse('template', $template);
		}
public function update() {
        $kodebarang = $this->input->post('kodebarang', TRUE);
        $queryupdatedata = $this->barang->updatedata();
        $pesan = '<div class="alert alert-success alert-dismissible">'
                . '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'
                . 'Data Berhasil di Update'
                . '</div>';
        $this->session->set_flashdata('pesan', $pesan);
        redirect('barang/edit/' . $kodebarang);
		}
public function hapus() {
        $kodebarang = $this->uri->segment(3);
        $queryhapus = $this->barang->hapusdata($kodebarang);
        if ($queryhapus) {
            $pesan = '<div class="alert alert-success alert-dismissible">'
                    . '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'
                    . 'Data Berhasil di Hapus'
                    . '</div>';
            $this->session->set_flashdata('pesan', $pesan);
            redirect('barang/index');
        }
		}
}