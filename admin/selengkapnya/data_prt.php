<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Status Honorer PRT</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Foto</th>
						<th>NIP</th>
                        <th>NIK</th>
						<th>Nama</th>
						<th>alamat</th>
						<th>status</th>
						<th>Golongan</th>
						<th>Jabatan</th>
                        <th>Bagian</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
              $no = 1;
			  $sql = $koneksi->query("SELECT * from tb_pegawai WHERE status LIKE 'Honorer PRT'");
              while ($data= $sql->fetch_assoc()) {
            ?>

					<tr>
						<td>
							<?php echo $no++; ?>
						</td>
						<td align="center">
							<img src="foto/<?php echo $data['foto']; ?>" width="70px" />
						</td>

						<td>
							<?php echo $data['nip']; ?>
						</td>

                        <td>
							<?php echo $data['nik']; ?>
						</td>

						<td>
							<?php echo $data['nama']; ?>
						</td>

						<td>
							<?php echo $data['alamat']; ?>
						</td>

						<td>
							<?php echo $data['status']; ?>
						</td>

						<td>
							<?php echo $data['golongan']; ?>
						</td>

						<td>
							<?php echo $data['jabatan']; ?>
						</td>

                        <td>
                            <?php echo $data['bagian']; ?>
                        </td>


						<td>
							<a href="?page=view-pegawai&kode=<?php echo $data['nip']; ?>" title="Detail"
							 class="btn btn-info btn-sm">
								<i class="fa fa-eye"></i>
							</a>
							</a>
							<a href="?page=edit-pegawai&kode=<?php echo $data['nip']; ?>" title="Ubah" class="btn btn-success btn-sm">
								<i class="fa fa-edit"></i>
							</a>
							<a href="?page=del-pegawai&kode=<?php echo $data['nip']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
							 title="Hapus" class="btn btn-danger btn-sm">
								<i class="fa fa-trash"></i>
						</td>
					</tr>

					<?php
              }
            ?>
				</tbody>
				</tfoot>
			</table>
		</div>
	</div>
	<!-- /.card-body -->