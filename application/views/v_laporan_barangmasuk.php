<body>
<div class="box box-success">
            <div class="box-header">
			<div class="row">
			<div class="col-lg-12">
              <center><h1 class="box-title"><?php echo $judul?></h1></center>
			  </div>
			  </div>
            </div>
       <div class="box-body">
        <!-- /.row -->
        <!-- Projects Row -->
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
                        <td style="vertical-align:middle;">Laporan barangmasuk</td>
                        <td style="text-align:center;">
                            <a class="btn btn-sm btn-default" href="<?php echo site_url('Laporan_master/lap_data_barangmasuk/index')?>" target="_blank"><span class="fa fa-print"></span> Print</a>
                        </td>
                    </tr>

                    <tr>
                        <td style="text-align:center;vertical-align:middle">2</td>
                        <td style="vertical-align:middle;">Laporan barangmasuk PerTanggal</td>
                        <td style="text-align:center;">
                            <a class="btn btn-sm btn-default" href="<?php echo base_url('index.php/laporan/barangmasukperiode')?>" data-toggle="modal"><span class="fa fa-print"></span> Print</a>
                        </td>
                    </tr>
                     <tr>
                        <td style="text-align:center;vertical-align:middle">3</td>
                        <td style="vertical-align:middle;">Laporan barangmasuk PerBulan</td>
                        <td style="text-align:center;">
                            <a class="btn btn-sm btn-default" href="#lap_beli_perbulan" data-toggle="modal"><span class="fa fa-print"></span> Print</a>
                        </td>
                    </tr>

                   <tr>
                        <td style="text-align:center;vertical-align:middle">4</td>
                        <td style="vertical-align:middle;">Laporan barangmasuk PerTahun</td>
                        <td style="text-align:center;">
                            <a class="btn btn-sm btn-default" href="#lap_beli_pertahun" data-toggle="modal"><span class="fa fa-print"></span> Print</a>
                        </td>
                    </tr>
<tr>
                        <td style="text-align:center;vertical-align:middle">5</td>
                        <td style="vertical-align:middle;">Laporan barangmasuk PerIdmasuk</td>
                        <td style="text-align:center;">
                            <a class="btn btn-sm btn-default" href="#lap_beli_idmasuk" data-toggle="modal"><span class="fa fa-print"></span> Print</a>
                        </td>
                    </tr>                
                             </tbody>
            </table>
            </div>
        </div>   

		

	 </div>
    </div>
	</body>


              

	<div class="modal fade" id="lap_beli_perbulan" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span ariahidden=" true">&times;</span></button>
                <h3 class="modal-title" id="myModalLabel">Pilih Bulan</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/Laporan_master/lap_barangmasuk_perbulan'?>" target="_blank">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Bulan</label>
                        <div class="col-xs-9">
                          
                            <select class="form-control select2" style="width: 80%;" name="bln">
                  <option selected="selected">- Pilih -</option>
                   <?php foreach ($barangmasuk_bln->result_array() as $k) {
                                    $bln=$k['bulan'];
                                ?>
                                    <option><?php echo $bln;?></option>
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



		<div class="modal fade" id="lap_beli_pertahun" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span ariahidden=" true">&times;</span></button>
                <h3 class="modal-title" id="myModalLabel">Pilih Tahun</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/Laporan_master/lap_barangmasuk_pertahun'?>" target="_blank">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Tahun</label>
                        <div class="col-xs-9">
                          
                            <select class="form-control select2" style="width: 80%;" name="thn">
                  <option selected="selected">- Pilih -</option>
                   <?php foreach ($barangmasuk_thn->result_array() as $k) {
                                    $thn=$k['tahun'];
                                ?>
                                    <option><?php echo $thn;?></option>
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


<div class="modal fade" id="lap_beli_idmasuk" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span ariahidden=" true">&times;</span></button>
                <h3 class="modal-title" id="myModalLabel">Pilih Id</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/Laporan_master/lap_barangmasuk_idmasuk'?>" target="_blank">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Id masuk</label>
                        <div class="col-xs-9">
                          
                            <select class="form-control select2" style="width: 80%;" name="idmasuk">
                  <option selected="selected">- Pilih -</option>
                   <?php foreach ($barangmasuk_idmasuk->result_array() as $k) {
                                    $idmasuk=$k['idmasuk'];
                                ?>
                                    <option><?php echo $idmasuk;?></option>
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

