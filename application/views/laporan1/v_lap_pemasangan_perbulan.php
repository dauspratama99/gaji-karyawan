<!DOCTYPE>
<html>
<head>
<meta charset="UTF-8">
<title>LAPORAN DATA PEMASANGAN</title>
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
LAPORAN DATA PEMASANGAN PERBULAN </span><br>

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
    foreach ($data->result_array() as $i)
		$b=$data->num_rows();
?>
<tr>
<th colspan="7" style="text-align:left;" >Bulan : <?php echo $i['bulan'] ?></th>
</tr>

<tr>
<th colspan="7" style="text-align:right;" >Jumlah data : <?php echo $b?></th>
</tr>
    <tr style="background-color: #d0cbcb; vertical-align: middle;height: 30px" >
       <th style="width: 30px;">NO</th>
	           <th style="width: 130px">TANGGAL PASANG</th>

        <th style="width: 130px">KODE PEMASANGAN</th>
        <th style="width: 120px">JUMLAH PASANG</th>
       
		 <th style="width: 80px">NAMA PELANGGAN</th>
       <th style="width: 80px">NO INTERNET</th>
       
    </tr>
</thead>
<tbody>
<?php 
$no=0;
    foreach ($data->result_array() as $i) {
        $no++;
?>
    <tr align="center">
        <td style="text-align: center;"><?php echo $no;?></td>
		        <td><?php echo $i['tanggalpasang'] ?></td>

        <td><?php echo $i['kodepemasangan'] ?></td>
        <td><?php echo $i['jumlahpasang'] ?></td>
       
		<td><?php echo $i['namapelanggan'] ?></td>
		<td><?php echo $i['nointernet'] ?></td>
        
    </tr>
<?php }?>
</tbody>
</table>
</br><table style="border-collapse: collapse; width: 90%; font-weight: bold;" border="0">
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