<?php
	class Modellogin extends CI_Model
	{
		function cekadmin($u,$p)
		{
			$hasil = $this->db->query("select * from user where password= md5('$p') and user='$u'");
			return $hasil;
		}		
	}
?>