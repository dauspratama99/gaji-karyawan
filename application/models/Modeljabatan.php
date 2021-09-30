<?php

class Modeljabatan extends CI_Model {

    function datajabatan() {
        return $this->db->query("select * from jabatan");
    }

    function carijabatan($cari)
    {

        return $this->db->query("select * from jabatan where kodejabatan='$cari' or namajabatan like '%$cari%' ");
    } 
    


    function simpandata() {
        $kodejabatan = $this->input->post('kodejabatan', TRUE);
        $namajabatan = $this->input->post('namajabatan', TRUE);
        $gajipokok = $this->input->post('gajipokok', TRUE);
		 $tunjanganjabatan = $this->input->post('tunjanganjabatan', TRUE);

        $this->form_validation->set_rules('kodejabatan', 'KODE JABATAN', 'required', array('required' => '%s tidak boleh kosong'));
        $this->form_validation->set_rules('namajabatan', 'NAMA JABATAN', 'required', array('required' => '%s tidak boleh kosong'));
       
        $this->form_validation->set_rules('gajipokok', 'GAJI POKOK', 'required|numeric', array('required' => '%s tidak boleh kosong', 'numeric' => '%s harus angka'));

$this->form_validation->set_rules('tunjanganjabatan', 'TUNJANGAN JABATAN', 'required|numeric', array('required' => '%s tidak boleh kosong', 'numeric' => '%s harus angka'));


        if ($this->form_validation->run() == FALSE) {
            return FALSE;
        } else {
            return $this->db->query("INSERT INTO jabatan VALUES('$kodejabatan','$namajabatan','$tunjanganjabatan','$gajipokok')");
        }
    }

    function ambildata($kodejabatan) {
        return $this->db->query("select * from jabatan where kodejabatan = '$kodejabatan'");
    }

    function updatedata() {
        $kodejabatan = $this->input->post('kodejabatan', TRUE);
        $namajabatan = $this->input->post('namajabatan', TRUE);

		        $gajipokok = $this->input->post('gajipokok', TRUE);
				$tunjanganjabatan = $this->input->post('tunjanganjabatan', TRUE);
       
        return $this->db->query("UPDATE jabatan SET namajabatan='$namajabatan',tunjanganjabatan='$tunjanganjabatan'
		,gajipokok='$gajipokok' WHERE kodejabatan='$kodejabatan'");
    }
    
    function hapusdata($kodejabatan){
        return $this->db->query("DELETE FROM jabatan WHERE kodejabatan='$kodejabatan'");
    }

}
