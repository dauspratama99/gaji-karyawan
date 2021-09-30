<?php

 defined('BASEPATH') OR exit ('no direct script acces allowed');

class Modelbarangmasuk extends CI_Model {

function smptemp($kodebarang,$bjumlah,$bket){
	return $this->db->query("insert into tempbrgmasuk values('$kodebarang','$bjumlah','$bket')");
}

public function ambildata($kode)
	{

return $this->db->query("SELECT idmasuk,tanggalmasuk,d_barang,namabarang,d_jumlah FROM barangmasuk JOIN barangmasuk_detail  join barang 
ON d_idmasuk=idmasuk and d_barang=kodebarang WHERE idmasuk='$kode'");

}


function hapustmp($kode)
	{
	return $this->db->query("delete from tempbrgmasuk where bkodebarang='$kode'");
	}

    function databarang() {
        return $this->db->query("SELECT kodebarang,namabarang,typebarang,stok FROM
		barang WHERE kodebarang NOT IN (SELECT bkodebarang from tempbrgmasuk)");
    }


function datatemp() {
        return $this->db->query("select bkodebarang,namabarang,typebarang,stok,bjumlah,bket from tempbrgmasuk JOIN barang ON
		tempbrgmasuk.bkodebarang=barang.kodebarang");
	}
    


public function tampil(){

return $this->db->query("SELECT idmasuk,tanggalmasuk FROM barangmasuk JOIN barangmasuk_detail  GROUP BY idmasuk ORDER BY tanggalmasuk DESC ");
}

function simpan($idmasuk,$tanggalmasuk){

	$a = $this->db->query("INSERT INTO barangmasuk VALUES('$idmasuk','$tanggalmasuk')");  
		
$b = $this->db->query("	INSERT INTO barangmasuk_detail(d_idmasuk,d_barang,d_jumlah) SELECT '$idmasuk',bkodebarang,bjumlah FROM tempbrgmasuk");   
		
		$c = $this->db->query(" UPDATE barang,tempbrgmasuk SET barang.stok=barang.stok+tempbrgmasuk.bjumlah
 WHERE barang.kodebarang=tempbrgmasuk.bkodebarang");  

		
		$d = $this->db->query("DELETE FROM tempbrgmasuk");     
	return $a; 
	return $b;
	return $c;
	return $d; 
	}
	


	}
?>
	
   