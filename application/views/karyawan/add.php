
<style type="text/css">
 .editor
{  
 display:none;   
} 
</style> 

 <body>  
 <div class="col-10 stretch-card">
                  <div class="card">
                    <div class="card-body">
                      
                                             
<div class="box-body">   
<form method="post" action="<?php echo site_url('karyawan/simpantransaksi')?>" 
id="tmb" onSubmit="return cetak()";>   
       
 <tfoot>          
  <form class="forms-sample">
                        <div class="form-group row">
           <label for="exampleInputEmail2" class="col-sm-3 col-form-label">KODE KARYAWAN</label>
                          <div class="col-sm-9">
                            <input type="text" name="kodekaryawan" class="form-control" value="<?php echo $kode;?>" readonly>
							<span style="font-weight: bold; color: #ff0000;"><?php echo form_error('kodekaryawan') ?></span>
                          </div>
                        </div>
						
                 <div class="form-group row">
           <label for="exampleInputEmail2" class="col-sm-3 col-form-label">NAMA KARYAWAN</label>
                          <div class="col-sm-9">
                            <input type="text" name="namakaryawan" class="form-control" id="exampleInputEmail2" placeholder="Enter nama karyawan">
							<span style="font-weight: bold; color: #ff0000;"><?php echo form_error('namakaryawan') ?></span>
                          </div>
                        </div>
                
         <div class="form-group row">
           <label for="exampleInputEmail2" class="col-sm-3 col-form-label">JABATAN</label>
                          <div class="col-sm-9">           
  <select class="form-control select2" style="width: 100%;" name="jabatan" id="jabatan" required>        
  <option selected>-Pilih-</option> 
  <?php foreach($datajabatan->result_array() as $k){?>           
  <option value="<?php echo $k['kodejabatan']?>"><?php echo $k['namajabatan']?></option>                 <?php }?>
 </select>
 </div>
</div>

                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">JENIS KELAMIN</label>
                          <div class="col-sm-9" >
                            <select class="form-control select2" style="width: 100%;" name="jeniskelamin" id="jeniskelamin" required> 
<option>-Pilih-</option>
                              <option>Laki-Laki</option>
                              <option>Perempuan</option>
                            </select>
                          </div>
                        </div><div class="form-group row">
           <label for="exampleInputEmail2" class="col-sm-3 col-form-label">ALAMAT</label>
                          <div class="col-sm-9">
                            <input type="text" name="alamat" class="form-control" id="exampleInputEmail2" placeholder="Enter alamat">
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
                            <input type="email" name="email" class="form-control" id="exampleInputEmail2" placeholder="Enter  email">
							<span style="font-weight: bold; color: #ff0000;"><?php echo form_error('email') ?></span>
                          </div>
                        </div>
						
<div class="form-group row">
           <label for="exampleInputEmail2" class="col-sm-3 col-form-label">JUMLAH PEMASANGAN</label>
                          <div class="col-sm-9">
                            <input type="text" name="jumlahpemasangan" class="form-control" id="exampleInputEmail2" placeholder="Enter jumlah pemasangan">
							<span style="font-weight: bold; color: #ff0000;"><?php echo form_error('jumlahpemasangan') ?></span>
                          </div>
                        </div>

  <br>
  
  
  <tr>           
  <td colspan="5">            
  <button type="submit" class="btn btn-primary btn-sm"/>
  <span class='glyphicon glyphiconfloppy-save'>
  </span> Simpan Transaksi</button>    

  <a class='btn btn-danger btn-sm' title='Hapus Data' href='<?php echo site_url('karyawan/data')?>' onclick="return confirm('Anda Yakin menghapus data ini?')">
  <span class='fa fa-ban'> Batal Transaksi</span></a> 
  
  <button type="button" onclick="location.href=('<?php echo site_url('karyawan/data')?>')" class="btn btn-success btn-sm">
    <span class='fa  fa-mail-reply-all'> Kembali</span></a> 

  </button>
  
  </td>        
  
 </tr>
 </tfoot>
 </table>
 </div>
 </div>
 </form>
 </div>
</body>
<!-- Modal -->
 
<!-- /Modal -->    