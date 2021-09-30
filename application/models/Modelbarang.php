<?php

class Modelbarang extends CI_Model {

    function databarang() {
        return $this->db->query("select * from barang");
    }

    function caribarang($cari)
    {

        return $this->db->query("select * from barang where kodebarang='$cari' or namabarang like '%$cari%' ");
    } 
    


    function simpandata() {
        $kodebarang = $this->input->post('kodebarang', TRUE);
        $namabarang = $this->input->post('namabarang', TRUE);
        $typebarang = $this->input->post('typebarang', TRUE);
        $stok = $this->input->post('stok', TRUE);
        $satuan = $this->input->post('satuan', TRUE);

        $this->form_validation->set_rules('kodebarang', 'Kode Barang', 'required', array('required' => '%s tidak boleh kosong'));
        $this->form_validation->set_rules('namabarang', 'Nama Barang', 'required', array('required' => '%s tidak boleh kosong'));
        $this->form_validation->set_rules('typebarang', 'typebarang', 'required', array('required' => '%s tidak boleh kosong'));
       
        $this->form_validation->set_rules('stok', 'Stok', 'required|numeric', array('required' => '%s tidak boleh kosong', 'numeric' => '%s harus angka'));
$this->form_validation->set_rules('satuan', 'satuan', 'required', array('required' => '%s tidak boleh kosong'));

        if ($this->form_validation->run() == FALSE) {
            return FALSE;
        } else {
            return $this->db->query("INSERT INTO barang VALUES('$kodebarang','$namabarang','$typebarang','$stok','$satuan')");
        }
    }

    function ambildata($kodebarang) {
        return $this->db->query("select * from barang where kodebarang = '$kodebarang'");
    }

    function updatedata() {
        $kodebarang = $this->input->post('kodebarang', TRUE);
        $namabarang = $this->input->post('namabarang', TRUE);

		        $typebarang = $this->input->post('typebarang', TRUE);
       
$stok = $this->input->post('stok', TRUE);
$satuan = $this->input->post('satuan', TRUE);

        return $this->db->query("UPDATE barang SET namabarang='$namabarang',stok='$stok',typebarang='$typebarang',satuan='$satuan' WHERE kodebarang='$kodebarang'");
    }
    
    function hapusdata($kodebarang){
        return $this->db->query("DELETE FROM barang WHERE kodebarang='$kodebarang'");
    }

}
