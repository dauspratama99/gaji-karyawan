<?php 
	class template extends CI_Controller {
		public function __Construct(){
			parent :: __Construct();

		}
		public function index ()
		{
			$template = array (
			 'menu' => $this->load->view('menu','',TRUE),
			 'judul' => 'selamat datang',
			 'konten' => $this->load->view('beranda','',TRUE),
			);
			$this->parser->parse('template',$template);
		}
	}
	?>
	