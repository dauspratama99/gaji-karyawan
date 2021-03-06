
<div class="col-10 stretch-card">
                  <div class="card">
                    <div class="card-body">
                      
                      <h3 class="box-title">
				 <button type="button" class="btn btn-primary"
					onclick="location.href =('<?php echo site_url('jabatan/tambah') ?>')">
                        <i class="fa fa-plus-circle" ></i> TAMBAH DATA JABATAN
                    </button>
                </h3>
                         
	
            <?php echo $this->session->flashdata('pesan'); ?>
            <div class="box-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example"> 
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>KODE JABATAN</th>
                            <th>NAMA JABATAN</th>
							<th>GAJI POKOK</th>
							<th>TUNJANGAN JABATAN</th>
                              <th>
                                AKSI
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 0;
                        foreach ($tampildata->result_array() as $baris):
                            $nomor++;
                            ?>
                            <tr>
                                <td><?php echo $nomor; ?></td>
                                <td><?php echo $baris['kodejabatan']; ?></td>
                                <td><?php echo $baris['namajabatan']; ?></td>
								<td><?php echo $baris['gajipokok']; ?></td>  
								<td><?php echo $baris['tunjanganjabatan']; ?></td>
								<td align="center">
                                   <button type="button" class="btn btn-primary"
								  onclick="location.href = ('<?php echo site_url('jabatan/edit/' . $baris['kodejabatan']) ?>')">
                                        <i class="fa fa-edit"> Edit</i>
                                    </button>
                                    <button type="button" class="btn btn-primary"
									onclick="return hapus('<?php echo $baris['kodejabatan'] ?>')">
                                        <i class="fa fa-trash-o">HAPUS </i>
                                    </button>
                                    <script>
                                        function hapus(kode) {
                                            pesan = confirm('Yakin data jabatan ini di hapus');
                                            if (pesan) {
                                                location.href = ('<?php echo site_url('jabatan/hapus/') ?>' + kode);
                                            } else
                                                return false;
                                        }
                                    </script>
                                </td>
                            </tr>
                            <?php
                        endforeach;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>