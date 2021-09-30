<script>
  $(document).ready(function(e){
    $('#tambah').click(function(e){
      var kodebarang=$('#kodebarang').val();
      var bjumlah=$('#bjumlah').val();
      var bket=$('#bket').val();
      datanya="&kodebarang="+kodebarang+"&bjumlah="+bjumlah+"&bket="+bket;
      $.ajax({
        url: "<?php echo site_url('Barangmasuk/simpantemp')?>",
        data: datanya,
        type: "POST",
        cache:false,
        success:function(msg){
          location.href=('<?php echo site_url('barangmasuk')?>');
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
<form method="post" action="<?php echo site_url('barangmasuk/simpantransaksi')?>" 
id="tmb" onSubmit="return cetak()";>   
       
 <tfoot>  





 
<div class="col-md-15">
							<section class="panel panel-primary">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down"></a>
										<a href="#" class="fa fa-times"></a>
									</div>
									<h2 class="panel-title">Tambah Data Barang</h2>

									<p class="panel-subtitle">
										silahkan input data barang dibawah ini ya.....
									</p>
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
										<label class="control-label">Nama Barang</label>
<td><input type="text" class="form-control" readonly name="namabarang" id="namabarang"></td>
											</div>
										</div>
									</div>



									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
								<label class="control-label">Jumlah</label>
<input type="text" class="form-control" name="bjumlah" id="bjumlah" placeholder="Enter jumlah"></td>
											</div>
										</div>


										<div class="col-sm-6">
											<div class="form-group">
						<label class="control-label">Keterangan</label>
				<td><input type="text" class="form-control"
name="bket" id="bket"></div></td>
											</div>
										</div>
										<br>
										<td><button type="button" title="Cari Barang" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><span class='glyphicon glyphicon-search'></span></button>
										<td ><button type="button" id="tambah" class="btn btn-primary"><span class='glyphicon
glyphicon-plus'></span></button></td>
									




</section>

</div>
		
							


					
					<div class="row">
						<div class="col-md-15">
							<form id="form1" class="form-horizontal">
								<section class="panel panel-primary">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down"></a>
										<a href="#" class="fa fa-times"></a>
									</div>

										<h2 class="panel-title">DATA BARANG MASUK</h2>
										
									</header>
									<div class="panel-body">
										<div class="form-group">
											<label class="col-sm-4 control-label">ID MASUK: </label>
											<div class="input-group col-sm-8">       
												<input type="text" name="idmasuk" class="form-control" id="exampleInputEmail2" placeholder="Enter id masuk">
							<span style="font-weight: bold; color: #ff0000;"><?php echo form_error('idmasuk') ?></span>
											</div>
										</div>

									<div class="form-group">
										<label class="col-sm-4 control-label">TANGGAL MASUK: </label>
										<div class="input-group date col-sm-8">
											<div class="input-group-addon">
												<i class="fa fa-calendar"></i>
											</div>
											<input type="date" class="form-control pull-right" id="datepicker" name="tanggalmasuk" placeholder="mm-dd-yyyy" required>
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

 <th >Jumlah Masuk</th>

 <th>keterangan</th>
 <th>Aksi</th>
 </tr>
 </thead>
 <tbody>
 <?php $nomor=1;  foreach($datatemp->result_array() as $d){
       
?>  

<tr>
 <td align="center"><?php echo $nomor?><input id="dataid" type="text" 
 class="form-control editor" value="<?php echo $d['bkodebarang']?>"/></td>
 <td><?php echo $d['bkodebarang']; ?></td>
 <td><?php echo $d['typebarang']; ?></td>
 <td><?php echo $d['namabarang']; ?></td>
 <td><?php echo $d['stok']; ?></td>
  <td><?php echo $d['bjumlah'] ?></td>
  <td><?php echo $d['bket'] ?></td>               
   <td>              
 <a class='btn btn-danger btn-xs' title='Hapus Item' href="<?php echo site_url('barangmasuk/hapusitem/'.$d['bkodebarang'].'/'.$d['namabarang'])?>">
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

  <a class='btn btn-danger btn-sm' title='Hapus Data' href='<?php echo site_url('barangmasuk/data')?>' onclick="return confirm('Anda Yakin menghapus data ini?')">
  <span class='fa fa-ban'> Batal Transaksi</span></a> 
  
  <button type="button" onclick="location.href=('<?php echo site_url('barangmasuk/data')?>')" class="btn btn-success btn-sm">
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