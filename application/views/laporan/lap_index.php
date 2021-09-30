<script>
$(function(){
    $(".select2").select2();
    $('#tglawal').datepicker({ autoclose: true });
    $('#tglakhir').datepicker({ autoclose: true });
    $('#tglpemawal').datepicker({ autoclose: true });
    $('#tglpemakhir').datepicker({ autoclose: true });
});
</script>
<div style="background:#367FA9;color:#fff;font-size:20px;margin:10px;padding:2px"></div>
  <div class="col-lg-3 col-xs-6">
    <div class="small-box bg-aqua">
      <div class="inner"><h3><i class="fa fa-child"></i></h3><p>Pelanggan</p></div>
      <div class="icon"><i class="fa fa-users"></i></div>
      <a href="<?php echo site_url('laporan/pelanggan')?>" target="_blank" class="small-box-footer">Print Laporan <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-3 col-xs-6">
    <div class="small-box bg-green">
      <div class="inner"><h3><i class="fa fa-file-text-o"></i></h3><p>Pendaftaran Servis</p></div>
      <div class="icon"><i class="fa fa-motorcycle"></i></div>
      <a href="javascript:void(0)" data-toggle="modal" data-target="#modalpendaftaran" class="small-box-footer">Print Laporan <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>

  <div class="col-lg-3 col-xs-6">
    <div class="small-box bg-red">
      <div class="inner"><h3><i class="fa fa-dollar"></i></h3><p>Transaksi Servis</p></div>
      <div class="icon"><i class="fa fa-wrench"></i></div>
      <a href="javascript:void(0)" data-toggle="modal" data-target="#modaltransaksi" class="small-box-footer">Print Laporan <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-3 col-xs-6">
    <div class="small-box bg-yellow">
      <div class="inner"><h3><i class="fa fa-money"></i></h3><p>Penjualan</p></div>
      <div class="icon"><i class="fa fa-cart-plus"></i></div>
      <a href="javascript:void(0)" data-toggle="modal" data-target="#modalpenjualan" class="small-box-footer">Print Laporan <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-3 col-xs-6">
    <div class="small-box bg-aqua">
      <div class="inner"><h3><i class="fa fa-tags"></i></h3><p>Pembelian</p></div>
      <div class="icon"><i class="fa fa-cubes"></i></div>
      <a href="javascript:void(0)" data-toggle="modal" data-target="#modalpembelian" class="small-box-footer">Print Laporan <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-3 col-xs-6">
    <div class="small-box bg-green">
      <div class="inner"><h3><i class="fa fa-cube"></i></h3><p>Persediaan Barang</p></div>
      <div class="icon"><i class="fa fa-hourglass-2"></i></div>
      <a href="javascript:void(0)" data-toggle="modal" data-target="#modalbrg" class="small-box-footer">Print Laporan <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-3 col-xs-6">
    <div class="small-box bg-red">
      <div class="inner"><h3><i class="fa fa-wrench"></i></h3><p>Pekerjaan Servis</p></div>
      <div class="icon"><i class="fa fa-motorcycle"></i></div>
      <a href="javascript:void(0)" data-toggle="modal" data-target="#modalservis" class="small-box-footer">Print Laporan <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>

<div class="modal fade bs-example-modal-xs" id="modalpendaftaran" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-xs" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Laporan Pendaftaran Servis</h4>
      </div>
      <form method="POST" action="<?php echo site_url('laporan/lap_pendaftaran')?>" target="_blank">
      <div class="modal-body">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Bulan</label>
          <div class="col-sm-8">
            <select name="bulan" id="bulan" class="form-control select2" style="width: 90%">
              <?php foreach ($pendaftaran->result_array() as $k) {
                $bln=$k['bulan'];
              ?>
                <option><?php echo $bln;?></option>
              <?php }?>
            </select>
          </div>
        </div>
      </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-print"></i> Cetak</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
        </div>
      </form>
  </div>
</div>
</div>

