
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                 <button type="button" class="btn btn-primary" onclick="location.href = ('<?php echo site_url('barang/index') ?>')">
                        <i class="fa  fa-mail-reply-all"></i> Kembali
                    </button>
                </h3>
            </div>   
                         
		
            <?php echo $this->session->flashdata('pesan');?>
            <?php echo form_open('barang/simpan', array('class' => 'form-horizontal')) ?>
            <form class="forms-sample">
                        <div class="form-group row">
           <label for="exampleInputEmail2" class="col-sm-3 col-form-label">KODE BARANG</label>
                          <div class="col-sm-9">
                            <input type="text" name="kodebarang" class="form-control" value="<?php echo $kodebarang;?>" readonly>
							<span style="font-weight: bold; color: #ff0000;"><?php echo form_error('kodebarang') ?></span>
                          </div>
                        </div>
						
                 <div class="form-group row">
           <label for="exampleInputEmail2" class="col-sm-3 col-form-label">NAMA BARANG</label>
                          <div class="col-sm-9">
                            <input type="text" name="namabarang" class="form-control" id="exampleInputEmail2" placeholder="Enter nama barang">
							<span style="font-weight: bold; color: #ff0000;"><?php echo form_error('namabarang') ?></span>
                          </div>
                        </div>
                
				  <div class="form-group row">
           <label for="exampleInputEmail2" class="col-sm-3 col-form-label">TYPE BARANG</label>
                          <div class="col-sm-9">
                            <input type="text" name="typebarang" class="form-control" id="exampleInputEmail2" placeholder="Enter type barang">
							<span style="font-weight: bold; color: #ff0000;"><?php echo form_error('typebarang') ?></span>
                          </div>
                        </div>
						<div class="form-group row">
           <label for="exampleInputEmail2" class="col-sm-3 col-form-label">STOK BARANG</label>
		
                          <div class="col-sm-9">
                            <input type="text" name="stok" class="form-control" id="exampleInputEmail2" placeholder="Enter stok barang">
							<span style="font-weight: bold; color: #ff0000;"><?php echo form_error('stok') ?></span>
                          </div>
                        </div>
<div class="form-group row">
           <label for="exampleInputEmail2" class="col-sm-3 col-form-label">SATUAN</label>
		
                          <div class="col-sm-9">
                        <select class="form-control select2" style="width: 100%;" name="satuan" id="satuan" required> 
<option>-Pilih-</option>
                              <option>Unit</option>
                              <option>Meter</option>
							  <option>rol</option>
							 
                            </select>
                    </div>
                </div></div>
              <br>
                <div class="form-group">
                    <label class="col-sm-2 control-label"></label>
                    <div class="col-sm-4">
                       <button type="submit" class="btn btn-primary">
                            <i class="glyphicon glyphiconfloppy-save"></i> SIMPAN DATA
                    </div>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>