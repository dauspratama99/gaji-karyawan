<html lang="en" moznomarginboxes mozdisallowselectionprint>
<head>
    <title><?php echo $title?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url('css/laporan.css')?>"/>
</head>
<body onload="window.print()">
<div id="laporan">
<table border="0" align="center" style="width:990px;margin-top:5px;border:none;margin-bottom:0px;font-weight: bold;font-size: 16px">
<tr><td rowspan="3" align="center" style="width: 90px"><img src="<?php echo base_url().'images/IMG_20181115_084856.jpg'?>" height="64" width="70"></td>
    <td>LAPORAN DATA JABATAN</td>
</tr>
<tr>
    <td >STIN 22 BELIMBING</td>
</tr>  
<tr>
    <td style="font-size: 12px;font-weight: italic;">Jl. Markisa Raya, Belimbing, Padang</td>
</tr>                
</table>
 
<table border="0" align="center" style="width:900px;border:none;">
    <tr><th style="text-align:left"></th></tr>
</table>
<table border="1" align="center" style="width:990px;margin-bottom:10px;font-size: 14px">
<thead>
<?php 
    $b=$data->num_rows();
?>
<tr>
<th colspan="5" style="text-align:right;" >Jumlah data : <?php echo $b?></th>
</tr>
    <tr style="background-color: #d0cbcb; vertical-align: middle;height: 30px" >
        <th style="width: 30px;" align="center">NO</th>
        <th style="width: 90px" >KODE JABATAN</th>
        <th style="width: 170px">NAMA JABATAN</th>
        <th style="width: 100px">GAJI POKOK</th>
        <th style="width: 60px">TUNJANGAN JABATAN</th>    
    </tr>
</thead>
<tbody>
    <?php $no=0;foreach ($data->result_array() as $i) { $no++;?>
    <tr align="center">
        <td style="text-align: center;"><?php echo $no;?></td>
        <td style="text-align: center;"><?php echo $i['kodejabatan'] ?></td>
        <td><?php echo $i['namajabatan'] ?></td>
        <td><?php echo $i['gajipokok'] ?></td>
        <td style="text-align: center;"><?php echo $i['tunjanganjabatan'] ?></td>
       
       
    </tr>
    <?php }?>
</tbody>
</table>
<table align="center" style="width:990px; border:none;margin-top:5px;margin-bottom:20px;font-size: 14px">
    <tr>
        <td align="right">Padang, <?php echo date('d-M-Y')?></td>
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
    </tr>
</table>
<table align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:20px;">
    <tr>
        <th><br/><br/></th>
    </tr>
    <tr>
        <th align="left"></th>
    </tr>
</table>
</div>
</body>
</html>