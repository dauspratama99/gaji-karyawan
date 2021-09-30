<script>
  $(document).ready(function(e){
    $('#tambah').click(function(e){
      var kodebarang=$('#kodebarang').val();
      var jumlah=$('#jumlah').val();
      datanya="&kodebarang="+kodebarang+"&jumlah="+jumlah;
      $.ajax({
        url: "<?php echo site_url('Pemasangan/simpantemp')?>",
        data: datanya,
        type: "POST",
        cache:false,
        success:function(msg){
          location.href=('<?php echo site_url('pemasangan')?>');
        }
      })
    });

});
</script>

<script>
  $(document).ready(function(e){
    $('#tambahkaryawan').click(function(e){
      var kodekaryawan=$('#kodekaryawan').val();
      var t_jumlah=$('#t_jumlah').val();
      datanya="&kodekaryawan="+kodekaryawan+"&t_jumlah="+t_jumlah;
      $.ajax({
        url: "<?php echo site_url('Pemasangan/simpantempkaryawan')?>",
        data: datanya,
        type: "POST",
        cache:false,
        success:function(msg){
          location.href=('<?php echo site_url('pemasangan')?>');
        }
      })
    });

});
</script>

<script>   
 function ambil(kodebarang,namabarang)  
 {     
	$('#kodebarang').val(kodebarang);    
	$('#namabarang').val(namabarang); 
	$('#myModal').modal('hide');    
 } 
