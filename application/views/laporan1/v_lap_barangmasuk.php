<!DOCTYPE>
<html>
<head>
<meta charset="UTF-8">
<title>LAPORAN DATA BARANG MASUK</title>
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
LAPORAN DATA BARANG MASUK </span><br>

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
<th colspan="10" style="text-align:right;" >Jumlah data : <?php echo $b?></th>
<tr style=" color: black; background-color: #d0cbcb">
        <th style="width: 30px;" align="center">NO</th>
      
        <th style="width: 100px">ID MASUK</th> 
		<th style="width: 100px">TANGGAL  MASUK</th> 
        <th style="width: 100px">NAMA BARANG</th>
		        <th style="width: 100px">TYPE BARANG</th>

        <th style="width: 60px">JUMLAH</th>    
    </tr>
</thead>
<tbody>
     <?php $no=0;$totsemua=0;foreach ($data->result_array() as $i)
	 {$no++;     $totsemua = $totsemua + $i['d_jumlah'];?> 
    <tr align="center">
        <td style="text-align: center;"><?php echo $no;?></td>
        
		       
<td><?php echo $i['d_idmasuk'] ?></td>
<td><?php echo $i['tanggalmasuk'] ?></td>

        <td><?php echo $i['namabarang'] ?></td>
		        <td><?php echo $i['typebarang'] ?></td>

        <td><?php echo $i['d_jumlah'] ?></td>
        
       
    </tr>
    <?php }?>
	<tr> 
<th colspan="5" style="text-align:center; background-color: #d0cbcb" >Total</th>      
  <th style="text-align:center;background-color: #d0cbcb"><?php echo ($totsemua);?></th>   
  </tr>  
</tbody>
</table>
<br>
</td>
</tr>
<td>
<div align="center">
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
	</body>
</html>