<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <button type="button" class="btn btn-warning" onclick="location.href = ('<?php echo site_url('user/index') ?>')">
                        <i class="fa fa-backward"></i> Kembali
                    </button>
                </h3>
            </div>
            <?php echo $this->session->flashdata('pesan');?>
            <?php echo form_open('user/simpan', array('class' => 'form-horizontal')) ?>
            <div class="box-body">
                <div class="form-group">
                    
                    <div class="col-sm-4">
                        <input type="hidden" name="id" class="form-control">
                        <span style="font-weight: bold; color: red;"><?php echo form_error('id') ?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">User</label>
                    <div class="col-sm-6">
                        <input type="text" name="user" class="form-control">
                        <span style="font-weight: bold; color: red;"><?php echo form_error('user') ?></span>
                    </div>
                </div>
				 <div class="form-group">
                    <label class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-6">
                        <input type="text" name="password" class="form-control">
                        <span style="font-weight: bold; color: red;"><?php echo form_error('password') ?></span>
                    </div>
                </div>
				 
                
                <div class="form-group">
                    <label class="col-sm-2 control-label">Hak Akses</label>
                    <div class="col-sm-4">
                        <select class="form-control select2" style="width: 100%;" name="hakakses" id="hakakses" required> 
<option>-Pilih-</option>
                              <option>admin</option>
                              <option>korlap</option>
							  <option>teknisi</option>
							  <option>pimpinan</option>
                            </select>
                    </div>
                </div></div>
              
<br>
			  
                <div class="form-group">
                    <label class="col-sm-2 control-label"></label>
                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-save"></i> Simpan Data
                        </button>
                    </div>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>