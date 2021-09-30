<div class="col-10 stretch-card">
                  <div class="card">
                    <div class="card-body">
                      
<h3 class="box-title">
				 <button type="button" class="btn btn-primary"
					onclick="location.href =('<?php echo site_url('gaji')?>')">
                        <i class="fa fa-plus-circle" ></i> TAMBAH DATA 
                    </button>
                </h3>
				       
<div class="box-body table-responsive">
<table id="data" class="table table-bordered table-striped">

<thead>

	<tr>
	<th width="5" >NO </th>
	<th  >ID GAJI </th>
	<th  >TANGGAL  </th>
	<th  >NAMA KARYAWAN </th>
		<th  >JABATAN </th>
	<th  >TUNJANGAN JABATAN </th>
	<th  >GAJI POKOK </th>
	<th >JUMLAH PEMASANGAN </th>
	<th >GAJI/PEMASANGAN </th>
		<th >BIAYA OPERASIONAL </th>
		<th >TOTAL GAJI</th>

	<th style="text-align: center" >#</th>
	</tr>

</thead>

<tbody>
<?php $no=1; foreach($tampil->result_array()as $r){?>

<tr>
	<td align="center"><?php echo $no?></td>

	<td align="center"><?php echo $r['idgaji'];?></a></td>

	<td align="center"><?php echo $r['tgl'];?></td>

<td align="center"><?php echo $r['namakaryawan'];?></td>

<td align="center"><?php echo $r['namajabatan'];?></td>
<td align="center"><?php echo $r['tunjanganjabatan'];?></td>
<td align="center"><?php echo $r['gajipokok'];?></td>
<td align="center"><?php echo $r['jumlahpemasangan'];?></td>

<td align="center"><?php echo $r['biayapemasangan'];?></td>
<td align="center"><?php echo $r['biayaoperasional'];?></td>
<td align="center"><?php echo $r['totalgaji'];?></td>

<td align="center"
 width="50px">

 <a class="btn btn-icons btn-inverse-primary"
title='Lihat Detail Pembelian' href='<?php echo site_url('gaji/detail/'.$r['idgaji'])?>'>
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