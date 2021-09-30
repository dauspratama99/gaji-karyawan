<?php
class Login extends CI_Controller {
    function __Construct ()
    {
        parent :: __Construct () ;
        $this->load->model('modellogin');
        $this->load->helper(array('form','url'));
    }
    function index ()
    {
        $this->load->view('login');
    }
    function getuser()
    {
            $u=$_POST['user'];
            $p=$_POST['password'];
            $cadmin = $this->modellogin->cekadmin($u,$p);
            if($cadmin->num_rows() > 0)
            {
                $this->session->set_userdata('masuk',true);
                $this->session->set_userdata('username',$u);
                $xcadmin = $cadmin->row_array();
                
                if($xcadmin['hakases']==1)
                    $this->session->set_userdata('akses','1');
                else if($xcadmin['hakases']==2)
                    $this->session->set_userdata('akses','2');
                else
                    $this->session->set_userdata('akses','3');
            }
            else
                $this->session->set_userdata('masuk',false);

            if($this->session->userdata('masuk')==true)
            {
                redirect('login/berhasillogin');
            }
            else
            {
                $this->session->set_flashdata('pesan','Username Atau Password Salah.');
                redirect('login');
            }

    }
    function berhasillogin()
        {
            redirect('barang/tambahbarang');
        }
    function logout()
        {
            $this->session->sess_destroy();
            redirect('login');
        }
}
?>