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
LAPORAN DATA PENGGAJIAN PERTAHUN</span><br>

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

<tr>
<th colspan="3" style="text-align:left;" >Tahun : <?php echo $tahun ?></th>
</tr>
    <tr style="background-color: #d0cbcb; border-collapse: collapse; width: 90%;" border="" >
        <th style="width: 30px;" align="center">NO</th>
      
        
        <th style="width: 100px">BULAN</th>
         
		<th style="width: 100px">TOTAL GAJI</th>   
    </tr>

<tbody>
<?php $nama_bulan = array(1=>"JANUARI","FABRUARI","MARET","APRIL","MEI","JUNI","JULI","AGUSTUS",
"SEPTEMBER","OKTOBER","NOVEMBER","DESEMBER");
for($bln=1;$bln<=12;$bln++)
{?>
	<tr>
		<td align="center" width="40px"><?php echo $bln?></td>
		<td align="center"><?php echo $nama_bulan[$bln]?></td>
		<td align="center">
<?php $kd_bln = $bln;
	$query = $this->db->query("SELECT IFNULL(SUM((gaji.jumlahpemasangan*75000)+(tunjanganjabatan+gajipokok)+
	(gaji.jumlahpemasangan*25000)),0) AS totalgaji
FROM gaji JOIN karyawan JOIN jabatan ON kdkaryawan=kodekaryawan AND 
kd_jabatan=kodejabatan
WHERE DATE_FORMAT(tgl,'%c')='$kd_bln' AND YEAR(tgl)='$tahun'")->row_array();
			echo number_format($query['totalgaji'],0,",",".");
			?>
		</td>
	</tr>
<?php }?>

     
</table>
<table align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:20px;">
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
</div>
</body>
</html>