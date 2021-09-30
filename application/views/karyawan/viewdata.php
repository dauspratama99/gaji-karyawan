<div class="col-10 stretch-card">
                  <div class="card">
                    <div class="card-body">
                      
                      <h3 class="box-title">
				 <button type="button" class="btn btn-primary"
					onclick="location.href =('<?php echo site_url('karyawan')?>')">
                        <i class="fa fa-plus-circle" ></i> TAMBAH DATA KARYAWAN
                    </button>
                </h3>
<div class="box-body table-responsive">
<table id="data" class="table table-bordered table-striped">

<thead>

	<tr>
	<th width="5" >NO </th>
	<th  >KODE KARYAWAN </th>
	<th >NAMA KARYAWAN </th>
	<th  >JABATAN </th>
	<th width="5" >JENIS KELAMIN </th>
	<th >ALAMAT </th>
	<th >NOHP </th>
	<th >EMAIL </th>
	<th >JUMLAH PEMASANGAN </th>
	<th style="text-align: center" >AKSI</th>
	</tr>

</thead>

<tbody>
<?php $no=1; foreach($tampil->result_array()as $r){?>

<tr>
	<td align="center"><?php echo $no?></td>

	<td align="center"><?php echo $r['kodekaryawan'];?></a></td>

	<td align="center"><?php echo $r['namakaryawan'];?></td>

<td align="center"><?php echo $r['namajabatan'];?></td>

<td align="center"><?php echo $r['jeniskelamin'];?></td>
<td align="center"><?php echo $r['alamat'];?></td>

<td align="center"><?php echo $r['nohp'];?></td>

<td align="center"><?php echo $r['email'];?></td>
<td align="center"><?php echo $r['jumlahpemasangan'];?></td>


<td>
    <button type="button" class="btn btn-primary"							  onclick="location.href =
	('<?php echo site_url('karyawan/edit/' . $r['kodekaryawan']) ?>')">
                                        <i class="fa fa-edit"> Edit</i>
                                    </button>
                                    
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