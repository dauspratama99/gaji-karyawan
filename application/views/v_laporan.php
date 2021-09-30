<div class="box box-info">
            <div class="box-header">
			<div class="row">
			<div class="col-lg-12">
              <center><h1 class="box-title"><?php echo $judul?></h1></center>
			  </div>
			  </div>
</div>
<div class="box-body">

<div class="row">
            <div class="col-lg-12">
            <table class="table table-bordered table-striped" style="font-size:12px;" id="tabel-data">
                <thead>
                    <tr>
                        <th style="text-align:center;width:40px;">No</th>
                        <th>Laporan</th>
                        <th style="width:100px;text-align:center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                
                    <tr>
                        <td style="text-align:center;vertical-align:middle">1</td>
                        <td style="vertical-align:middle;">Laporan Data Barang</td>
                        <td style="text-align:center;">
                            <a class="btn btn-sm btn-default" href="<?php echo site_url('Laporan_master/lap_barang/index')?>" target="_blank"><span class="fa fa-print"></span> Print</a>
                        </td>
                    </tr>
					<tr>
                        <td style="text-align:center;vertical-align:middle">2</td>
                        <td style="vertical-align:middle;">Laporan Data Jabatan</td>
                        <td style="text-align:center;">
                            <a class="btn btn-sm btn-default" href="<?php echo site_url('Laporan_master/lap_jabatan/index')?>" target="_blank"><span class="fa fa-print"></span> Print</a>
                        </td>
                    </tr>
					<tr>
                        <td style="text-align:center;vertical-align:middle">3</td>
                        <td style="vertical-align:middle;">Laporan Data Karyawan</td>
                        <td style="text-align:center;">
                            <a class="btn btn-sm btn-default" href="<?php echo site_url('Laporan_master/lap_karyawan/index')?>" target="_blank"><span class="fa fa-print"></span> Print</a>
                        </td>
                    </tr>
					<tr>
                        <td style="text-align:center;vertical-align:middle">4</td>
                        <td style="vertical-align:middle;">Laporan Karyawan Perjabatan</td>
                        <td style="text-align:center;">
                            <a class="btn btn-sm btn-default" href="#lap_beli_namajabatan" data-toggle="modal"><span class="fa fa-print"></span> Print</a>
                        </td>
                    </tr>
                   

                    <tr>
                        <td style="text-align:center;vertical-align:middle">5</td>
                        <td style="vertical-align:middle;">Laporan Pelanggan</td>
                        <td style="text-align:center;">
                            <a class="btn btn-sm btn-default" href="<?php echo site_url('Laporan_master/lap_pelangan/index')?>" target="_blank"><span class="fa fa-print"></span> Print</a>
                        </td>
                    </tr>

                  
                    <tr>
                        <td style="text-align:center;vertical-align:middle">6</td>
                        <td style="vertical-align:middle;">Laporan User</td>
                        <td style="text-align:center;">
                            <a class="btn btn-sm btn-default" href="<?php echo site_url('Laporan_master/lap_user/index')?>" target="_blank"><span class="fa fa-print"></span> Print</a>
                        </td>
                    </tr>                    				
                    
                       
                </tbody>
            </table>
            </div>
        </div>
		</div>
		</div>

		<div class="modal fade" id="lap_beli_namajabatan" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span ariahidden=" true">&times;</span></button>
                <h3 class="modal-title" id="myModalLabel">Pilih Id</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/Laporan_master/lap_jabatan_namajabatan'?>" target="_blank">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Kode jabatan</label>
                        <div class="col-xs-9">
                          
                            <select class="form-control select2" style="width: 80%;" name="namajabatan">
                  <option selected="selected">- Pilih -</option>
                   <?php foreach ($jabatan_namajabatan->result_array() as $k) {
                                    $namajabatan=$k['namajabatan'];
                                ?>
                                    <option><?php echo $namajabatan;?></option>
                                <?php }?>
                </select>


                           
                        </div>
                    </div>
                           

                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info"><span class="fa fa-print"></span> Cetak</button>
                </div>
            </form>
            </div>
            </div>
        </div>



