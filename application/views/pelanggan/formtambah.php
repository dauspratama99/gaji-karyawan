<div class="col-10 stretch-card">
                  <div class="card">
                    <div class="card-body">
                      
                      <h3 class="box-title">
				 <button type="button" class="btn btn-primary"
					onclick="location.href =('<?php echo site_url('pelanggan/index') ?>')">
                        <i class="fa  fa-mail-reply-all" ></i> KEMBALI
                    </button>
                </h3>
                         
            <?php echo $this->session->flashdata('pesan');?>
            <?php echo form_open('pelanggan/simpan', array('class' => 'form-horizontal')) ?>
            <form class="forms-sample">
                        <div class="form-group row">
           <label for="exampleInputEmail2" class="col-sm-3 col-form-label">KODE PELANGGAN</label>
                          <div class="col-sm-9">
                            <input type="text" name="kodepelanggan" class="form-control" value="<?php echo $kode;?>" readonly>
							<span style="font-weight: bold; color: #ff0000;"><?php echo form_error('kodepelanggan') ?></span>
                          </div>
                        </div>
						
                 <div class="form-group row">
           <label for="exampleInputEmail2" class="col-sm-3 col-form-label">TANGGAL ORDER</label>
                          <div class="col-sm-9">
                            <input type="date" name="tanggalorder" class="form-control" id="exampleInputEmail2" placeholder="mm-dd-yyyy">
							<span style="font-weight: bold; color: #ff0000;"><?php echo form_error('tanggalorder') ?></span>
                          </div>
                        </div>
                
				  <div class="form-group row">
           <label for="exampleInputEmail2" class="col-sm-3 col-form-label">NAMA PELANGGAN</label>
                          <div class="col-sm-9">
                            <input type="text" name="namapelanggan" class="form-control" id="exampleInputEmail2" placeholder="Enter nama pelanggan">
							<span style="font-weight: bold; color: #ff0000;"><?php echo form_error('namapelanggan') ?></span>
                          </div>
                        </div>
						<div class="form-group row">
           <label for="exampleInputEmail2" class="col-sm-3 col-form-label">ALAMAT</label>
		
                          <div class="col-sm-9">
                            <input type="text" name="alamat" class="form-control" id="exampleInputEmail2" placeholder="Enter alamat barang">
							<span style="font-weight: bold; color: #ff0000;"><?php echo form_error('alamat') ?></span>
                          </div>
                        </div>
                <div class="form-group row">
           <label for="exampleInputEmail2" class="col-sm-3 col-form-label">NOHP</label>
		
                          <div class="col-sm-9">
                            <input type="text" name="nohp" class="form-control" id="exampleInputEmail2" placeholder="Enter nohp">
							<span style="font-weight: bold; color: #ff0000;"><?php echo form_error('nohp') ?></span>
                          </div>
                        </div>
                <div class="form-group row">
           <label for="exampleInputEmail2" class="col-sm-3 col-form-label">EMAIL</label>
		
                          <div class="col-sm-9">
                            <input type="email" name="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
							<span style="font-weight: bold; color: #ff0000;"><?php echo form_error('email') ?></span>
                          </div>
                        </div>
						
                
               <div class="form-group">
                    <label class="col-sm-2 control-label"></label>
                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-primary">
                            <i class="mdi mdi-file-document"></i> SIMPAN DATA
                    </div>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>