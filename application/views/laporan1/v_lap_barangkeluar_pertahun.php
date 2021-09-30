<!DOCTYPE>
<html>
<head>
<meta charset="UTF-8">
<title>LAPORAN DATA BARANG KELUAR</title>
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
LAPORAN DATA BARANG KELUAR PERTAHUN </span><br>

<td align="center">

<table style="border-collapse: collapse; width: 90%; font-weight: bold;" border="0">
				
</table>
<br>
</td>
</tr>
<tr>
<td align="center">		
<br>
<table style="border-collapse: collapse; width: 60%;" border="1">
<th colspan="3" style="text-align:left;" >Tahun : <?php echo $tahun ?></th>
</tr>

    <tr style="background-color: #d0cbcb; vertical-align: middle;height: 30px" >
        <th style="width: 30px;" align="center">NO</th>
      
		<th style="width: 100px">BULAN</th> 
       

        <th style="width: 60px">TOTAL BARANG</th>    
    </tr>
</thead>
<tbody>
     <?php 
	$nama_bulan = array(1=>"JANUARI","FABRUARI","MARET","APRIL","MEI","JUNI","JULI","AGUSTUS",
"SEPTEMBER","OKTOBER","NOVEMBER","DESEMBER");
for($bln=1;$bln<=12;$bln++)
{?>
	<tr>
		<td align="center" width="40px"><?php echo $bln?></td>
		<td align="center"><?php echo $nama_bulan[$bln]?></td>
		<td align="center">
<?php $kd_bln = $bln;
	$query = $this->db->query("
SELECT (SUM(d_jumlah)) AS TOTALBARANG
FROM pemasangan_detail JOIN pemasangan  ON d_kodepemasangan=kodepemasangan 
WHERE DATE_FORMAT(tanggalpasang,'%c')='$kd_bln' AND YEAR(tanggalpasang)='$tahun'")->row_array();
			echo ($query['TOTALBARANG']);
			?>
		</td>
	</tr>
<?php }?>
	 
</tbody>
</table>
</table>
<br>
</td>
</tr>
<td>
<div align="center">
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
	</body>
</html>