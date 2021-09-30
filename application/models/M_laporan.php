<?php
class M_laporan extends CI_Model{

    function get_barang(){
		$hs1=$this->db->query("SELECT * FROM barang ORDER BY kodebarang");
			return $hs1;
	}
	 function get_karyawan(){
		$hs1=$this->db->query("SELECT kodekaryawan,namakaryawan,namajabatan,tunjanganjabatan,gajipokok,
		jeniskelamin,alamat,nohp,email FROM karyawan JOIN jabatan ON kodejabatan=kd_jabatan ORDER BY kodekaryawan");
		return $hs1;
	}
	 function get_pelangan(){
		$hs1=$this->db->query("SELECT * FROM pelanggan ORDER BY kodepelanggan");
			return $hs1;
	}
	function get_jabatan(){
		$hs1=$this->db->query("SELECT * FROM jabatan ORDER BY kodejabatan");
			return $hs1;
	}
	function get_user(){
		$hsl=$this->db->query("SELECT id,user,password,hakakses FROM user ORDER BY id asc");
		return $hsl;
	}
    
	function get_bulan_jual(){
		$hsl=$this->db->query("SELECT DISTINCT DATE_FORMAT(tgl,'%M %Y') AS bulan FROM gaji");
		return $hsl;
	}
	function get_tahun_jual(){
		$hsl=$this->db->query("SELECT DISTINCT YEAR(tgl) AS tahun FROM gaji");
		return $hsl;
	}

	function get_bulan_barangmasuk(){
		$hsl=$this->db->query("SELECT DISTINCT DATE_FORMAT(tanggalmasuk,'%M %Y') AS bulan FROM barangmasuk");
		return $hsl;
	}
	function get_tahun_barangmasuk(){
		$hsl=$this->db->query("SELECT DISTINCT YEAR(tanggalmasuk) AS tahun FROM barangmasuk");
		return $hsl;
	}

	function get_idmasuk_barangmasuk(){
		$hsl=$this->db->query("SELECT DISTINCT idmasuk FROM barangmasuk");
		return $hsl;
	}
	function get_kodepemasangan_barangkeluar(){
		$hsl=$this->db->query("SELECT DISTINCT kodepemasangan FROM pemasangan");
		return $hsl;
	}
	function get_idgaji_gaji(){
		$hsl=$this->db->query("SELECT DISTINCT idgaji FROM gaji");
		return $hsl;
	}

	function get_bulan_barangkeluar(){
		$hsl=$this->db->query("SELECT DISTINCT DATE_FORMAT(tanggalpasang,'%M %Y') AS bulan FROM pemasangan_detail JOIN pemasangan JOIN barang ON d_barang=kodebarang
AND d_kodepemasangan=kodepemasangan");
		return $hsl;
	}
	function get_tahun_barangkeluar(){
		$hsl=$this->db->query("SELECT DISTINCT YEAR(tanggalpasang) AS tahun FROM pemasangan_detail JOIN pemasangan JOIN barang ON d_barang=kodebarang
AND d_kodepemasangan=kodepemasangan");
		return $hsl;
	}
	function get_bulan_pemasangan(){
		$hsl=$this->db->query("SELECT DISTINCT DATE_FORMAT(tanggalpasang,'%M %Y') AS bulan FROM pemasangan");
		return $hsl;
	}
	function get_tahun_pemasangan(){
		$hsl=$this->db->query("SELECT DISTINCT YEAR(tanggalpasang) AS tahun FROM pemasangan");
		return $hsl;
	}
	function get_kodepemasangan_pemasangan(){
		$hsl=$this->db->query("SELECT DISTINCT kodepemasangan FROM pemasangan");
		return $hsl;
	}
	function get_namajabatan_jabatan(){
		$hsl=$this->db->query("SELECT DISTINCT namajabatan FROM jabatan");
		return $hsl;
	}

	function get_data_gaji(){
		$hs1=$this->db->query("SELECT idgaji,tgl,namakaryawan,namajabatan,
		gajipokok,tunjanganjabatan,gaji.jumlahpemasangan,
		(gaji.jumlahpemasangan*75000) AS biayapemasangan,(gaji.jumlahpemasangan*25000) AS biayaoperasional,((gaji.jumlahpemasangan*75000)+(tunjanganjabatan+gajipokok)+(gaji.jumlahpemasangan*25000))AS totalgaji FROM gaji JOIN karyawan JOIN jabatan  ON kdkaryawan=kodekaryawan AND kd_jabatan=kodejabatan  ORDER BY idgaji DESC");
		return $hs1;
	}
	function get_gaji_perbulan($bulan){
		$hsl=$this->db->query("SELECT idgaji,DATE_FORMAT(tgl,'%M %Y') AS bulan,DATE_FORMAT(tgl,'%d %M %Y') AS tgl,namakaryawan,namajabatan,
		gajipokok,tunjanganjabatan,gaji.jumlahpemasangan,
		(gaji.jumlahpemasangan*75000) AS biayapemasangan,(gaji.jumlahpemasangan*25000) AS biayaoperasional,((gaji.jumlahpemasangan*75000)+(tunjanganjabatan+gajipokok)+(gaji.jumlahpemasangan*25000))AS totalgaji FROM gaji JOIN karyawan JOIN jabatan  ON kdkaryawan=kodekaryawan AND kd_jabatan=kodejabatan WHERE DATE_FORMAT
		(tgl,'%M %Y')='$bulan' ORDER BY idgaji DESC");
		return $hsl;
	}
	function get_total_gaji_perbulan($bulan){
		$hsl=$this->db->query("SELECT idgaji,DATE_FORMAT(tgl,'%M %Y') AS bulan,DATE_FORMAT(tgl,'%d %M %Y') AS tgl,namakaryawan,namajabatan,
		gajipokok,tunjanganjabatan,gaji.jumlahpemasangan,
		(gaji.jumlahpemasangan*75000) AS biayapemasangan,(gaji.jumlahpemasangan*25000) AS biayaoperasional,((gaji.jumlahpemasangan*75000)+(tunjanganjabatan+gajipokok)+(gaji.jumlahpemasangan*25000))AS totalgaji FROM gaji JOIN karyawan JOIN jabatan  ON kdkaryawan=kodekaryawan AND kd_jabatan=kodejabatan WHERE 
		DATE_FORMAT(tgl,'%M %Y')='$bulan' ORDER BY idgaji DESC");
		return $hsl;
	}
	function get_gaji_pertahun($tahun){
$hsl=$this->db->query("SELECT DATE_FORMAT(tgl,'%M %Y') AS bulan,YEAR(tgl)
AS tahun,gajipokok,tunjanganjabatan,gaji.jumlahpemasangan,
(gaji.jumlahpemasangan*75000) AS biayapemasangan,(gaji.jumlahpemasangan*25000) AS biayaoperasional,((gaji.jumlahpemasangan*75000)+(tunjanganjabatan+gajipokok)+
(gaji.jumlahpemasangan*25000))AS totalgaji FROM gaji JOIN karyawan JOIN jabatan  
ON kdkaryawan=kodekaryawan AND kd_jabatan=kodejabatan WHERE YEAR(tgl)='$tahun' 
		");
		return $hsl;
	}
	function get_total_gaji_pertahun($tahun){
		$hsl=$this->db->query("SELECT DATE_FORMAT(tgl,'%M %Y') AS bulan,YEAR(tgl)
		AS tahun,
		gajipokok,tunjanganjabatan,gaji.jumlahpemasangan,
		(gaji.jumlahpemasangan*75000) AS biayapemasangan,(gaji.jumlahpemasangan*25000) AS biayaoperasional,
		((gaji.jumlahpemasangan*75000)+(tunjanganjabatan+gajipokok)+(gaji.jumlahpemasangan*25000))AS totalgaji FROM gaji JOIN karyawan JOIN jabatan  
		ON kdkaryawan=kodekaryawan AND kd_jabatan=kodejabatan WHERE YEAR(tgl)='$tahun' 
		");
		return $hsl;
	}
	function get_gaji_idgaji($idgaji){
		$hsl=$this->db->query("SELECT idgaji, tgl,namakaryawan,namajabatan,
		gajipokok,tunjanganjabatan,gaji.jumlahpemasangan,
		(gaji.jumlahpemasangan*75000) AS biayapemasangan,(gaji.jumlahpemasangan*25000) AS biayaoperasional,((gaji.jumlahpemasangan*75000)+(tunjanganjabatan+gajipokok)+(gaji.jumlahpemasangan*25000))AS totalgaji FROM gaji JOIN karyawan JOIN jabatan  ON kdkaryawan=kodekaryawan AND kd_jabatan=kodejabatan WHERE idgaji='$idgaji' ORDER BY idgaji DESC");
		return $hsl;
	}
	function get_total_gaji_idgaji($idgaji){
		$hsl=$this->db->query("SELECT idgaji, tgl,namakaryawan,namajabatan,
		gajipokok,tunjanganjabatan,gaji.jumlahpemasangan,
		(gaji.jumlahpemasangan*75000) AS biayapemasangan,(gaji.jumlahpemasangan*25000) AS biayaoperasional,((gaji.jumlahpemasangan*75000)+(tunjanganjabatan+gajipokok)+(gaji.jumlahpemasangan*25000))AS totalgaji FROM gaji JOIN karyawan JOIN jabatan  ON kdkaryawan=kodekaryawan AND kd_jabatan=kodejabatan WHERE idgaji='$idgaji' ORDER BY idgaji DESC");
		return $hsl;
	}
	function get_jabatan_namajabatan($namajabatan){
		$hsl=$this->db->query("SELECT kodekaryawan,namakaryawan,namajabatan,
		gajipokok,tunjanganjabatan FROM karyawan JOIN  jabatan  on kd_jabatan=kodejabatan WHERE namajabatan='$namajabatan' ORDER BY namajabatan DESC");
		return $hsl;
	}
	function get_total_jabatan_namajabatan($namajabatan){
		$hsl=$this->db->query("SELECT kodekaryawan,namakaryawan,namajabatan,
		gajipokok,tunjanganjabatan FROM karyawan JOIN  jabatan  on kd_jabatan=kodejabatan WHERE namajabatan='$namajabatan' ORDER BY namajabatan DESC");
		return $hsl;
	}
	function get_data_barangmasuk(){
		$hs1=$this->db->query("SELECT d_idmasuk,tanggalmasuk ,d_barang,namabarang,typebarang,d_jumlah FROM barangmasuk_detail JOIN barangmasuk JOIN barang ON d_barang=kodebarang
		AND d_idmasuk=idmasuk  ORDER BY d_idmasuk DESC");
		return $hs1;
	}
	function get_barangmasuk_perbulan($bulan){
		$hsl=$this->db->query("SELECT d_idmasuk,DATE_FORMAT(tanggalmasuk,'%M %Y') AS bulan,DATE_FORMAT(tanggalmasuk,'%d %M %Y') AS tanggalmasuk,d_barang,namabarang,typebarang,d_jumlah FROM barangmasuk_detail JOIN barangmasuk JOIN barang ON d_barang=kodebarang
		AND d_idmasuk=idmasuk WHERE DATE_FORMAT
		(tanggalmasuk,'%M %Y')='$bulan' ORDER BY d_idmasuk DESC");
		return $hsl;
	}
	function get_barangmasuk_idmasuk($idmasuk){
		$hsl=$this->db->query("SELECT idmasuk, tanggalmasuk,namabarang,typebarang,d_jumlah FROM barangmasuk_detail JOIN barangmasuk JOIN barang ON d_barang=kodebarang
		AND d_idmasuk=idmasuk WHERE idmasuk='$idmasuk' ORDER BY idmasuk DESC");
		return $hsl;
	}
	function get_total_barangmasuk_idmasuk($idmasuk){
		$hsl=$this->db->query("SELECT idmasuk, tanggalmasuk,namabarang,typebarang,d_jumlah FROM barangmasuk_detail JOIN barangmasuk JOIN barang ON d_barang=kodebarang
		AND d_idmasuk=idmasuk WHERE idmasuk='$idmasuk' ORDER BY idmasuk DESC");
		return $hsl;
	}
	function get_total_barangmasuk_perbulan($bulan){
		$hsl=$this->db->query("SELECT d_idmasuk,DATE_FORMAT(tanggalmasuk,'%M %Y') AS bulan,DATE_FORMAT(tanggalmasuk,'%d %M %Y') AS tanggalmasuk,d_barang,namabarang,typebarang,d_jumlah FROM barangmasuk_detail JOIN barangmasuk JOIN barang ON d_barang=kodebarang
		AND d_idmasuk=idmasuk WHERE 
		DATE_FORMAT(tanggalmasuk,'%M %Y')='$bulan' ORDER BY d_idmasuk DESC");
		return $hsl;
	}
	function get_barangmasuk_pertahun($tahun){
		$hsl=$this->db->query("SELECT d_idmasuk,DATE_FORMAT(tanggalmasuk,'%M %Y') AS bulan,YEAR(tanggalmasuk)
		AS tahun,DATE_FORMAT(tanggalmasuk,'%d %M %Y') AS tanggalmasuk,d_barang,namabarang,typebarang,d_jumlah FROM barangmasuk_detail JOIN barangmasuk JOIN barang ON d_barang=kodebarang
		AND d_idmasuk=idmasuk WHERE YEAR(tanggalmasuk)='$tahun' ORDER BY d_idmasuk DESC");
		return $hsl;
	}
	function get_total_barangmasuk_pertahun($tahun){
		$hsl=$this->db->query("SELECT d_idmasuk,YEAR(tanggalmasuk) AS tahun,
		DATE_FORMAT(tanggalmasuk,'%d %M %Y') AS tanggalmasuk,d_barang,namabarang,typebarang,d_jumlah FROM barangmasuk_detail JOIN barangmasuk JOIN barang ON d_barang=kodebarang
		AND d_idmasuk=idmasuk WHERE YEAR(tanggalmasuk)='$tahun' 
		ORDER BY d_idmasuk DESC");
		return $hsl;
	}

	function get_data_barangkeluar(){
		$hs1=$this->db->query("SELECT d_kodepemasangan,tanggalpasang ,d_barang,namabarang,typebarang,d_jumlah FROM pemasangan_detail JOIN pemasangan JOIN barang ON d_barang=kodebarang
AND d_kodepemasangan=kodepemasangan  ORDER BY d_kodepemasangan DESC");
		return $hs1;
	}
	function get_barangkeluar_perbulan($bulan){
		$hsl=$this->db->query("SELECT d_kodepemasangan,DATE_FORMAT(tanggalpasang,'%M %Y')
		AS bulan,DATE_FORMAT(tanggalpasang,'%d %M %Y') AS tanggalpasang,d_barang,namabarang,typebarang,d_jumlah FROM pemasangan_detail JOIN pemasangan JOIN barang ON d_barang=kodebarang
AND d_kodepemasangan=kodepemasangan WHERE DATE_FORMAT
		(tanggalpasang,'%M %Y')='$bulan' ORDER BY d_kodepemasangan DESC");
		return $hsl;
	}

	function get_barangkeluar_kodepemasangan($kodepemasangan){
		$hsl=$this->db->query("SELECT kodepemasangan, tanggalpasang,
d_barang,namabarang,typebarang,d_jumlah FROM pemasangan_detail JOIN pemasangan JOIN barang  ON d_barang=kodebarang
AND d_kodepemasangan=kodepemasangan WHERE kodepemasangan='$kodepemasangan'ORDER BY kodepemasangan DESC");
		return $hsl;
	}

	function get_total_barangkeluar_kodepemasangan($kodepemasangan){
		$hsl=$this->db->query("SELECT kodepemasangan, tanggalpasang,
d_barang,namabarang,typebarang,d_jumlah FROM pemasangan_detail JOIN pemasangan JOIN barang  ON d_barang=kodebarang
AND d_kodepemasangan=kodepemasangan WHERE kodepemasangan='$kodepemasangan'ORDER BY kodepemasangan DESC");
		return $hsl;
	}
	function get_total_barangkeluar_perbulan($bulan){
		$hsl=$this->db->query("SELECT d_kodepemasangan,DATE_FORMAT(tanggalpasang,'%M %Y') AS bulan,DATE_FORMAT(tanggalpasang,'%d %M %Y') AS tanggalpasang,d_barang,namabarang,d_jumlah FROM pemasangan_detail JOIN pemasangan JOIN barang ON d_barang=kodebarang
AND d_kodepemasangan=kodepemasangan WHERE 
		DATE_FORMAT(tanggalpasang,'%M %Y')='$bulan' ORDER BY d_kodepemasangan DESC");
		return $hsl;
	}
	function get_barangkeluar_pertahun($tahun){
		$hsl=$this->db->query("SELECT d_kodepemasangan,DATE_FORMAT(tanggalpasang,'%M %Y') AS bulan,YEAR(tanggalpasang)
		AS tahun,DATE_FORMAT(tanggalpasang,'%d %M %Y') AS tanggalpasang,d_barang,namabarang,typebarang,d_jumlah FROM pemasangan_detail JOIN pemasangan JOIN barang ON d_barang=kodebarang
AND d_kodepemasangan=kodepemasangan WHERE YEAR(tanggalpasang)='$tahun' ORDER BY d_kodepemasangan DESC");
		return $hsl;
	}
	function get_total_barangkeluar_pertahun($tahun){
		$hsl=$this->db->query("SELECT d_kodepemasangan,YEAR(tanggalpasang) AS tahun,
		DATE_FORMAT(tanggalpasang,'%d %M %Y') AS tanggalpasang,d_barang,namabarang,typebarang,d_jumlah FROM pemasangan_detail JOIN pemasangan JOIN barang ON d_barang=kodebarang
AND d_kodepemasangan=kodepemasangan WHERE YEAR(tanggalpasang)='$tahun' 
		ORDER BY d_kodepemasangan DESC");
		return $hsl;
	}

	function get_data_pemasangan(){
		$hs1=$this->db->query("SELECT kodepemasangan,tanggalpasang,jumlahpasang,namapelanggan,
		nointernet FROM pemasangan  JOIN pelanggan   ON  
 kdpelanggan=kodepelanggan  ORDER BY kodepemasangan DESC");
		return $hs1;
	}
	function get_pemasangan_perbulan($bulan){
		$hsl=$this->db->query("SELECT kodepemasangan,DATE_FORMAT(tanggalpasang,'%M %Y') AS bulan,DATE_FORMAT(tanggalpasang,'%d %M %Y') AS tanggalpasang,
jumlahpasang,namapelanggan,nointernet
		FROM pemasangan  JOIN pelanggan   ON 
		 kdpelanggan=kodepelanggan  WHERE DATE_FORMAT
		(tanggalpasang,'%M %Y')='$bulan' ORDER BY kodepemasangan DESC");
		return $hsl;
	}
	function get_total_pemasangan_perbulan($bulan){
		$hsl=$this->db->query("SELECT kodepemasangan,DATE_FORMAT(tanggalpasang,'%M %Y') AS bulan,DATE_FORMAT(tanggalpasang,'%d %M %Y') AS tanggalpasang,
jumlahpasang,namapelanggan,nointernet
		FROM pemasangan  JOIN pelanggan JOIN karyawan  ON 
		 kdpelanggan=kodepelanggan  WHERE DATE_FORMAT
		(tanggalpasang,'%M %Y')='$bulan' ORDER BY kodepemasangan DESC");
		return $hsl;
	}
	function get_pemasangan_pertahun($tahun){
		$hsl=$this->db->query("SELECT kodepemasangan,DATE_FORMAT(tanggalpasang,'%M %Y') AS bulan,YEAR(tanggalpasang)
		AS tahun,DATE_FORMAT(tanggalpasang,'%d %M %Y') AS tanggalpasang,jumlahpasang,
		namapelanggan,nointernet
		FROM pemasangan  JOIN pelanggan  
		ON   kdpelanggan=kodepelanggan 
		WHERE YEAR(tanggalpasang)='$tahun' ORDER BY kodepemasangan DESC");
		return $hsl;
	}
	function get_total_pemasangan_pertahun($tahun){
		$hsl=$this->db->query("SELECT kodepemasangan,DATE_FORMAT(tanggalpasang,'%M %Y') AS bulan,YEAR(tanggalpasang)
		AS tahun,DATE_FORMAT(tanggalpasang,'%d %M %Y') AS tanggalpasang,jumlahpasang,
		namapelanggan,nointernet
		FROM pemasangan  JOIN pelanggan   
		ON   kdpelanggan=kodepelanggan 
		WHERE YEAR(tanggalpasang)='$tahun' ORDER BY kodepemasangan DESC");
		return $hsl;
	}
	

		function get_pemasangan_kodepemasangan($kodepemasangan){
		$hsl=$this->db->query("SELECT kodepemasangan,
		tanggalpasang
		,namapelanggan,pelanggan.alamat,
		nointernet,namakaryawan,k_jumlah FROM pemasangan JOIN pelanggan JOIN k_pemasangan
		join karyawan ON kdpelanggan=kodepelanggan and  k_kodepemasangan=kodepemasangan
		and k_karyawan=kodekaryawan
		 WHERE kodepemasangan='$kodepemasangan' ORDER BY kodepemasangan DESC");
		return $hsl;
	}

	function get_total_pemasangan_kodepemasangan($kodepemasangan){
		$hsl=$this->db->query("SELECT kodepemasangan,
		tanggalpasang,namapelanggan,pelanggan.alamat,
		nointernet,namakaryawan,k_jumlah FROM pemasangan JOIN pelanggan JOIN k_pemasangan
		join karyawan ON kdpelanggan=kodepelanggan and  k_kodepemasangan=kodepemasangan
		and k_karyawan=kodekaryawan
		 WHERE kodepemasangan='$kodepemasangan' ORDER BY kodepemasangan DESC");
		return $hsl;
	}
}



