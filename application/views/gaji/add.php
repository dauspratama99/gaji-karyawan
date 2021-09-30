
<script>   
 function ambil(kodekaryawan,namakaryawan,jumlahpemasangan)  
 {     
	$('#kodekaryawan').val(kodekaryawan);    
	$('#namakaryawan').val(namakaryawan);    
	$('#jumlahpemasangan').val(jumlahpemasangan); 
	

	$('#myModal').modal('hide');    
 } 
</script> 
<style type="text/css">
 .editor
{  
 display:none;   
} 
</style> 


 <body>   
 <div class="col-10 stretch-card">
                  <div class="card">
                    <div class="card-body">
                      
                                             
<div class="box-body">   
<form method="post" action="<?php echo site_url('gaji/simpantransaksi')?>" 
id="tmb" onSubmit="return cetak()";>   
       
 <tfoot>  
<div class="col-md-15">
							<section class="panel panel-info">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down"></a>
										<a href="#" class="fa fa-times"></a>
									</div>

									<h2 class="panel-title">Cari Data karyawan</h2>

									<p class="panel-subtitle">
										silahkan cari data dibawah ini ya.....
									</p>
								</header>


								<div class="panel-body">

									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
										<label class="control-label">KODE KARYAWAN</label>
<input type="text" class="form-control" readonly name="kodekaryawan" id="kodekaryawan">
<?php echo $this->session->flashdata('error');?></td>
											</div>
										</div>

<div class="col-sm-6">
											<div class="form-group">
								<label class="control-label"> NAMA KARYAWAN</label>
<input type="text" class="form-control" readonly name="namakaryawan" id="namakaryawan"></td>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
								<label class="control-label"> TOTAL PEMASANGAN</label>
<input type="text" class="form-control" readonly name="jumlahpemasangan" id="jumlahpemasangan"></td>
											</div>
										</div>
										
									</div>
								

<br>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
								<td><button type="button" title="Cari Barang" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><span class='glyphicon glyphicon-search'></span></button>
								
											</div>
										</div>

</section>
</div>
<div class="row">
						<div class="col-md-15">
							<form id="form1" class="form-horizontal">
								<section class="panel panel-info">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down"></a>
										<a href="#" class="fa fa-times"></a>
									</div>

										<h2 class="panel-title">DATA GAJI</h2>
										
									</header>
									<div class="panel-body">
										<div class="form-group">
											<label class="col-sm-4 control-label">ID GAJI</label>
											<div class="input-group col-sm-8">       
			<input type="text" name="idgaji" class="form-control" value="<?php echo $kode;?>" readonly>
							<span style="font-weight: bold; color: #ff0000;"><?php echo form_error('idgaji') ?></span>
											</div>
										</div>

									<div class="form-group">
										<label class="col-sm-4 control-label">TANGGAL </label>
										<div class="input-group date col-sm-8">
											<div class="input-group-addon">
												<i class="fa fa-calendar"></i>
											</div>
											<input type="date" class="form-control pull-right" id="datepicker" name="tgl" placeholder="mm-dd-yyyy" required>
										</div>
									</div>
										
										
										
										



</section>
</div>
        
 <tfoot>              
        
  		
           
        
  <tr>           
  <td colspan="8">            
  <button type="submit" class="btn btn-primary btn-sm"/>
  <span class='glyphicon glyphiconfloppy-save'>
  </span> Simpan Transaksi</button>    

  <a class='btn btn-danger btn-sm' title='Hapus Data' href='<?php echo site_url('gaji/data')?>' onclick="return confirm('Anda Yakin menghapus data ini?')">
  <span class='fa fa-ban'> Batal Transaksi</span></a> 
  
  <button type="button" onclick="location.href=('<?php echo site_url('gaji/data')?>')" class="btn btn-success btn-sm">
    <span class='fa  fa-mail-reply-all'> Kembali</span></a> 

  </button>
  
  </td>        
  
 </tr>
 </tfoot>
 </table>
 </div>
 </div>
 </form>
 </div>
</body>

<!-- Modal -->
 <div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" arialabelledby="myModalLabel">
 <div class="modal-dialog modal-lg" role="document">
 <div class="modal-content">
 <div class="modal-header">
 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span ariahidden="true">&times;</span></button>
 <h4 class="modal-title" id="myModalLabel">Cari Data Karyawan</h4>
 <div class="box-body table-responsive">
 <table class="table table-bordered table-striped table-hover" id="datatiket">
 <thead>

<tr>
 <th width="5">No</th>
 <th>KODE KARAYAWAN</th>
 <th>NAMA KARYAWAN</th>
   <th>JABATAN</th>

 <th>JUMLAH PEMASANGAN</th>
 
 <
 <th>Aksi</th>
 </tr>
 </thead>
 <tbody>
 <?php $no=1;
 foreach($datakaryawan->result_array() as $r){
 ?>
 <tr>
 <td><?php echo $no ?></td>
 <td><?php echo $r['kodekaryawan'] ?></td>
 <td><?php echo $r['namakaryawan'] ?></td>
 <td><?php echo $r['namajabatan'] ?></td>
 <td><?php echo $r['jumlahpemasangan'] ?></td>

 <td><button class="btn btn-primary btn-xs" type="button" onClick="return ambil('<?php
echo $r['kodekaryawan']?>','<?php echo $r['namakaryawan']?>','<?php echo $r['jumlahpemasangan']?>')">
<span class='glyphicon glyphicon-check'></span> Pilih</button>
 </td>
 </tr>
 <?php $no++; } ?>
 </tbody>
 </table>
 </div>
 </div>
 </div>
 </div>
 </div>
<!-- /Modal -->    

