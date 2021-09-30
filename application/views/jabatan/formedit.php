<div class="col-10 stretch-card">
                  <div class="card">
                    <div class="card-body">
                      
                      <h3 class="box-title">
				 <button type="button" class="btn btn-primary"
					onclick="location.href =('<?php echo site_url('jabatan/index') ?>')">
                        <i class="fa  fa-mail-reply-all" ></i> KEMBALI
                    </button>
                </h3>
                         
            <?php echo $this->session->flashdata('pesan'); ?>
            <?php echo form_open('jabatan/update', array('class' => 'form-horizontal')) ?>
            
			<form class="forms-sample">
                        <div class="form-group row">
           <label for="exampleInputEmail2" class="col-sm-3 col-form-label">KODE JABATAN</label>
                          <div class="col-sm-9">
                            <input type="text" name="kodejabatan" class="form-control" value="<?php echo $kodejabatan;?>" readonly="readonly">
							<span style="font-weight: bold; color: #ff0000;"><?php echo form_error('kodejabatan') ?></span>
                          </div>
                        </div>
						<div class="form-group row">
           <label for="exampleInputEmail2" class="col-sm-3 col-form-label">NAMA JABATAN</label>
                          <div class="col-sm-9">
                            <input type="text" name="namajabatan" class="form-control" 
							value="<?php echo $namajabatan;?>" >
							<span style="font-weight: bold; color: #ff0000;"><?php echo form_error('namajabatan') ?></span>
                          </div>
                        </div>
						<div class="form-group row">
           <label for="exampleInputEmail2" class="col-sm-3 col-form-label">GAJI POKOK</label>
                          <div class="col-sm-9">
                            <input type="text" name="gajipokok" class="form-control" value="<?php echo $gajipokok;?>" >
							<span style="font-weight: bold; color: #ff0000;"><?php echo form_error('gajipokok') ?></span>
                          </div>
                        </div>
						<div class="form-group row">
           <label for="exampleInputEmail2" class="col-sm-3 col-form-label">TUNJANGAN JABATAN</label>
                          <div class="col-sm-9">
                            <input type="text" name="tunjanganjabatan" class="form-control" value="<?php echo $tunjanganjabatan;?>" >
							<span style="font-weight: bold; color: #ff0000;"><?php echo form_error('tunjanganjabatan') ?></span>
                          </div>
                        </div>
						
               
                
               <div class="form-group">
                    <label class="col-sm-2 control-label"></label>
                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-secondary btn-fw">
                            <i class="mdi mdi-file-document"></i> UPDATE DATA
                        </button>
                    </div>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>