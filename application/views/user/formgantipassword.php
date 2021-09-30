<div class="row">
    <!--left colusermn -->
    <div class="col-md-12">
        <!--general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                    Form Ganti Password
                </h3>
            </div>
            <div class="box-body">
                <?php echo $this->session->flashdata('pesan'); ?>
                <?php  echo  form_open('user/updatepassword',  array('class'  => 
                'form-horizontal')); ?>
            <div class="box-body">
                <div class="form-group">
                    
                    <div class="col-sm-4">
                        <input type="hidden" name="id" class="form-control">
                        <span style="font-weight: bold; color: red;"><?php echo form_error('id') ?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Paaword Lama</label>
                    <div class="col-sm-6">
                        <input type="password" class="form-control" name="passlama">
                        <span style="font-weight: bold; color: red;"><?php echo form_error('passlama') ?></span>
                    </div>
                </div>
				 <div class="form-group">
                    <label class="col-sm-2 control-label">Password Baru</label>
                    <div class="col-sm-6">
                       <input type="password" class="form-control" name="passbaru">
                        <span style="font-weight: bold; color: red;"><?php echo form_error('passbaru') ?></span>
                    </div>
                </div>
				 
                 <div class="form-group">
                    <label class="col-sm-2 control-label">Ulangi Password Baru</label>
                    <div class="col-sm-6">
                        <input type="password"    class="form-control" name="ulangipassbaru">
                        <span style="font-weight: bold; color: red;"><?php echo form_error('ulangipassbaru') ?></span>
                    </div>
                </div>
				 
                
              
<br>
			  
                <div class="form-group">
                    <label class="col-sm-2 control-label"></label>
                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-save"></i> Update
                        </button>
                    </div>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>