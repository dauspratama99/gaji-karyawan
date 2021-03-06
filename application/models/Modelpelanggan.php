<?php

class Modelpelanggan extends CI_Model {

    function datapelanggan() {
        return $this->db->query("select * from pelanggan");
    }

    function caripelanggan($cari)
    {

        return $this->db->query("select * from pelanggan where kodepelanggan='$cari' or namapelanggan like '%$cari%' ");
    } 
    


    function simpandata() {
        $kodepelanggan = $this->input->post('kodepelanggan', TRUE);
		        $tanggalorder = $this->input->post('tanggalorder', TRUE);

        $namapelanggan = $this->input->post('namapelanggan', TRUE);
                $alamat = $this->input->post('alamat', TRUE);

		$nohp = $this->input->post('nohp', TRUE);
        $email = $this->input->post('email', TRUE);

        $this->form_validation->set_rules('kodepelanggan', 'KODE PELANGGAN', 'required', array('required' => '%s tidak boleh kosong'));
        $this->form_validation->set_rules('namapelanggan', 'NAMA PELANGGAN', 'required', array('required' => '%s tidak boleh kosong'));
                $this->form_validation->set_rules('alamat', 'ALAMAT', 'required', array('required' => '%s tidak boleh kosong'));

		$this->form_validation->set_rules('nohp', 'NOHP', 'required|numeric', array('required' => '%s tidak boleh kosong', 'numeric' => '%s harus angka'));
       
	  
        if ($this->form_validation->run() == FALSE) {
            return FALSE;
        } else {
            return $this->db->query("INSERT INTO pelanggan VALUES('$kodepelanggan','$tanggalorder',
			'$namapelanggan','$alamat','$nohp','$email')");
        }
    }

    function ambildata($kodepelanggan) {
        return $this->db->query("select * from pelanggan where kodepelanggan = '$kodepelanggan'");
    }

    function updatedata() {
        $kodepelanggan = $this->input->post('kodepelanggan', TRUE);
                $tanggalorder = $this->input->post('tanggalorder', TRUE);

		$namapelanggan = $this->input->post('namapelanggan', TRUE);
              $alamat = $this->input->post('alamat', TRUE);

		$nohp = $this->input->post('nohp', TRUE);
        $email = $this->input->post('email', TRUE);

        return $this->db->query("UPDATE pelanggan SET tanggalorder='$tanggalorder',namapelanggan='$namapelanggan',
		alamat='$alamat',nohp='$nohp'
		,email='$email' WHERE kodepelanggan='$kodepelanggan'");
    }
    
    function hapusdata($kodepelanggan){
        return $this->db->query("DELETE FROM pelanggan WHERE kodepelanggan='$kodepelanggan'");
    }

}
