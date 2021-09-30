<section class="content"> 
<div class="box box-warning color-palette-box">      
<div class="box-header with-border">         
<h3 class="box-title">
<i class="fa fa-tag"></i> DETAIL GAJI KARYAWAN</h3>   
</div>       

<div class="box-body">      
<div class="row">            
<div class="col-sm-12 col-md-12">            
<?php $d=$ambildata->row_array();?>               

<table>                
<tr>
<td width='150px'>ID gaji</td>

<td width='10px'>:</td><td><b><?php echo $d['idgaji']; ?></b></td>
</tr>                

               

<tr>
<td width='200'>TANGGAL gaji</td><td>:</td>
<td><b><?php echo $d['tgl']; ?></b></td>
</tr>   

</table>            
<br>
<table id="data" class="table table-bordered">
<thead> 

<tr style="background-color: #2196F3;color: white;font-size: 12px" align="center">     
<th width="5">NO</th>        
<th width="150" align="center">NAMA KARYAWAN</th>       
<th width="200">JABATAN</th>      
<th width="200">GAJIPOKOK</th>  
<th width="200">TUNJANGAN JABATAN</th>      

<th width="200">JUMLAH PEMASANGAN</th>      
<th width="200">BIAYA SUBCOUNT</th>  
<th width="200">BIAYA TRANSPORT</th>      
<th width="200">TOTAL GAJI</th>      

    </tr> </thead> <tbody>     
<?php $no=1; foreach($ambildata->result_array() as $r){ ?>   
<tr style="font-size: 12px;">    
<td align="center"><?php echo $no?></td>        
<td><?php echo $r['namakaryawan']?></td>      
<td><?php echo $r['namajabatan']?></td>  
<td><?php echo $r['gajipokok']?></td>      
<td><?php echo $r['tunjanganjabatan']?></td>  
<td><?php echo $r['jumlahpemasangan']?></td>      
<td><?php echo $r['biayapemasangan']?></td>  
<td><?php echo $r['biayaoperasional']?></td>      
<td><?php echo $r['totalgaji']?></td>  
</tr>    
<?php $no++;

   }?>     
 </tbody> 
 </table> 
 <br>
 <button type="button" onclick="location.href=('<?php echo site_url('gaji/')?>')" class="btn btn-danger btn-sm">
 <span class='fa fa-shopping-cart'></span> TRANSAKSI BARU</button> 
 
 <button type="submit" onclick="location.href=('<?php echo site_url('gaji/data')?>')" class="btn btn-success btn-sm"><span class='fa  fa-mail-reply-all'></span> KEMBALI</button>             </div>       
 <!-- /.col -->         
 </div>         
 <!-- /.row -->         
 </div>     
 <!-- /.box-body -->      
 </div> 
 </section>