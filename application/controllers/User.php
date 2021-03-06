<?php

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library(array('form_validation', 'session'));
        $this->load->model('Modeluser', 'user');
    }

    public function index() {
        $querydatauser = $this->user->datauser();
        $data = array(
            'tampildata' => $querydatauser
        );
        $template = array(
            'menu' => $this->load->view('menu', '', TRUE),
            'judul' => 'Data User',
            'konten' => $this->load->view('user/viewdata', $data, TRUE),
        );
        $this->parser->parse('template', $template);
    }

    public function tambah() {
        $template = array(
            'menu' => $this->load->view('menu', '', TRUE),
            'judul' => 'Tambah User',
            'konten' => $this->load->view('user/formtambah', '', TRUE),
        );
        $this->parser->parse('template', $template);
    }

    public function simpan() {
        $querysimpandata = $this->user->simpandata();
        if ($querysimpandata == FALSE) {
            $this->tambah();
        } else {
            $pesan = '<div class="alert alert-success alert-dismissible">'
                    . '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'
                    . 'Data Berhasil di Simpan'
                    . '</div>';
            $this->session->set_flashdata('pesan', $pesan);
            redirect('user/tambah');
        }
    }

    public function edit() {
        $id = $this->uri->segment(3);
        $queryambildata = $this->user->ambildata($id);
        if ($queryambildata->num_rows() > 0) {
            $baris = $queryambildata->row_array();
            $data = array(
                'id' => $baris['id'],
                'user' => $baris['user'],
				 'password' => $baris['password'],
                'hakakses' => $baris['hakakses'],
            );
        } else {
            exit('Data tidak DiTemukan');
        }
        $template = array(
            'menu' => $this->load->view('menu', '', TRUE),
            'judul' => 'Edit user',
            'konten' => $this->load->view('user/formedit', $data, TRUE),
        );
        $this->parser->parse('template', $template);
    }

    public function update() {
        $id = $this->input->post('id', TRUE);
        $queryupdatedata = $this->user->updatedata();
        $pesan = '<div class="alert alert-success alert-dismissible">'
                . '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'
                . 'Data Berhasil di Update'
                . '</div>';
        $this->session->set_flashdata('pesan', $pesan);
        redirect('user/edit/' . $id);
    }

    public function hapus() {
        $id = $this->uri->segment(3);
        $queryhapus = $this->user->hapusdata($id);
        if ($queryhapus) {
            $pesan = '<div class="alert alert-success alert-dismissible">'
                    . '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'
                    . 'Data Berhasil di Hapus'
                    . '</div>';
            $this->session->set_flashdata('pesan', $pesan);
            redirect('user/index');
        }
    }

	public function gantipassword(){
		$template = array(
            'menu' => $this->load->view('menu', '', TRUE),
            'judul' => 'Tambah User',
            'konten' => $this->load->view('user/formgantipassword', '', TRUE),
        );
        $this->parser->parse('template', $template);
	}

	function updatepassword() {
		$id=$this->session->userdata('id');
		$pl = $this->input->post('passlama', true);
		$pb = $this->input->post('passbaru', true);
		$upb = $this->input->post('ulangipassbaru', true);
		$this->form_validation->set_rules('passlama',  'Password  Lama',  'required', array(
			'required' => '%s tidak boleh kosong'));

		$this->form_validation->set_rules('passbaru',  'Password  Baru',  'required', array(
			'required' => '%s tidak boleh kosong'));
		$this->form_validation->set_rules('ulangipassbaru',  'Ulang  Password  Baru', 'required|matches[passbaru]', array(
			'required' => '%s tidak boleh kosong',
			'matches' => '%s harus sama dengan inputan password baru'
		));

		if ($this->form_validation->run() == false) {
		$pesan = '<div class="alert alert-danger alert-dismissible">'.  '<button  type="button"  class="close"  data-dismiss="alert" aria-hidden="true">&times;</button>'. validation_errors(). '</div>';
		$this->session->set_flashdata('pesan', $pesan);redirect('user/gantipassword');
		} else {
			$dataupdate = array('password' => md5($pb)
			);

		$this->db->where('id',$id);
		$q = $this->db->update('user', $dataupdate);if ($q == true) {
			$pesan = '<div class="alert alert-success alert-dismissible">'. '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'. 'Password anda berhasil di ganti, silahkan login kembali'. '</div>';
			$this->session->set_flashdata('pesan', $pesan);
		redirect('Log');
}
}
}






}
