<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * from uraian WHERE nip='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>
<div class="row">

	<div class="col-md-8">
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Detail Uraian Tugas</h3>

				<div class="card-tools">
				</div>
			</div>
			<div class="card-body p-0">
				<table class="table">
					<tbody>
						<tr>
							<td style="width: 150px">
								<b>NIP</b>
							</td>
							<td>:
								<?php echo $data_cek['nip']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Nama Pegawai</b>
							</td>
							<td>:
								<?php echo $data_cek['nama']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Jabatan</b>
							</td>
							<td>:
								<?php echo $data_cek['jabatan']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Kelas Jabatan</b>
							</td>
							<td>:
								<?php echo $data_cek['kelas_jabatan']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Uraian Tugas</b>
							</td>
							<td>:
								<a href="uraian_tugas/<?php echo $data_cek['uraian_tugas']; ?>">
									<?php echo $data_cek['uraian_tugas']; ?>
								</a>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="card-footer">
					<a href="?page=data-uraian" class="btn btn-warning">Kembali</a>
				</div>
			</div>
		</div>
	</div>