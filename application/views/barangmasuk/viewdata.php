<div class="col-10 stretch-card">
                  <div class="card">
                    <div class="card-body">
                      
                      <h3 class="box-title">
				 <button type="button" class="btn btn-primary"
					onclick="location.href =('<?php echo site_url('barangmasuk') ?>')">
                        <i class="fa fa-plus-circle" ></i> TAMBAH DATA BARANG MASUK
                    </button>
                </h3>
                         
	
            <?php echo $this->session->flashdata('pesan'); ?>
            <div class="box-body">
<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example"> 
                    <thead>

	<tr>
	<th width="5" >NO </th>
	<th  >ID MASUK </th>
	<th >TANGGAL MASUK </th>

<th style="text-align: center" >#</th>
	</tr>

</thead>

<tbody>
<?php $no=1; foreach($tampil->result_array()as $r){?>

<tr>
	<td align="center"><?php echo $no?></td>

	<td align="center"><?php echo $r['idmasuk'];?></a></td>

	<td align="center"><?php echo $r['tanggalmasuk'];?></td>

<td align="center"
 width="50px">

 <a class='btn btn-seccess btn-xs' title='Lihat Detail barangmasuk' href='<?php echo site_url('barangmasuk/detail/'.$r['idmasuk'])?>'><span class='glyphicon glyphicon-eye-open'></span></a>
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