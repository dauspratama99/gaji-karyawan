<div class="col-10 stretch-card">
                  <div class="card">
                    <div class="card-body">
                      
                      <h3 class="box-title">
				 <button type="button" class="btn btn-primary"
					onclick="location.href =('<?php echo site_url('barang/index') ?>')">
                        <i class="fa  fa-mail-reply-all" ></i> KEMBALI
                    </button>
                </h3>
                         
            <?php echo $this->session->flashdata('pesan'); ?>
            <?php echo form_open('barang/update', array('class' => 'form-horizontal')) ?>
            
			<form class="forms-sample">
                        <div class="form-group row">
           <label for="exampleInputEmail2" class="col-sm-3 col-form-label">KODE BARANG</label>
                          <div class="col-sm-9">
                            <input type="text" name="kodebarang" class="form-control" value="<?php echo $kodebarang;?>" readonly="readonly">
							<span style="font-weight: bold; color: #ff0000;"><?php echo form_error('kodebarang') ?></span>
                          </div>
                        </div>
						<div class="form-group row">
           <label for="exampleInputEmail2" class="col-sm-3 col-form-label">NAMA BARANG</label>
                          <div class="col-sm-9">
                            <input type="text" name="namabarang" class="form-control" 
							value="<?php echo $namabarang;?>" >
							<span style="font-weight: bold; color: #ff0000;"><?php echo form_error('namabarang') ?></span>
                          </div>
                        </div><div class="form-group row">
           <label for="exampleInputEmail2" class="col-sm-3 col-form-label">TYPE BARANG</label>
                          <div class="col-sm-9">
                            <input type="text" name="typebarang" class="form-control" value="<?php echo $typebarang;?>" >
							<span style="font-weight: bold; color: #ff0000;"><?php echo form_error('typebarang') ?></span>
                          </div>
                        </div>
						
						<div class="form-group row">
           <label for="exampleInputEmail2" class="col-sm-3 col-form-label">STOK BARANG</label>
                          <div class="col-sm-9">
                            <input type="text" name="stok" class="form-control" value="<?php echo $stok;?>" >
							<span style="font-weight: bold; color: #ff0000;"><?php echo form_error('stok') ?></span>
                          </div>
                        </div>

						<div class="form-group row">
           <label for="exampleInputEmail2" class="col-sm-3 col-form-label">SATUAN</label>
                          <div class="col-sm-9">
                        <select class="form-control select2" style="width: 100%;" name="satuan" id="satuan" value="<?php echo $satuan;?>" required> 
<option>-Pilih-</option>
                              <option>Unit</option>
                              <option>Meter</option>
							  <option>rol</option>
                            </select>
                    </div>
                </div>
               
                
               <div class="form-group">
                    <label class="col-sm-2 control-label"></label>
                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-primary">
                            <i class="mdi mdi-file-document"></i> UPDATE DATA
                        </button>
                    </div>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>