<form method="POST" action="<?php echo site_url('laporan/lap_pemasangan')?>" target="_blank"> 
<table> 
<tr>
<td>
<div class="form-group">
<label class="col-md-5 control-label">Tanggal Pemasangan</label>
<div class="col-md-10">
<div class="input-daterange input-group" data-plugin-datepicker>
<span class="input-group-addon">
<i class="fa fa-calendar"></i>
</span>
<input type="text" class="form-control" name="tglawal">
<span class="input-group-addon">to</span>
<input type="text" class="form-control" name="tglakhir">
</div>
</div>
</div>	
</td>
</tr>
<tr>
<td>
<div class="modal-footer">       
<button type="submit" class="btn btn-primary"><i class="glyphicon glyphiconprint"></i> Cetak</button>           
<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fatimes"></i> Tutup</button>        
</div>   
</td>
</tr>
</table>
</form>


