<?php

 defined('BASEPATH') OR exit ('no direct script acces allowed');

class Modelkaryawan extends CI_Model {

public function tampil(){

return $this->db->query("SELECT kodekaryawan,namakaryawan,namajabatan,jeniskelamin,
alamat,nohp,email,jumlahpemasangan FROM karyawan JOIN jabatan  ON kodejabatan=kd_jabatan  GROUP BY kodekaryawan ORDER BY kodekaryawan ASC ");
}

	function simpan($kodekaryawan,$namakaryawan,$jabatan,$jeniskelamin,
		$alamat,$nohp,$email,$jumlahpemasangan){

	$a = $this->db->query("INSERT INTO karyawan VALUES('$kodekaryawan','$namakaryawan','$jabatan','$jeniskelamin',
		'$alamat','$nohp','$email','$jumlahpemasangan')");  
		
		 
	return $a; 
	
	}
 function datakaryawan() {
        return $this->db->query("SELECT kodekaryawan,namakaryawan, kd_jabatan,namajabatan,jeniskelamin,alamat,nohp,email,
		jumlahpemasangan FROM karyawan JOIN jabatan ON kodejabatan=kd_jabatan WHERE namajabatan='TEKNISI'");
    }

 function ambildata($kodekaryawan) {
        return $this->db->query("SELECT kodekaryawan,namakaryawan, kd_jabatan,namajabatan,jeniskelamin,alamat,nohp,email,
		jumlahpemasangan from karyawan JOIN jabatan ON kodejabatan=kd_jabatan where kodekaryawan = '$kodekaryawan'");
    }
function updatedata() {
        $kodekaryawan = $this->input->post('kodekaryawan', TRUE);
        $namakaryawan = $this->input->post('namakaryawan', TRUE);

		        $namajabatan = $this->input->post('namajabatan', TRUE);
       
$jeniskelamin = $this->input->post('jeniskelamin', TRUE);

$alamat = $this->input->post('alamat', TRUE);
        $nohp = $this->input->post('nohp', TRUE);

		        $email = $this->input->post('email', TRUE);
       
$jumlahpemasangan = $this->input->post('jumlahpemasangan', TRUE);

        return $this->db->query("UPDATE karyawan SET namakaryawan='$namakaryawan',namajabatan='$namajabatan',jeniskelamin='$jeniskelamin' ,
		alamat='$alamat',nohp='$nohp',email='$email',jumlahpemasangan='$jumlahpemasangan'
		WHERE kodekaryawan='$kodekaryawan'");
    }
    
    function hapusdata($kodekaryawan){
        return $this->db->query("DELETE FROM karyawan WHERE kodekaryawan='$kodekaryawan'");
    }













	}
?>
	
   