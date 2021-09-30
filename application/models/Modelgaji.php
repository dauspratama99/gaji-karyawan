<?php

 defined('BASEPATH') OR exit ('no direct script acces allowed');

class Modelgaji extends CI_Model {




public function ambildata($kode)
	{
return $this->db->query(" SELECT idgaji,tgl,namakaryawan,namajabatan,tunjanganjabatan,gajipokok,gaji.jumlahpemasangan,
(gaji.jumlahpemasangan*75000) AS biayapemasangan,(gaji.jumlahpemasangan*25000) AS biayaoperasional,
((gaji.jumlahpemasangan*75000)+(tunjanganjabatan+gajipokok)+(gaji.jumlahpemasangan*25000))AS totalgaji  
FROM gaji  JOIN karyawan JOIN jabatan  ON  gaji.kdkaryawan=karyawan.kodekaryawan AND karyawan.kd_jabatan=jabatan.kodejabatan 
 WHERE idgaji='$kode'");
}


function datakaryawan() {
 return $this->db->query("SELECT kodekaryawan,namakaryawan,kd_jabatan,namajabatan,jumlahpemasangan FROM karyawan JOIN jabatan ON jabatan.kodejabatan=karyawan.kd_jabatan ");
    }



public function tampil(){

return $this->db->query(" 
 SELECT idgaji,tgl,namakaryawan,namajabatan,tunjanganjabatan,gajipokok,gaji.jumlahpemasangan,
(gaji.jumlahpemasangan*75000) AS biayapemasangan,(gaji.jumlahpemasangan*25000) AS biayaoperasional,
((gaji.jumlahpemasangan*75000)+(tunjanganjabatan+gajipokok)+(gaji.jumlahpemasangan*25000))AS totalgaji  
FROM gaji  JOIN karyawan JOIN jabatan  ON  gaji.kdkaryawan=karyawan.kodekaryawan AND karyawan.kd_jabatan=jabatan.kodejabatan  GROUP BY idgaji ORDER BY tgl DESC ");
}

function simpan($idgaji,$tgl,
		$kodekaryawan,$jumlahpemasangan){

	$a = $this->db->query("INSERT INTO gaji VALUES('$idgaji','$tgl','$kodekaryawan','$jumlahpemasangan')");  

$c=$this->db->query(" UPDATE karyawan,pemasangan SET karyawan.jumlahpemasangan=0 WHERE  kodekaryawan='$kodekaryawan'"); 



		 return $a; 
	
	 return $c; 

	
		}
	


 
	
		











	}
?>
	
   