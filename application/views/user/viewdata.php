<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <button type="button" class="btn btn-primary" onclick="location.href = ('<?php echo site_url('user/tambah') ?>')">
                        <i class="fa fa-plus"></i> Tambah User
                    </button>
                </h3>
            </div>
            <?php echo $this->session->flashdata('pesan'); ?>
            <div class="box-body">
               <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example" > 
                    <thead>
                        <tr>
                            
                            <th align="center">Id</th>
                            <th align="center">User</th>
							<th align="center">Password</th>
                            <th align="center">Hak Akses</th>
                            <th>
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                       
                        foreach ($tampildata->result_array() as $baris):
                            
                            ?>
                            <tr>
                               
                                <td><?php echo $baris['id']; ?> </td>
                                <td><?php echo $baris['user']; ?> </td>
								<td><?php echo $baris['password']; ?> </td>
                             	<td><?php echo $baris['hakakses']; ?> </td>
                                <td align="center">
                                    <button type="button" class="btn btn-primary"
								  onclick="location.href = ('<?php echo site_url('user/edit/' . $baris['id']) ?>')">
                                        <i class="fa fa-edit"> Edit</i>
                                    </button>
								

                                    <button type="button" class="btn btn-primary"
									onclick="return hapus('<?php echo $baris['id'] ?>')">
                                        <i class="fa fa-trash-o">Hapus</i>
                                    </button>
                                    <script>
                                        function hapus(kode) {
                                            pesan = confirm('Yakin data user ini di hapus');
                                            if (pesan) {
                                                location.href = ('<?php echo site_url('user/hapus/') ?>' + kode);
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