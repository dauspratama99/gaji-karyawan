<?php class Laporan_master extends CI_Controller {
function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
        $url=base_url();
        redirect($url);
		};
		$this->load->model('Modelbarang');
		$this->load->model('Modelbarangmasuk');
		$this->load->model('Modelkaryawan');
		$this->load->model('Modelpelanggan');
		$this->load->model('Modeljabatan');
		$this->load->model('Modelpemasangan');
		$this->load->model('Modelgaji');
		$this->load->model('M_laporan');
		$this->load->model('Modeluser');
}
function index(){
	if($this->session->userdata('hakakses')=='admin'){
		$b['judul']				 = 'Laporan Data Master';	
		$b['jabatan_namajabatan']=$this->M_laporan->get_namajabatan_jabatan();
		$a['judul']				 = 'CETAK LAPORAN';
		$a['menu']				 = $this->load->view('menu','',TRUE);
		$a['konten']			 = $this->load->view('v_laporan',$b,TRUE);
		$this->parser->parse('template',$a);
	}else if($this->session->userdata('hakakses')=='korlap'){
        $b['judul']				 = 'Laporan Data Master';	
		$b['jabatan_namajabatan']=$this->M_laporan->get_namajabatan_jabatan();
		$a['judul']              = 'CETAK LAPORAN';
		$a['menu']			     = $this->load->view('menu','',TRUE);
		$a['konten']			 = $this->load->view('v_laporan',$b,TRUE);
		$this->parser->parse('template',$a);
	}else if($this->session->userdata('hakakses')=='teknisi'){
        $b['judul']			= 'Laporan Data Master';	
		$b['jabatan_namajabatan']=$this->M_laporan->get_namajabatan_jabatan();
		$a['judul']         = 'CETAK LAPORAN';
		$a['menu']			= $this->load->view('menu','',TRUE);
		$a['konten']			= $this->load->view('v_laporan',$b,TRUE);
		$this->parser->parse('template',$a);
	}else if($this->session->userdata('hakakses')=='pimpinan'){
        $b['judul']			= 'Laporan Data Master';	
		$b['jabatan_namajabatan']=$this->M_laporan->get_namajabatan_jabatan();
		$a['judul']         = 'CETAK LAPORAN';
		$a['menu']			= $this->load->view('menu','',TRUE);
		$a['konten']			= $this->load->view('v_laporan',$b,TRUE);
		$this->parser->parse('template',$a);
		}else{
		echo "Halaman tidak ditemukan";
		}
}
function lap_barang(){
		$x['data']=$this->M_laporan->get_barang();
		$this->load->view('laporan1/v_lap_barang',$x);
}
function lap_karyawan(){
		$x['data']=$this->M_laporan->get_karyawan();
		$this->load->view('laporan1/v_lap_karyawan',$x);
}
function lap_pelangan(){
		$x['data']=$this->M_laporan->get_pelangan();
		$this->load->view('laporan1/v_lap_pelangan',$x);
}
function lap_jabatan(){
		$x['data']=$this->M_laporan->get_jabatan();
		$this->load->view('laporan1/v_lap_jabatan',$x);
}
function lap_user(){
		$x['data']=$this->M_laporan->get_user();
		$this->load->view('laporan1/v_lap_user',$x);
}
function lap_jabatan_namajabatan(){
		$namajabatan=$this->input->post('namajabatan');
		$x['jml']=$this->M_laporan->get_total_jabatan_namajabatan($namajabatan);
		$x['data']=$this->M_laporan->get_jabatan_namajabatan($namajabatan);
		$this->load->view('laporan1/v_lap_jabatan_namajabatan',$x);
}
function gaji(){
	if($this->session->userdata('hakakses')=='admin'){
        $b['judul']			= 'Laporan Data Transaksi penggajian';	
		$a['judul']         = 'CETAK LAPORAN';
		$b['jual_bln']      =$this->M_laporan->get_bulan_jual();
		$b['jual_thn']      =$this->M_laporan->get_tahun_jual();
		$b['gaji_idgaji']=$this->M_laporan->get_idgaji_gaji();
		$a['menu']			= $this->load->view('menu','',TRUE);
		$a['konten']			= $this->load->view('v_laporan_gaji',$b,TRUE);
		$this->parser->parse('template',$a);
	}else if($this->session->userdata('hakakses')=='korlap'){     
        $b['judul']			= 'Laporan Data Transaksi penggajian';	
		$a['judul']         = 'CETAK LAPORAN';
		$b['jual_bln']      =$this->M_laporan->get_bulan_jual();
		$b['jual_thn']      =$this->M_laporan->get_tahun_jual();
		$b['gaji_idgaji']=$this->M_laporan->get_idgaji_gaji();
		$a['menu']			= $this->load->view('menu','',TRUE);
		$a['konten']			= $this->load->view('v_laporan_gaji',$b,TRUE);
		$this->parser->parse('template',$a);
	}else if($this->session->userdata('hakakses')=='teknisi'){
        $b['judul']			= 'Laporan Data Transaksi penggajian';	
		$a['judul']         = 'CETAK LAPORAN';
		$b['jual_bln']      =$this->M_laporan->get_bulan_jual();
		$b['jual_thn']      =$this->M_laporan->get_tahun_jual();
		$b['gaji_idgaji']=$this->M_laporan->get_idgaji_gaji();
		$a['menu']			= $this->load->view('menu','',TRUE);
		$a['konten']			= $this->load->view('v_laporan_gaji',$b,TRUE);
		$this->parser->parse('template',$a);
	}else if($this->session->userdata('hakakses')=='pimpinan'){
        $b['judul']			= 'Laporan Data Transaksi penggajian';	
		$a['judul']         = 'CETAK LAPORAN';
		$b['jual_bln']      =$this->M_laporan->get_bulan_jual();
		$b['jual_thn']      =$this->M_laporan->get_tahun_jual();
		$b['gaji_idgaji']=$this->M_laporan->get_idgaji_gaji();
		$a['menu']			= $this->load->view('menu','',TRUE);
		$a['konten']			= $this->load->view('v_laporan_gaji',$b,TRUE);
		$this->parser->parse('template',$a);
	}else{
        echo "Halaman tidak ditemukan";
    }
}
function lap_data_gaji(){
		$x['data']=$this->M_laporan->get_data_gaji();
		$this->load->view('laporan1/v_lap_gaji',$x);
}
function lap_gaji_perbulan(){
		$bulan=$this->input->post('bln');
		$x['jml']=$this->M_laporan->get_total_gaji_perbulan($bulan);
		$x['data']=$this->M_laporan->get_gaji_perbulan($bulan);
		$this->load->view('laporan1/v_lap_gaji_perbulan',$x);
}
function lap_gaji_pertahun(){
		$x['tahun']=$this->input->post('thn');
		//$x['jml']=$this->M_laporan->get_total_gaji_pertahun($tahun);
		//$x['data']=$this->M_laporan->get_gaji_pertahun($tahun);
		$this->load->view('laporan1/v_lap_gaji_pertahun',$x);
}	
function lap_gaji_idgaji(){
		$idgaji=$this->input->post('idgaji');
		$x['jml']=$this->M_laporan->get_total_gaji_idgaji($idgaji);
		$x['data']=$this->M_laporan->get_gaji_idgaji($idgaji);
		$this->load->view('laporan1/v_lap_gaji_idgaji',$x);
}
function barangmasuk(){
	if($this->session->userdata('hakakses')=='admin'){
        $b['judul']			= 'Laporan Data Transaksi Barang Masuk';	
		$a['judul']         = 'CETAK LAPORAN';
		$b['barangmasuk_bln']      =$this->M_laporan->get_bulan_barangmasuk();
		$b['barangmasuk_thn']      =$this->M_laporan->get_tahun_barangmasuk();
		$b['barangmasuk_idmasuk']      =$this->M_laporan->get_idmasuk_barangmasuk();
		$a['menu']			= $this->load->view('menu','',TRUE);
		$a['konten']			= $this->load->view('v_laporan_barangmasuk',$b,TRUE);
		$this->parser->parse('template',$a);
	}else if($this->session->userdata('hakakses')=='korlap'){
        $b['judul']			= 'Laporan Data Transaksi Barang Masuk';	
		$a['judul']         = 'CETAK LAPORAN';
		$b['barangmasuk_bln']      =$this->M_laporan->get_bulan_barangmasuk();
		$b['barangmasuk_thn']      =$this->M_laporan->get_tahun_barangmasuk();
		$b['barangmasuk_idmasuk']      =$this->M_laporan->get_idmasuk_barangmasuk();
		$a['menu']			= $this->load->view('menu','',TRUE);
		$a['konten']			= $this->load->view('v_laporan_barangmasuk',$b,TRUE);
		$this->parser->parse('template',$a);
	}else if($this->session->userdata('hakakses')=='teknisi'){
        $b['judul']			= 'Laporan Data Transaksi Barang Masuk';	
		$a['judul']         = 'CETAK LAPORAN';
		$b['barangmasuk_bln']      =$this->M_laporan->get_bulan_barangmasuk();
		$b['barangmasuk_thn']      =$this->M_laporan->get_tahun_barangmasuk();
		$b['barangmasuk_idmasuk']      =$this->M_laporan->get_idmasuk_barangmasuk();
		$a['menu']			= $this->load->view('menu','',TRUE);
		$a['konten']			= $this->load->view('v_laporan_barangmasuk',$b,TRUE);
		$this->parser->parse('template',$a);
	}else if($this->session->userdata('hakakses')=='pimpinan'){
        $b['judul']			= 'Laporan Data Transaksi Barang Masuk';	
		$a['judul']         = 'CETAK LAPORAN';
		$b['barangmasuk_bln']      =$this->M_laporan->get_bulan_barangmasuk();
		$b['barangmasuk_thn']      =$this->M_laporan->get_tahun_barangmasuk();
		$b['barangmasuk_idmasuk']      =$this->M_laporan->get_idmasuk_barangmasuk();
		$a['menu']			= $this->load->view('menu','',TRUE);
		$a['konten']			= $this->load->view('v_laporan_barangmasuk',$b,TRUE);
			$this->parser->parse('template',$a);
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
function lap_data_barangmasuk(){
		$x['data']=$this->M_laporan->get_data_barangmasuk();
		$this->load->view('laporan1/v_lap_barangmasuk',$x);
}
function lap_barangmasuk_perbulan(){
		$bulan=$this->input->post('bln');
		$x['jml']=$this->M_laporan->get_total_barangmasuk_perbulan($bulan);
		$x['data']=$this->M_laporan->get_barangmasuk_perbulan($bulan);
		$this->load->view('laporan1/v_lap_barangmasuk_perbulan',$x);
}
function lap_barangmasuk_pertahun(){
		$x['tahun']=$this->input->post('thn');
		//$x['jml']=$this->M_laporan->get_total_barangmasuk_pertahun($tahun);
		//$x['data']=$this->M_laporan->get_barangmasuk_pertahun($tahun);
		$this->load->view('laporan1/v_lap_barangmasuk_pertahun',$x);
}
function lap_barangmasuk_idmasuk(){
		$idmasuk=$this->input->post('idmasuk');
		$x['jml']=$this->M_laporan->get_total_barangmasuk_idmasuk($idmasuk);
		$x['data']=$this->M_laporan->get_barangmasuk_idmasuk($idmasuk);
		$this->load->view('laporan1/v_lap_barangmasuk_idmasuk',$x);
}
function barangkeluar(){
	if($this->session->userdata('hakakses')=='admin'){
        $b['judul']			= 'Laporan Data Transaksi Barang Keluar';	
		$a['judul']         = 'CETAK LAPORAN';
		$b['barangkeluar_bln']      =$this->M_laporan->get_bulan_barangkeluar();
		$b['barangkeluar_thn']      =$this->M_laporan->get_tahun_barangkeluar();
	$b['barangkeluar_kodepemasangan']=$this->M_laporan->get_kodepemasangan_barangkeluar();
		$a['menu']			= $this->load->view('menu','',TRUE);
		$a['konten']			= $this->load->view('v_laporan_barangkeluar',$b,TRUE);
		$this->parser->parse('template',$a);
	}else if($this->session->userdata('hakakses')=='korlap'){
        $b['judul']			= 'Laporan Data Transaksi Barang Keluar';	
		$a['judul']         = 'CETAK LAPORAN';
		$b['barangkeluar_bln']      =$this->M_laporan->get_bulan_barangkeluar();
		$b['barangkeluar_thn']      =$this->M_laporan->get_tahun_barangkeluar();
	$b['barangkeluar_kodepemasangan']=$this->M_laporan->get_kodepemasangan_barangkeluar();
		$a['menu']			= $this->load->view('menu','',TRUE);
		$a['konten']			= $this->load->view('v_laporan_barangkeluar',$b,TRUE);
		$this->parser->parse('template',$a);
	}else if($this->session->userdata('hakakses')=='teknisi'){
        $b['judul']			= 'Laporan Data Transaksi Barang Keluar';	
		$a['judul']         = 'CETAK LAPORAN';
		$b['barangkeluar_bln']      =$this->M_laporan->get_bulan_barangkeluar();
		$b['barangkeluar_thn']      =$this->M_laporan->get_tahun_barangkeluar();
	$b['barangkeluar_kodepemasangan']=$this->M_laporan->get_kodepemasangan_barangkeluar();
		$a['menu']			= $this->load->view('menu','',TRUE);
		$a['konten']			= $this->load->view('v_laporan_barangkeluar',$b,TRUE);
		$this->parser->parse('template',$a);
	}else if($this->session->userdata('hakakses')=='pimpinan'){
        $b['judul']			= 'Laporan Data Transaksi Barang Keluar';	
		$a['judul']         = 'CETAK LAPORAN';
		$b['barangkeluar_bln']      =$this->M_laporan->get_bulan_barangkeluar();
		$b['barangkeluar_thn']      =$this->M_laporan->get_tahun_barangkeluar();
	$b['barangkeluar_kodepemasangan']=$this->M_laporan->get_kodepemasangan_barangkeluar();
		$a['menu']			= $this->load->view('menu','',TRUE);
		$a['konten']			= $this->load->view('v_laporan_barangkeluar',$b,TRUE);
		$this->parser->parse('template',$a);
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
function lap_data_barangkeluar(){
		$x['data']=$this->M_laporan->get_data_barangkeluar();
		$this->load->view('laporan1/v_lap_barangkeluar',$x);
}
function lap_barangkeluar_perbulan(){
		$bulan=$this->input->post('bln');
		$x['jml']=$this->M_laporan->get_total_barangkeluar_perbulan($bulan);
		$x['data']=$this->M_laporan->get_barangkeluar_perbulan($bulan);
		$this->load->view('laporan1/v_lap_barangkeluar_perbulan',$x);
}
function lap_barangkeluar_pertahun(){
		$x['tahun']=$this->input->post('thn');
		//$x['jml']=$this->M_laporan->get_total_barangkeluar_pertahun($tahun);
		//$x['data']=$this->M_laporan->get_barangkeluar_pertahun($tahun);
		$this->load->view('laporan1/v_lap_barangkeluar_pertahun',$x);
}
function lap_barangkeluar_kodepemasangan(){
		$kodepemasangan=$this->input->post('kodepemasangan');
		$x['jml']=$this->M_laporan->get_total_barangkeluar_kodepemasangan($kodepemasangan);
		$x['data']=$this->M_laporan->get_barangkeluar_kodepemasangan($kodepemasangan);
		$this->load->view('laporan1/v_lap_barangkeluar_kodepemasangan',$x);
}
function pemasangan(){
	if($this->session->userdata('hakakses')=='admin'){
        $b['judul']			= 'Laporan Data Transaksi Pemasangan';	
		$a['judul']         = 'CETAK LAPORAN';
		$b['pemasangan_bln']      =$this->M_laporan->get_bulan_pemasangan();
		$b['pemasangan_thn']      =$this->M_laporan->get_tahun_pemasangan();
		$b['pemasangan_kodepemasangan']=$this->M_laporan->get_kodepemasangan_pemasangan();
		$a['menu']			= $this->load->view('menu','',TRUE);
		$a['konten']			= $this->load->view('v_laporan_pemasangan',$b,TRUE);
		$this->parser->parse('template',$a);
	}else if($this->session->userdata('hakakses')=='korlap'){
        $b['judul']			= 'Laporan Data Transaksi Pemasangan';	
		$a['judul']         = 'CETAK LAPORAN';
		$b['pemasangan_bln']      =$this->M_laporan->get_bulan_pemasangan();
		$b['pemasangan_thn']      =$this->M_laporan->get_tahun_pemasangan();
		$b['pemasangan_kodepemasangan']=$this->M_laporan->get_kodepemasangan_pemasangan();
		$a['menu']			= $this->load->view('menu','',TRUE);
		$a['konten']			= $this->load->view('v_laporan_pemasangan',$b,TRUE);
		$this->parser->parse('template',$a);
	}else if($this->session->userdata('hakakses')=='teknisi'){
        $b['judul']			= 'Laporan Data Transaksi Pemasangan';	
		$a['judul']         = 'CETAK LAPORAN';
		$b['pemasangan_bln']      =$this->M_laporan->get_bulan_pemasangan();
		$b['pemasangan_thn']      =$this->M_laporan->get_tahun_pemasangan();
		$b['pemasangan_kodepemasangan']=$this->M_laporan->get_kodepemasangan_pemasangan();
		$a['menu']			= $this->load->view('menu','',TRUE);
		$a['konten']			= $this->load->view('v_laporan_pemasangan',$b,TRUE);
		$this->parser->parse('template',$a);
	}else if($this->session->userdata('hakakses')=='pimpinan'){
        $b['judul']			= 'Laporan Data Transaksi Pemasangan';	
		$a['judul']         = 'CETAK LAPORAN';
		$b['pemasangan_bln']      =$this->M_laporan->get_bulan_pemasangan();
		$b['pemasangan_thn']      =$this->M_laporan->get_tahun_pemasangan();
		$b['pemasangan_kodepemasangan']=$this->M_laporan->get_kodepemasangan_pemasangan();
		$a['menu']			= $this->load->view('menu','',TRUE);
		$a['konten']			= $this->load->view('v_laporan_pemasangan',$b,TRUE);
		$this->parser->parse('template',$a);
	}else{
        echo "Halaman tidak ditemukan";
    }
}



function lap_data_pemasangan(){
		$x['data']=$this->M_laporan->get_data_pemasangan();
		$this->load->view('laporan1/v_lap_pemasangan',$x);
}
function lap_pemasangan_perbulan(){
		$bulan=$this->input->post('bln');
		$x['jml']=$this->M_laporan->get_total_pemasangan_perbulan($bulan);
		$x['data']=$this->M_laporan->get_pemasangan_perbulan($bulan);
		$this->load->view('laporan1/v_lap_pemasangan_perbulan',$x);
}
function lap_pemasangan_pertahun(){
		$x['tahun']=$this->input->post('thn');
		$this->load->view('laporan1/v_lap_pemasangan_pertahun',$x);
}  




function lap_pemasangan_kodepemasangan(){
		$kodepemasangan=$this->input->post('kodepemasangan');
		$x['jml']=$this->M_laporan->get_total_pemasangan_kodepemasangan($kodepemasangan);

		$x['data']=$this->M_laporan->get_pemasangan_kodepemasangan($kodepemasangan);
		$this->load->view('laporan1/v_lap_pemasangan_kodepemasangan',$x);
}

}