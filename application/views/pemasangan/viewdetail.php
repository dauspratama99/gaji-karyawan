<section class="content"> 
<div class="box box-warning color-palette-box">      
<div class="box-header with-border">         
<h3 class="box-title">
<i class="fa fa-tag"></i> DETAIL PEMASANGAN</h3>   
</div>       

<div class="box-body">      
<div class="row">            
<div class="col-sm-12 col-md-12">            
<?php $d=$ambildata->row_array();?>               

<table>                
<tr>
<td width='150px'>ID PEMASANGAN</td>

<td width='10px'>:</td><td><b><?php echo $d['d_kodepemasangan']; ?></b></td>
</tr>                

               

<tr>
<td width='200'>TANGGAL PEMASANGAN</td><td>:</td>
<td><b><?php echo $d['tanggalpasang']; ?></b></td>

</tr>   

</table>    
<br>
<table>                
<tr>
<td width='150px'>NAMA PELANGGAN</td>

<td width='10px'>:</td><td><b><?php echo $d['namapelanggan']; ?></b></td>
</tr>                

               

<tr>
<td width='200'>ALAMAT</td><td>:</td>
<td><b><?php echo $d['alamat']; ?></b></td>

</tr>   
<tr>
<td width='150'>NO.INTERNET</td><td>:</td>
<td><b><?php echo $d['nointernet']; ?></b></td>
</tr>   

</table>            

<br>
<table id="data" class="table table-bordered">
<thead> 

<tr style="background-color: #2196F3;color: white;font-size: 12px" align="center">     
<th width="5">NO</th>        
<th width="150" align="center">NAMA BARANG</th>       
<th width="200">JUMLAH BARANG</th>      
    </tr> </thead> <tbody>     
<?php $no=1; foreach($ambildata->result_array() as $r){ ?>   
<tr style="font-size: 12px;">    
<td align="center"><?php echo $no?></td>        
<td><?php echo $r['d_barang']?></td>      
<td><?php echo $r['d_jumlah']?></td>  
</tr>    
<?php $no++;

   }?>     
 </tbody> 
 </table> 
 <br>
 <button type="button" onclick="location.href=('<?php echo site_url('pemasangan/')?>')" class="btn btn-danger btn-sm">
 <span class='fa fa-shopping-cart'></span> TRANSAKSI BARU</button> 
 
 <button type="submit" onclick="location.href=('<?php echo site_url('pemasangan/data')?>')" class="btn btn-success btn-sm"><span class='fa  fa-mail-reply-all'></span> KEMBALI</button>             </div>       
 <!-- /.col -->         
 </div>         
 <!-- /.row -->         
 </div>     
 <!-- /.box-body -->      
 </div> 
 </section>