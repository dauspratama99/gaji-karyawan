
<?php

class Modeluser extends CI_Model {

    function datauser() {
        return $this->db->query("select * from user");
    }

    function cariuser($cari)
    {

        return $this->db->query("select * from user where user='$cari' ");
    } 
    


    function simpandata() {
        $id = $this->input->post('id', TRUE);
        $user = $this->input->post('user', TRUE);
		$password = $this->input->post('password', TRUE);
        $hakakses = $this->input->post('hakakses', TRUE);

        
        $this->form_validation->set_rules('user', 'User', 'required', array('required' => '%s tidak boleh kosong'));
		$this->form_validation->set_rules('password', 'Password', 'required', array('required' => '%s tidak boleh kosong'));
        $this->form_validation->set_rules('hakakses', 'Hak Akses', 'required', array('required' => '%s tidak boleh kosong'));


        if ($this->form_validation->run() == FALSE) {
            return FALSE;
        } else {
            return $this->db->query("INSERT INTO user VALUES('$id','$user',md5('$password'),'$hakakses')");
        }
    }

    function ambildata($id) {
        return $this->db->query("select * from user where id = '$id'");
    }

    function updatedata() {
         $id = $this->input->post('id', TRUE);
        $user = $this->input->post('user', TRUE);
		$password = $this->input->post('password', TRUE);
        $hakakses = $this->input->post('hakakses', TRUE);

        return $this->db->query("UPDATE user SET user='$user',password=md5('$password'),hakakses='$hakakses' WHERE id='$id'");
    }
    
    function hapusdata($id){
        return $this->db->query("DELETE FROM user WHERE id='$id'");
    }

}