</script> 
<script>   
 function ambilkaryawan(kodekaryawan,namakaryawan)  
 {     
	$('#kodekaryawan').val(kodekaryawan); 
	$('#namakaryawan').val(namakaryawan); 
	$('#myModalkaryawan').modal('hide');    
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
<form method="post" action="<?php echo site_url('pemasangan/simpantransaksi')?>" 
id="tmb" onSubmit="return cetak()";>        
<tfoot>  
<div class="col-md-15">
<section class="panel panel-info">
<header class="panel-heading">
<div class="panel-actions">
<a href="#" class="fa fa-caret-down"></a>
<a href="#" class="fa fa-times"></a>
</div>

<h2 class="panel-title">Tambah Data Barang</h2>
<p class="panel-subtitle">silahkan input data barang dibawah ini ya.....</p>
</header>
<div class="panel-body">
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label class="control-label">Kode Barang</label>
<input type="text" class="form-control" readonly name="kodebarang" id="kodebarang">
<?php echo $this->session->flashdata('error');?></td>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label class="control-label">Kode Teknisi</label>
<td><input type="text" class="form-control" readonly name="kodekaryawan" id="kodekaryawan"><?php echo $this->session->flashdata('error');?></td>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label class="control-label">Nama Barang</label>
<td><input type="text" class="form-control" readonly name="namabarang" id="namabarang"></td>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label class="control-label">Nama teknisi</label>
<td><input type="text" class="form-control" readonly name="namakaryawan" id="namakaryawan"></td>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label class="control-label">Jumlah</label>
<input type="text" class="form-control" name="jumlah" id="jumlah" placeholder="Enter jumlah"></td>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label class="control-label">jumlah pemasangan</label>
<td><input type="text" class="form-control"  name="t_jumlah" id="t_jumlah"></td>
</div>
</div>
</div>
				<br>	
<tr>
<td>
<button type="button" title="Cari Barang" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
<span class='glyphicon glyphicon-search'> cari data barang</span>
</button>
<td ><button type="button" id="tambah" class="btn btn-primary">
<span class='glyphicon glyphicon-plus'></span></button></td>		
</tr>

<tr>
<td>
<button type="button" title="Cari Teknisi" class="btn btn-primary" data-toggle="modal" data-target="#myModalkaryawan">
<span class='glyphicon glyphicon-search'>cari data teknisi</span></button>
<td ><button type="button" id="tambahkaryawan" class="btn btn-primary">
<span class='glyphicon glyphicon-plus'></span></button></td>	
</tr>
</section>
</div>
		
<div class="row">
<div class="col-md-15">
<form id="form1" class="form-horizontal">
<section class="panel panel-info">
<div class="panel-actions">
<a href="#" class="fa fa-caret-down"></a>
<a href="#" class="fa fa-times"></a>
</div>
<h2 class="panel-title">DATA PEMASANGAN</h2>
</header>

<div class="panel-body">
<div class="form-group">
<label class="col-sm-4 control-label">KODE PEMASANGAN </label>
<div class="input-group col-sm-8">       
<input type="text" name="kodepemasangan" class="form-control" id="exampleInputEmail2" placeholder="Enter id masuk" value="<?php echo $kode;?>" readonly>
<span style="font-weight: bold; color: #ff0000;">
<?php echo form_error('kodepemasangan') ?></span>
</div>
</div>

<div class="form-group">
<label class="col-sm-4 control-label">TANGGAL PASANG: </label>
<div class="input-group date col-sm-8">
<div class="input-group-addon">
<i class="fa fa-calendar"></i>
</div>
<input type="date" class="form-control pull-right" id="datepicker" name="tanggalpasang" placeholder="mm-dd-yyyy" required>
</div>
</div>			
									
<div class="form-group">
<label class="col-sm-4 control-label">JUMLAH PEMASANGAN </label>
<div class="input-group col-sm-8">       
<input type="text" name="jumlahpasang" class="form-control" id="exampleInputEmail2" placeholder="Enter jumlahpasang">
<span style="font-weight: bold; color: #ff0000;">
<?php echo form_error('jumlahpasang') ?></span>
</div>
</div>

<div class="form-group">
<label class="col-sm-4 control-label">PELANGGAN </label>
<div class="input-group col-sm-8">             
<select class="form-control select2" style="width: 100%;" name="pelanggan" id="pelanggan" required>                 
<option selected>-Pilih-</option> 
<?php foreach($datapelanggan->result_array() as $k){?>           
<option value="<?php echo $k['kodepelanggan']?>"><?php echo $k['namapelanggan']?></option>                 <?php }?>
</select>
</div>
</div>

<div class="form-group">
<label class="col-sm-4 control-label">NO INTERNET </label>
<div class="input-group col-sm-8">       
<input type="text" name="nointernet" class="form-control" id="exampleInputEmail2" placeholder="Enter nointernet">
<span style="font-weight: bold; color: #ff0000;">
<?php echo form_error('nointernet') ?></span>
</div>
</div>
</div>								
</section>
</form>
</div>

 <div class="col-xs-15" id="data_sementara">
 <div class="box-body table-responsive">
 <table class="table table-bordered">
 <thead>
 <tr>
 <th width="50" align="center">No</th>
 <th>Kode</th>
 <th>Nama Barang</th>
 <th>Type Barang</th>
 <th>Stok Barang</th>

 <th >Jumlah Pasang</th>

 <th>Aksi</th>
 </tr>
 </thead>
 <tbody>
 <?php $nomor=1;  foreach($datatemp->result_array() as $d){
       
?>  

<tr>
 <td align="center"><?php echo $nomor?><input id="dataid" type="text" 
 class="form-control editor" value="<?php echo $d['kdbrg']?>"/></td>
 <td><?php echo $d['kdbrg']; ?></td>
 <td><?php echo $d['typebarang']; ?></td>
 <td><?php echo $d['namabarang']; ?></td>
 <td><?php echo $d['stok']; ?></td>
  <td><?php echo $d['jumlah'] ?></td>
   <td>              
 <a class='btn btn-danger btn-xs' title='Hapus Item' href="<?php echo site_url('pemasangan/hapusitem/'.$d['kdbrg'].'/'.$d['namabarang'])?>">
 <span class='fa fa-trash-o'>
 </span></a>        
 </td>          
 </tr>          
 <?php $nomor++; } ?>        
 </tbody>        
 <tfoot>              





 <div class="col-xs-15" id="data_sementara">
 <div class="box-body table-responsive">
 <table class="table table-bordered">
 <thead>
 <tr>
 <th width="50" align="center">No</th>
 <th>Nama teknisi</th>
 <th>jumlah pemasangan</th>
 <th>Aksi</th>
 </tr>
 </thead>
 <tbody>
 <?php $nomor=1;  foreach($datatempkaryawan->result_array() as $d){
       
?>  

<tr>
 <td align="center"><?php echo $nomor?><input id="dataid" type="text" 
 class="form-control editor" value="<?php echo $d['namakaryawan']?>"/></td>
 <td><?php echo $d['namakaryawan']; ?></td>
   <td><?php echo $d['t_jumlah'] ?></td>
   <td>              
 <a class='btn btn-danger btn-xs' title='Hapus Item' href="<?php echo site_url('pemasangan/hapusitemkaryawan/'.$d['t_kodekaryawan'].'/'.$d['namakaryawan'])?>">
 <span class='fa fa-trash-o'>
 </span></a>        
 </td>          
 </tr>          
 <?php $nomor++; } ?>        
 </tbody>        
 <tfoot>              
        
  <tr>           
  <td colspan="8">            
  <button type="submit" class="btn btn-primary btn-sm"/>
  <span class='glyphicon glyphiconfloppy-save'>
  </span> Simpan Transaksi</button>    

  <a class='btn btn-danger btn-sm' title='Hapus Data' href='<?php echo site_url('pemasangan/data')?>' onclick="return confirm('Anda Yakin menghapus data ini?')">
  <span class='fa fa-ban'> Batal Transaksi</span></a> 
  
  <button type="button" onclick="location.href=('<?php echo site_url('pemasangan/data')?>')" class="btn btn-success btn-sm">
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
 <h4 class="modal-title" id="myModalLabel">Cari Data Barang</h4>
 <div class="box-body table-responsive">
 <table class="table table-bordered table-striped table-hover" id="datatiket">
 <thead>

<tr>
 <th width="5">No</th>
 <th>Kode Barang</th>
 <th>Nama Barang</th>
 <th>Aksi</th>
 </tr>
 </thead>
 <tbody>
 <?php $no=1;
 foreach($databarang->result_array() as $r){
 ?>
 <tr>
 <td><?php echo $no ?></td>
 <td><?php echo $r['kodebarang'] ?></td>
 <td><?php echo $r['namabarang'] ?></td>
 <td><button class="btn btn-primary btn-xs" type="button" onClick="return ambil('<?php
echo $r['kodebarang']?>','<?php echo $r['namabarang']?>')">
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

<!-- Modal -->
 <div class="modal fade bs-example-modal-lg" id="myModalkaryawan" tabindex="-1" role="dialog" arialabelledby="myModalLabel">
 <div class="modal-dialog modal-lg" role="document">
 <div class="modal-content">
 <div class="modal-header">
 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span ariahidden="true">&times;</span></button>
 <h4 class="modal-title" id="myModalLabel">Cari Data karyawan</h4>
 <div class="box-body table-responsive">
 <table class="table table-bordered table-striped table-hover" id="datatiket">
 <thead>

<tr>
 <th width="5">No</th>
 <th>Kode karyawan</th>
 <th>Nama karyawan</th>
 <th>jabatan</th>
 <th>jumlah pemasangan</th>
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
 <td><button class="btn btn-primary btn-xs" type="button" onClick="return ambilkaryawan('<?php
echo $r['kodekaryawan']?>','<?php echo $r['namakaryawan']?>')">
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