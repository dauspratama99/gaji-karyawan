
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <button type="button" class="btn btn-primary" onclick="location.href = ('<?php echo site_url('barang/tambah') ?>')">
                        <i class="fa fa-plus"></i> Tambah barang
                    </button>
                </h3>
            </div>
                         
	
            <?php echo $this->session->flashdata('pesan'); ?>
            <div class="box-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example"> 
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>KODE BARANG</th>
                            <th>NAMA BARANG</th>
							<th>TYPE BARANG</th>

                           <th>STOK</th>
						   <th>SATUAN</th>
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
                                <td><?php echo $baris['kodebarang']; ?></td>
                                <td><?php echo $baris['namabarang']; ?></td>
								<td><?php echo $baris['typebarang']; ?></td>                      <td><?php echo $baris['stok']; ?></td>
								  <td><?php echo $baris['satuan']; ?></td>

                                <td align="center">
								  

                                  <button type="button" class="btn btn-primary"
								  onclick="location.href = ('<?php echo site_url('barang/edit/' . $baris['kodebarang']) ?>')">
                                        <i class="fa fa-edit"> Edit</i>
                                    </button>
								

                                    <button type="button" class="btn btn-primary"
									onclick="return hapus('<?php echo $baris['kodebarang'] ?>')">
                                        <i class="fa fa-trash-o">Hapus</i>
                                    </button>
                                    <script>
                                        function hapus(kode) {
                                            pesan = confirm('Yakin data barang ini di hapus');
                                            if (pesan) {
                                                location.href = ('<?php echo site_url('barang/hapus/') ?>' + kode);
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