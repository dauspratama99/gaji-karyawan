<div class="col-10 stretch-card">
                  <div class="card">
                    <div class="card-body">
                      
                 <h3 class="box-title">
				 <button type="button" class="btn btn-primary"
					onclick="location.href =('<?php echo site_url('karyawan/data') ?>')">
                        <i class="fa  fa-mail-reply-all" ></i> KEMBALI
                    </button>
                </h3>
                         
            <?php echo $this->session->flashdata('pesan'); ?>
            <?php echo form_open('karyawan/update', array('class' => 'form-horizontal')) ?>
            
			<form class="forms-sample">
                        <div class="form-group row">
           <label for="exampleInputEmail2" class="col-sm-3 col-form-label">KODE KARYAWAN</label>
                          <div class="col-sm-9">
                            <input type="text" name="kodekaryawan" class="form-control" value="<?php echo $kodekaryawan;?>" readonly="readonly">
							<span style="font-weight: bold; color: #ff0000;"><?php echo form_error('kodekaryawan') ?></span>
                          </div>
                        </div>

						<div class="form-group row">
           <label for="exampleInputEmail2" class="col-sm-3 col-form-label">NAMA KARYAWAN</label>
                          <div class="col-sm-9">
                            <input type="text" name="namakaryawan" class="form-control" 
							value="<?php echo $namakaryawan;?>" >
							<span style="font-weight: bold; color: #ff0000;"><?php echo form_error('namakaryawan') ?></span>
                          </div>
                        </div>
						
						
						<div class="form-group row">
           <label for="exampleInputEmail2" class="col-sm-3 col-form-label">JABATAN</label>
                          <div class="col-sm-9">
                            <input type="text" name="namajabatan" class="form-control" 
							value="<?php echo $namajabatan;?>" >
							<span style="font-weight: bold; color: #ff0000;"><?php echo form_error('namajabatan') ?></span>
                          </div>
                        </div>
						
						

						<div class="form-group row">
           <label for="exampleInputEmail2" class="col-sm-3 col-form-label">JENIS KELAMIN</label>
                          <div class="col-sm-9">
                            <input type="text" name="jeniskelamin" class="form-control" 
							value="<?php echo $jeniskelamin;?>" >
							<span style="font-weight: bold; color: #ff0000;"><?php echo form_error('jeniskelamin') ?></span>
                          </div>
                        </div>               
		   <div class="form-group row">
           <label for="exampleInputEmail2" class="col-sm-3 col-form-label">ALAMAT</label>
                          <div class="col-sm-9">
                            <input type="text" name="alamat" class="form-control" 
							value="<?php echo $alamat;?>" >
							<span style="font-weight: bold; color: #ff0000;"><?php echo form_error('alamat') ?></span>
                          </div>
                        </div>


						<div class="form-group row">
           <label for="exampleInputEmail2" class="col-sm-3 col-form-label">NOHP</label>
                          <div class="col-sm-9">
                            <input type="text" name="nohp" class="form-control" value="<?php echo $nohp;?>" >
							<span style="font-weight: bold; color: #ff0000;"><?php echo form_error('nohp') ?></span>
                          </div>
                        </div>
						
						<div class="form-group row">
           <label for="exampleInputEmail2" class="col-sm-3 col-form-label">EMAIL</label>
                          <div class="col-sm-9">
                            <input type="email" name="email" class="form-control" value="<?php echo $email;?>" >
							<span style="font-weight: bold; color: #ff0000;"><?php echo form_error('email') ?></span>
                          </div>
                        </div>      


						<div class="form-group row">
           <label for="exampleInputEmail2" class="col-sm-3 col-form-label">JUMLAH PEMASANGAN</label>
                          <div class="col-sm-9">
                            <input type="text" name="jumlahpemasangan" class="form-control" value="<?php echo $jumlahpemasangan;?>" readonly="readonly">
							<span style="font-weight: bold; color: #ff0000;"><?php echo form_error('jumlahpemasangan') ?></span>
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



            
            <?php echo form_close(); ?>
			</form>
        </div>
    </div>
</div>