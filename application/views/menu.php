<div class="nano">
<div class="nano-content">
	<nav id="menu" class="nav-main" role="navigation">
	<ul class="nav nav-main">
		<li class="nav-active">
			<a href="<?php echo site_url('template')?>">
			<i class="fa fa-home" aria-hidden="true"></i>
			<span>Dashboard</span>
			</a>
		</li>
<?php $h=$this->session->userdata('hakakses'); ?>
<?php if($h=='admin'){?>				
		<li class="nav-parent">
			<a>
			<i class="fa fa-copy" aria-hidden="true"></i>
			<span>MASTER</span>
			</a>
	<ul class="nav nav-children">
		<li>
			<a href="<?php echo base_url('index.php/barang/index')?>">BARANG</a>
		</li>
		<li>
			<a href="<?php echo base_url('index.php/jabatan/index')?>">JABATAN</a>
		</li>
		<li>
			<a href="<?php echo base_url('index.php/pelanggan/index')?>">PELANGGAN</a>
		</li>
		<li>
			<a href="<?php echo base_url('index.php/user/index')?>">USER</a>
		</li>							
	</ul>
		</li>					
		<li class="nav-parent">
			<a>
			<i class="fa fa-tasks" aria-hidden="true"></i>
			<span>TRANSAKSI</span>
			</a>
	<ul class="nav nav-children">
		<li>
			<a href="<?php echo base_url('index.php/barangmasuk/data')?>">BARANG MASUK</a>
		</li>
		<li>
			<a href="<?php echo base_url('index.php/karyawan/data')?>">KARYAWAN</a>
		</li>				
		<li>
			<a href="<?php echo base_url('index.php/pemasangan/data')?>">PEMASANGAN</a>
		</li>
		<li>
			<a href="<?php echo base_url('index.php/gaji/data')?>">GAJI</a>
		</li>																
	</ul>
		</li>											
		<li class="nav-parent">
			<a>
			<i class="fa fa-align-left" aria-hidden="true"></i>
			<span>LAPORAN</span>
			</a>
	<ul class="nav nav-children">
		<li class="">
			<a href="<?php echo site_url('Laporan_master/index')?>">
				<i class="fa fa-angle-left pull-right"></i>Laporan Data Master
			</a>
		</li>
		<li class="">
			<a href="<?php echo site_url('Laporan_master/barangmasuk/index')?>">
				<i class="fa fa-angle-left pull-right"></i>Laporan Data Barang masuk
			</a>
		</li>
		<li class="">
			<a href="<?php echo site_url('Laporan_master/barangkeluar/index')?>">
				<i class="fa fa-angle-left pull-right"></i>Laporan Data Barang Keluar
			</a>
		</li>	
		<li class="">
			<a href="<?php echo site_url('Laporan_master/pemasangan/index')?>">
				<i class="fa fa-angle-left pull-right"></i>Laporan Data Pemasangan
			</a>
		</li>			
		<li class="">
			<a href="<?php echo site_url('Laporan_master/gaji/index')?>">
				<i class="fa fa-angle-left pull-right"></i>Laporan Data Penggajian
			</a>
		</li>	
	
		
<?php } else if($h=='korlap') { ?>
	
		<li class="">
			<a href="<?php echo site_url('Laporan_master/barangmasuk/index')?>">
				<i class="fa fa-angle-left pull-right"></i>Laporan Data Barang masuk
			</a>
		</li>			
		<li class="">
			<a href="<?php echo site_url('Laporan_master/barangkeluar/index')?>">
				<i class="fa fa-angle-left pull-right"></i>Laporan Data Barang Keluar
			</a>
		</li>	
		<li class="">
			<a href="<?php echo site_url('Laporan_master/pemasangan/index')?>">
				<i class="fa fa-angle-left pull-right"></i>Laporan Data Pemasangan
		</a>
		</li>
	


<?php } else if($h=='teknisi') { ?>	

		<li class="">
			<a href="<?php echo site_url('Laporan_master/pemasangan/index')?>">
				<i class="fa fa-angle-left pull-right"></i>Laporan Data Pemasangan
			</a>
		</li>	
		

	<?php } else if($h=='pimpinan') { ?>	

		<li class="nav-parent">
			<a>
				<i class="fa fa-align-left" aria-hidden="true"></i>
				<span>LAPORAN</span>
			</a>
	<ul class="nav nav-children">
		<li class="">
			<a href="<?php echo site_url('Laporan_master/index')?>">
				<i class="fa fa-angle-left pull-right"></i>Laporan Data Master
			</a>
		</li>
		<li class="">
			<a href="<?php echo site_url('Laporan_master/barangmasuk/index')?>">
				<i class="fa fa-angle-left pull-right"></i>Laporan Data Barang masuk
			</a>
		</li>			
		<li class="">
			<a href="<?php echo site_url('Laporan_master/barangkeluar/index')?>">
				<i class="fa fa-angle-left pull-right"></i>Laporan Data Barang Keluar
			</a>
		</li>	
		<li class="">
			<a href="<?php echo site_url('Laporan_master/pemasangan/index')?>">
				<i class="fa fa-angle-left pull-right"></i>Laporan Data Pemasangan
			</a>
		</li>				
		<li class="">
			<a href="<?php echo site_url('Laporan_master/gaji/index')?>">
				<i class="fa fa-angle-left pull-right"></i>Laporan Data Penggajian
			</a>
		</li>
		 
	</ul>
	
		</li>	
			
<?php } ?>
</ul>
</nav>
</nav>
</div>