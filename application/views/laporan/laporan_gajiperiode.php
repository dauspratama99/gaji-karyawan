<!DOCTYPE>
<html>
<head>
<meta charset="UTF-8">
<title>LAPORAN DATA PENGGAJIAN</title>
</head>
<body onload="window.print()">
<div align="center">

<table style="border-collapse: collapse; width: 96%" border="0">
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
LAPORAN DATA PENGGAJIAN </span><br>

<td align="center">

<table style="border-collapse: collapse; width: 90%; font-weight: bold;" border="0">
				
</table>
<br>
</td>
</tr>
<tr>
<td align="center">		
<br>
<table style="border-collapse: collapse; width: 90%;" border="2">
<?php 
    $b=$data->num_rows();
?>
<tr> 
<th colspan="10" style="text-align:left;" >Tanggal Masuk : <?php echo date("d M Y",strtotime($awal));?> s/d 
<?php echo date("d M Y",strtotime($akhir));?></th>
</tr>  
<tr> 
<th colspan="10" style="text-align:right;" >Jumlah data : <?php echo $b?></th>
</tr>     
<tr style="background-color: #d0cbcb; vertical-align: middle;height: 30px" >
        <th style="width: 30px;" align="center">NO</th>
      
		
        <th style="width: 100px">TANGGAL</th>
		<th style="width: 100px">ID GAJI</th> 
        <th style="width: 60px">NAMA KARYAWAN</th>    
		<th style="width: 60px">NAMA JABATAN</th>    
		<th style="width: 60px">GAJI POKOK</th>    
		<th style="width: 60px">TUNJANGAN JABATAN</th>    
		<th style="width: 60px">BIAYA PEMASANGAN</th>    
		<th style="width: 60px">BIAYA OPERASIONAL</th>    
		<th style="width: 60px">TOTAL GAJI</th>    
    </tr>
</thead>
<tbody>
    <?php $no=0;$totsemua=0;foreach ($data->result_array() as $i)
	 {$no++;     $totsemua = $totsemua + $i['totalgaji'];?> 
    <tr align="center">
        <td style="text-align: center;"><?php echo $no;?></td>
        
		    <td><?php echo $i['tgl'] ?></td>   
<td><?php echo $i['idgaji'] ?></td>

        
        <td><?php echo $i['namakaryawan'] ?></td>
        

	<td><?php echo $i['namajabatan'] ?></td>

        <td><?php echo $i['gajipokok'] ?></td>
        <td><?php echo $i['tunjanganjabatan'] ?></td>
        
<td><?php echo $i['biayapemasangan'] ?></td>

        <td><?php echo $i['biayaoperasional'] ?></td>
        <td><?php echo $i['totalgaji'] ?></td>
        
</tr>
    <?php }?>
	<tr> 
<th colspan="9" style="text-align:center;">Total</th>      
  <th style="text-align:center;"><?php echo ($totsemua);?></th>   
  </tr>  
	
  </tbody>
  </table>
  <table align="center" style="width:990px;margin-bottom:10px;font-size: 14px;">
    <tr>
        <td></td>
</table>
<table style="border-collapse: collapse; width: 90%; font-weight: bold;" border="0">
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
</table>
</div>
</body>
</html>