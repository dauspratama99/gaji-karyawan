<?php

 defined('BASEPATH') OR exit ('no direct script acces allowed');

class Modelpemasangan extends CI_Model {

function smptemp($kodebarang,$jumlah)
	{
	return $this->db->query("insert into temp values('$kodebarang','$jumlah')");
	}

function smptempkaryawan($kodekaryawan,$t_jumlah)
	{
	return $this->db->query("insert into temppemasangan values('$kodekaryawan','$t_jumlah')");
	}

public function ambildata($kode)
	{
return $this->db->query("SELECT d_kodepemasangan,tanggalpasang,kodekaryawan,namakaryawan,
kodepelanggan,namapelanggan,pelanggan.alamat,nointernet, d_barang,d_jumlah FROM pemasangan 
JOIN pemasangan_detail  JOIN karyawan JOIN pelanggan ON d_kodepemasangan=kodepemasangan
  AND pemasangan.kdpelanggan=pelanggan.kodepelanggan  WHERE kodepemasangan='$kode'");
	}

function hapustmp($kode)
	{
	return $this->db->query("delete from temp where kdbrg='$kode'");
	}

	function hapustmpkaryawan($kode)
	{
	return $this->db->query("delete from temppemasangan where t_kodekaryawan='$kode'");
	}

function databarang() 
	{
    return $this->db->query("SELECT kodebarang,namabarang,typebarang,stok FROM
	barang WHERE kodebarang NOT IN (SELECT kdbrg from temp)");
    }

	function datakaryawan() 
	{
    return $this->db->query("SELECT kodekaryawan,namakaryawan,namajabatan,jumlahpemasangan FROM
	karyawan JOIN jabatan ON jabatan.kodejabatan=karyawan.kd_jabatan  WHERE namajabatan='TEKNISI' and kodekaryawan
	NOT IN (SELECT t_kodekaryawan FROM temppemasangan)");
    }

function datatemp() 
	{
    return $this->db->query("select kdbrg,namabarang,typebarang,stok,jumlah
	from temp JOIN barang ON temp.kdbrg=barang.kodebarang");
	}

	function datatempkaryawan() 
	{
    return $this->db->query("select t_kodekaryawan,namakaryawan,jumlahpemasangan,
	t_jumlah from temppemasangan JOIN karyawan ON temppemasangan.t_kodekaryawan=karyawan.kodekaryawan");
	}


public function tampil()
	{
	return $this->db->query("SELECT kodepemasangan,tanggalpasang,namapelanggan,pelanggan.alamat,
nointernet,jumlahpasang FROM pemasangan JOIN pemasangan_detail  JOIN pelanggan ON d_kodepemasangan=kodepemasangan   AND pemasangan.kdpelanggan=pelanggan.kodepelanggan GROUP BY kodepemasangan ORDER BY tanggalpasang DESC ");
	}

function simpan($kodepemasangan,$tanggalpasang,
		$pelanggan,$nointernet,$jumlahpasang)
	{
	$a = $this->db->query("INSERT INTO pemasangan VALUES('$kodepemasangan','$tanggalpasang'
	,'$pelanggan','$nointernet','$jumlahpasang')");  
	$b = $this->db->query("	INSERT INTO pemasangan_detail(d_kodepemasangan,d_barang,d_jumlah) SELECT '$kodepemasangan',kdbrg,jumlah FROM temp");   

	$b = $this->db->query("	INSERT INTO k_pemasangan(k_kodepemasangan,k_karyawan,k_jumlah) SELECT '$kodepemasangan',t_kodekaryawan,t_jumlah FROM temppemasangan");   

	$c = $this->db->query(" UPDATE barang,temp SET barang.stok=barang.stok-temp.jumlah
	WHERE barang.kodebarang=temp.kdbrg");  

	$d = $this->db->query("	UPDATE karyawan,temppemasangan SET karyawan.jumlahpemasangan=karyawan.jumlahpemasangan+ t_jumlah   
	 WHERE  kodekaryawan=t_kodekaryawan ");  
	$e = $this->db->query("DELETE FROM temp");  
	$f = $this->db->query("DELETE FROM temppemasangan");  
	return $a; 
	return $b;
	return $c;
	return $d; 
	return $e;  
	return $f;  
	}
	
	}
?>
	
   