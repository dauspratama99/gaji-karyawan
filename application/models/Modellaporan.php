<?php

class Modellaporan extends CI_Model {

 public function __construct() {
        parent::__construct();
		}

   
    function lap_barangmasuk()
	{
        $hs1=$this->db->query(" SELECT d_idmasuk,tanggalmasuk ,d_barang,namabarang,typebarang,d_jumlah FROM barangmasuk_detail JOIN barangmasuk JOIN barang ON d_barang=kodebarang
AND d_idmasuk=idmasuk");
		return $hs1;
    }

	 function lap_gaji()
	{
        $hs1=$this->db->query("SELECT idgaji,tgl,namakaryawan,namajabatan,
		gajipokok,tunjanganjabatan,gaji.jumlahpemasangan,
(gaji.jumlahpemasangan*75000) AS biayapemasangan,(gaji.jumlahpemasangan*25000) AS biayaoperasional,
((gaji.jumlahpemasangan*75000)+(tunjanganjabatan+gajipokok)+(gaji.jumlahpemasangan*25000))AS 
totalgaji FROM gaji JOIN karyawan JOIN jabatan  ON kdkaryawan=kodekaryawan AND kd_jabatan=kodejabatan ");
		return $hs1;
    }
	function lap_barangkeluar()
	{
        $hs1=$this->db->query("SELECT d_kodepemasangan,tanggalpasang ,d_barang,namabarang,d_jumlah FROM pemasangan_detail JOIN pemasangan JOIN barang ON d_barang=kodebarang
AND d_kodepemasangan=kodepemasangan");
		return $hs1;
    }

function lap_barangmasukperiode($tglawal,$tglakhir)
	{
        $hs1=$this->db->query("SELECT tanggalmasuk,d_barang,namabarang,typebarang,d_jumlah FROM barangmasuk_detail JOIN barangmasuk JOIN barang ON d_barang=kodebarang
AND d_idmasuk=idmasuk WHERE DATE(tanggalmasuk)BETWEEN '$tglawal' AND '$tglakhir'");
		return $hs1;
    }

function lap_gajiperiode($tglawal,$tglakhir)
	{
        $hs1=$this->db->query("SELECT idgaji,tgl,namakaryawan,namajabatan,
		gajipokok,tunjanganjabatan,gaji.jumlahpemasangan,
(gaji.jumlahpemasangan*75000) AS biayapemasangan,(gaji.jumlahpemasangan*25000) AS biayaoperasional,
((gaji.jumlahpemasangan*75000)+(tunjanganjabatan+gajipokok)+(gaji.jumlahpemasangan*25000))AS 
totalgaji FROM gaji JOIN karyawan JOIN jabatan  ON kdkaryawan=kodekaryawan AND kd_jabatan=kodejabatan WHERE DATE(tgl)BETWEEN '$tglawal' AND '$tglakhir'");
		return $hs1;
    }


function lap_barangkeluarperiode($tglawal,$tglakhir)
	{
        $hs1=$this->db->query("SELECT tanggalpasang,d_barang,namabarang,typebarang,d_jumlah FROM pemasangan_detail JOIN pemasangan JOIN barang ON d_barang=kodebarang
AND d_kodepemasangan=kodepemasangan WHERE DATE(tanggalpasang)BETWEEN '$tglawal' AND '$tglakhir'");
		return $hs1;
    }


 function lap_pemasangan_periode($tglawal,$tglakhir)
	{
        $hs1=$this->db->query("SELECT kodepemasangan,tanggalpasang,jumlahpasang,namapelanggan,nointernet,namabarang,d_jumlah
 FROM pemasangan JOIN pemasangan_detail JOIN barang JOIN pelanggan   ON d_kodepemasangan=kodepemasangan AND 
			d_barang=kodebarang AND kdpelanggan=kodepelanggan
			WHERE DATE(tanggalpasang)BETWEEN '$tglawal' AND '$tglakhir' GROUP BY kodepemasangan");
		return $hs1;
    }

function lap_barangkeluar_periode($tglawal,$tglakhir)
	{
        $hs1=$this->db->query(" SELECT kodepemasangan,tanggalpasang,namakaryawan,jumlahpasang,namapelanggan,nointernet,namabarang,d_jumlah
 FROM pemasangan JOIN pemasangan_detail JOIN barang JOIN pelanggan JOIN karyawan  ON d_kodepemasangan=kodepemasangan AND 
			d_barang=kodebarang AND kdkaryawan=kodekaryawan AND kdpelanggan=kodepelanggan
			WHERE DATE(tanggalpasang)BETWEEN '$tglawal' AND '$tglakhir' GROUP BY kodepemasangan");
		return $hs1;
    }

function lap_pelanggan()
		{
			$hs1=$this->db->query("SELECT * FROM pelanggan ORDER BY kodepelanggan");
			return $hs1;
		}

		function lap_barang()
		{
			$hs1=$this->db->query("SELECT * FROM barang ORDER BY kodebarang");
			return $hs1;
		}

		function lap_jabatan()
		{
			$hs1=$this->db->query("SELECT * FROM jabatan ORDER BY kodejabatan");
			return $hs1;
		}

		function lap_karyawan()
		{
			$hs1=$this->db->query("SELECT kodekaryawan,namakaryawan,namajabatan,tunjanganjabatan,gajipokok,
			jeniskelamin,alamat,nohp,email FROM karyawan JOIN jabatan ON kodejabatan=kd_jabatan ORDER BY kodekaryawan");
			return $hs1;
		}

		







}
?>
