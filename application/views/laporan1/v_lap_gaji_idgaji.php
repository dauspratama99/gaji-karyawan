<!DOCTYPE>
<html>
<head>
<meta charset="UTF-8">
<title>LAPORAN DATA PENGGAJIAN</title>
</head>
<body onload="window.print()">
<div align="center">

<table style="border-collapse: collapse; width: 60%" border="0">
<tr><td rowspan="3" align="center" style="width: 90px"><img src="<?php echo base_url().'images/IMG_20181115_084856.jpg'?>" height="64" width="70"></td>
</tr>
<tr>
<td style="font-size:  16pt;  font-weight:  bold;  color: balck;" align="center">PT. WEJE MITRA UTAMA(WMU) PADANG</td>
</tr>
<tr>
<td style="font-size:  15pt;  font-weight:  bold;  color: balck;" align="center">Jl. Prof.Dr.Hamka No.1, Parupuk Tabing, Kec. Koto Tangah, Kota Padang</td>
</tr>

</table>    
<hr>
<tr>
<span  style="font-size:  14pt;  font-weight:  bold;  color: red;">
FAKTUR  </span><br>

<td align="center">

<table style="border-collapse: collapse; width: 60%;" border="0">
				
</table>
<br>
</td>
</tr>
<tr>
<td align="center">		
<br>
<table style="border-collapse: collapse; width: 60%;" border="0">

<?php 
 foreach ($data->result_array() as $i) 
    $b=$data->num_rows();
?>
<tr>
<td width='150px'>ID GAJI</td>

<td width='5px'>:</td><td><b><?php echo $i['idgaji'] ?></b></td>

</tr>                

               

<tr>
<td width='200'>TANGGAL </td><td>:</td>
<td><b><?php echo $i['tgl'] ?></b></td>

</tr>   
<table style="border-collapse: collapse; width: 60%;" border="2">
<?php $totsemua=0;foreach ($data->result_array() as $i)
	 {    $totsemua = $totsemua + $i['totalgaji'];?> 
<tr >

      
        
        <th style="width: 30px" align="left">NAMA KARYAWAN</th>   
		 <th style="width: 30px" ><?php echo $i['namakaryawan'] ?></th>    
		  </tr>
		    <tr>
		<th style="width: 30px" align="left">NAMA JABATAN</th>  
		 <th style="width: 30px"><?php echo $i['namajabatan'] ?></th>    

		  </tr>
		    <tr>
		<th style="width: 30px" align="left">GAJI POKOK</th>    
				 <th style="width: 30px"><?php echo $i['gajipokok'] ?></th>    

		  </tr><tr>
		<th style="width: 30px" align="left">TUNJANGAN JABATAN</th>   
				 <th style="width: 30px"><?php echo $i['tunjanganjabatan'] ?></th>    
</tr>
<tr>
		<th style="width: 30px" align="left">BIAYA PEMASANGAN</th>  
				 <th style="width: 30px"><?php echo $i['biayapemasangan'] ?></th>    
</tr>
<tr>
		<th style="width: 30px" align="left">BIAYA OPERASIONAL</th>    
				 <th style="width: 30px"><?php echo $i['biayaoperasional'] ?></th>    
</tr>
<tr>
		<th style="width: 30px" align="left">TOTAL GAJI</th>   
				 <th style="width: 30px"><?php echo $i['totalgaji'] ?></th>    

    </tr>
	 <?php }?>
</thead>
<tbody>
     

</tfoot>
</table>
<table align="center" style="width:990px;margin-bottom:10px;font-size: 14px">
    <tr>
        <td></td>
</table>
<table style="border-collapse: collapse; width: 60%; font-weight: bold;" border="0">
<tr>
<td width="80%"></td>
<td width="26%">Padang, <?php echo date('d-m-Y'); ?>
    </tr>
    <tr>
<td width="80%"></td>

        <td width="26%">Adm</td>
    </tr>
   
    <tr>
    <td><br/><br/><br/><br/></td>
    </tr>    
    <tr>
	<td width="80%"></td>

        <td width="26%">( <?php echo $this->session->userdata('user');?> )</td>
    </tr>
    <tr>
        <td align="center"></td>
    </tr>
					</table>
					</div>                        
					</td>
				</tr>
				</table>
</div>
</body>
</html>