<html lang="en" moznomarginboxes mozdisallowselectionprint> 
<head>    
<title>

<?php echo $judul?>
</title>   
<meta charset="utf-8"> 

<body onload="window.print()">
<div id="laporan"> 
<table border="0" align="center" style="width:990px;margin-top:5px;border:none;marginbottom:0px;font-weight: bold;font-size: 16px"> 
<tr>
<td rowspan="3" align="center" style="width: 90px">
<img src="<?php echo base_url().'images/logo.png'?>" height="64" width="70">
</td> 

<td >LAPORAN PEMBELIAN PERIODE</td> 
</tr>

<tr>    
<td>UD Jayanusa Padang</td> 
</tr>  

<tr>    
<td style="font-size: 12px;font-weight: italic;">Jl. Simpang Tiga Rumpun Bambu, Padang</td>
</tr>                
</table>  

<table border="1" align="center" style="width:990px;margin-bottom:10px;font-size: 14px"> 
<thead>
<tr>
<th colspan="6" style="text-align:left;">
Tanggal Input : <?php echo date("d M Y",strtotime($awal));?> 
s/d <?php echo date("d M Y",strtotime($akhir));?>
</th> 

</tr>    
<tr style="background-color: #d0cbcb; vertical-align: middle;height: 30px">      
<th style="width: 30px;">No</th>        
<th style="width: 130px">Nofaktur</th>        
<th style="width: 130px">Tanggal Beli</th>        
<th style="width: 120px">Jml Brg</th>        
<th style="width: 120px">Harga Brg</th>        
<th style="width: 100px">Subtotal</th> 
 </tr>
 </thead> 
 <tbody>

<?php 
$no=0;
$totsemua=0;
foreach($data->result_array() as $i)
{
	$no++;
	$totsemua= $totsemua+$i['total'];?>    
 <tr>        
 <td style="text-align: center;"><?php echo $no;?></td>        
 <td><?php echo $i['nofak'] ?></td>       
 <td><?php echo $i['tglbeli'] ?></td>         
 <td><?php echo $i['namapemasok'] ?></td>    
 <td style="text-align: center;"><?php echo $i['jml'] ?></td>       
 <td style="text-align: center;"><?php echo $i['d_harga'] ?></td>      
 <td align="right"><?php echo 'Rp '.number_format($i['total']);?></td>    
 </tr> 

 <?php }?> 
 
 <tr>       
 <td colspan="6" style="font-weight: bold;text-align: center">Total</td>    
 <td align="right">
 <?php echo 'Rp '.number_format($totsemua);?></td>     
 </tr> </tbody> </table> <table align="center" style="width:990px; border:none;margin-top:5px;margin-bottom:20px;fontsize: 14px">    
 <tr>        
 <td align="right">Padang,<?php echo date('d-M-Y')?></td>    
 </tr>  
 <tr>       
 <td align="right"></td>  
 </tr>     
 <tr>   
 <td><br/><br/><br/><br/></td>   
 </tr>       
 <tr>        
 <td align="right">( <?php echo $this->session->userdata('user');?> )</td>    
 </tr>  
 <tr>        
 <td align="center"></td>  
 </tr> </table> 
 <table align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:20px;">     <tr>         
 <th><br/><br/></th>    
 </tr>   
 <tr>      
 <th align="left"></th>   
 </tr> 
 </table> 
 </div>
 </body>
 </html> 