<div class="col-10 stretch-card">
                  <div class="card">
                    <div class="card-body">
                      
<h3 class="box-title">
				 <button type="button" class="btn btn-primary"
					onclick="location.href =('<?php echo site_url('pemasangan')?>')">
                        <i class="fa fa-plus-circle" ></i> TAMBAH DATA PEMASANGAN
                    </button>
                </h3>
				       
<div class="box-body table-responsive">
<table id="data" class="table table-bordered table-striped">

<thead>

	<tr>
	<th width="5" >NO </th>
	<th  >KODE PEMASANGAN </th>
	<th  >TANGGAL PEMASANGAN </th>
	<th >NAMA PELANGGAN </th>
	<th >ALAMAT </th>
		<th >NO INTERNET </th>
		<th >JUMLAH PEMASANGAN</th>

	<th style="text-align: center" >#</th>
	</tr>

</thead>

<tbody>
<?php $no=1; foreach($tampil->result_array()as $r){?>

<tr>
	<td align="center"><?php echo $no?></td>

	<td align="center"><?php echo $r['kodepemasangan'];?></a></td>

	<td align="center"><?php echo $r['tanggalpasang'];?></td>


<td align="center"><?php echo $r['namapelanggan'];?></td>
<td align="center"><?php echo $r['alamat'];?></td>
<td align="center"><?php echo $r['nointernet'];?></td>
<td align="center"><?php echo $r['jumlahpasang'];?></td>


<td align="center"
 width="50px">

 <a class="btn btn-icons btn-inverse-primary"
title='Lihat Detail Pembelian' href='<?php echo site_url('pemasangan/detail/'.$r['kodepemasangan'])?>'>
					      <span class='glyphicon glyphicon-eye-open'></span><i class="mdi mdi-star" ></i> 
                  </a>
</td>

</tr>

<?php $no++;}?>

</tbody>
</table>
</div>
</div>
</div>
</div>
</section>

<script>

$(function(){
	$('#data').DataTable();
});
</script>