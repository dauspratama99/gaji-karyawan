<div class="col-15 stretch-card">
                  <div class="card">
                    <div class="card-body">
                      
                      <h3 class="box-title">
				 <button type="button" class="btn btn-primary"
					onclick="location.href =('<?php echo site_url('pelanggan/tambah') ?>')">
                        <i class="fa fa-plus-circle" ></i> TAMBAH DATA PELANGGAN
                    </button>
                </h3>
                         
	
            <?php echo $this->session->flashdata('pesan'); ?>
            <div class="box-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example"> 
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>KODE PELANGGAN</th>
                            <th>TANGGAL ORDER</th>
                            <th>NAMA PELANGGAN</th>
                            <th>ALAMAT</th>
		                   <th>NOHP</th>
                            <th>EMAIL</th>
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
                                <td><?php echo $baris['kodepelanggan']; ?></td>
                                <td><?php echo $baris['tanggalorder']; ?></td>
                                <td><?php echo $baris['namapelanggan']; ?></td>
                                <td><?php echo $baris['alamat']; ?></td>

								<td><?php echo $baris['nohp']; ?></td>
                                <td><?php echo $baris['email']; ?></td>
                                <td align="center">
								  

                                  <button type="button" class="btn btn-primary"
								  onclick="location.href = ('<?php echo site_url('pelanggan/edit/' . $baris['kodepelanggan']) ?>')">
                                        <i class="fa fa-edit"> Edit</i>
                                    </button>
								

                                    <button type="button" class="btn btn-primary"
									onclick="return hapus('<?php echo $baris['kodepelanggan'] ?>')">
                                        <i class="fa fa-trash-o">Hapus</i>
                                    </button>
                                    <script>
                                        function hapus(kode) {
                                            pesan = confirm('Yakin data pelanggan ini di hapus');
                                            if (pesan) {
                                                location.href = ('<?php echo site_url('pelanggan/hapus/') ?>' + kode);
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