<div class="modal fade bs-example-modal-xs" id="modaltransaksi" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-xs" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Laporan Transaksi Servis</h4>
      </div>
      <form method="POST" action="<?php echo site_url('laporan/lap_transaksi')?>" target="_blank">
      <div class="modal-body">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Bulan</label>
          <div class="col-sm-8">
            <select name="bln_transaksi" id="bln_transaksi" class="form-control select2" style="width: 90%">
              <?php foreach ($pendaftaran->result_array() as $k) {
                $bln=$k['bulan'];
              ?>
                <option><?php echo $bln;?></option>
              <?php }?>
            </select>
          </div>
        </div>
      </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-print"></i> Cetak</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
        </div>
      </form>
  </div>
</div>
</div>

<div class="modal fade bs-example-modal-xs" id="modalpenjualan" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-xs" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Laporan Penjualan Periode</h4>
      </div>
      <form method="POST" action="<?php echo site_url('laporan/lap_penjualan')?>" target="_blank">
      <div class="modal-body">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Tanggal Awal</label>
          <div class="input-group date col-sm-5" id="tglawal">
            <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
            </div>
            <input type="text" class="form-control pull-right" name="tglawal" placeholder="mm-dd-yyyy" required>
          </div> 
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Tanggal Akhir</label>
          <div class="input-group date col-sm-5" id='tglakhir'>
            <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
            </div>
            <input type="text" class="form-control pull-right" name="tglakhir" placeholder="mm-dd-yyyy" required>
          </div> 
        </div>
      </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-print"></i> Cetak</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
        </div>
      </form>
  </div>
</div>
</div>

<div class="modal fade bs-example-modal-xs" id="modalpembelian" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-xs" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Laporan Pembelian Periode</h4>
      </div>
      <form method="POST" action="<?php echo site_url('laporan/lap_pembelian')?>" target="_blank">
      <div class="modal-body">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Tanggal Awal</label>
          <div class="input-group date col-sm-5" id="tglpemawal">
            <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
            </div>
            <input type="text" class="form-control pull-right" placeholder="mm-dd-yyyy" name="tglawal" required>
          </div> 
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Tanggal Akhir</label>
          <div class="input-group date col-sm-5" id='tglpemakhir'>
            <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
            </div>
            <input type="text" class="form-control pull-right" placeholder="mm-dd-yyyy" name="tglakhir" required>
          </div> 
        </div>
      </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-print"></i> Cetak</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
        </div>
      </form>
  </div>
</div>
</div>

<div class="modal fade bs-example-modal-xs" id="modalbrg" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-xs" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Pilih Kategori Cetak Persediaan Barang</h4>
      </div>
      <form>
      <div class="modal-body">
        <div class="form-group">
          <div class="input-group date col-sm-12">
            <a target="_blank" class='btn btn-default btn-lg'  href="<?php echo site_url('laporan/brgmin')?>"><span class='glyphicon glyphicon-print'></span> STOK MININAL </a>&nbsp;
            <a target="_blank" class='btn btn-default btn-lg'  href="<?php echo site_url('laporan/brgmax')?>"><span class='glyphicon glyphicon-print'></span> STOK MAKSIMAL </a>&nbsp;
            <a target="_blank" class='btn btn-default btn-lg'  href="<?php echo site_url('laporan/brgsemua')?>"><span class='glyphicon glyphicon-print'></span> Cetak Semua </a>
          </div> 
        </div>
      </div>
      </form>
  </div>
</div>
</div>

<div class="modal fade bs-example-modal-xs" id="modalservis" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-xs" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Laporan Pekerjaan Servis</h4>
      </div>
      <form class="form-horizontal" method="POST" action="<?php echo site_url('laporan/lap_servis')?>" target="_blank">
      <div class="modal-body">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Pilih Bulan</label>
          <div class="col-sm-8">
            <select name="bln_pekerjaan" id="bln_transaksi" class="form-control select2" style="width: 90%">
              <?php foreach ($pendaftaran->result_array() as $k) {
                $bln=$k['bulan'];
              ?>
                <option><?php echo $bln;?></option>
              <?php }?>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Pilih Merk</label>
          <div class="col-sm-8">
            <select name="merk" id="merk" class="form-control select2" style="width: 90%">
              <?php foreach($merk->result_array() as $k){?>
              <option value="<?php echo $k['merkid']?>"><?php echo $k['merknama']?></option>
              <?php }?> 
              <option value="Semua">Semua</option>
            </select>
          </div>
        </div>
      </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-print"></i> Cetak</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
        </div>
      </form>
  </div>
</div>
</div>