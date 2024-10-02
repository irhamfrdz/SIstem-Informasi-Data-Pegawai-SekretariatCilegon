<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM uraian WHERE nip='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Ubah Data Uraian</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NIP</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nip" name="nip" value="<?php echo $data_cek['nip']; ?>"
					 readonly/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Pegawai</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data_cek['nama']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jabatan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="jabatan" name="jabatan" value="<?php echo $data_cek['jabatan']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kelas Jabatan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="kelas_jabatan" name="kelas_jabatan" value="<?php echo $data_cek['kelas_jabatan']; ?>"
					/>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jabatan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="jabatan" name="jabatan" value="<?php echo $data_cek['jabatan']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Uraian Tugas</label>
				<div class="col-sm-6">
					<a href="uraian_tugas/<?php echo $data_cek['uraian_tugas']; ?>">
									<?php echo $data_cek['uraian_tugas']; ?>
								</a>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Ubah File Uraian Tugas</label>
				<div class="col-sm-6">
					<input type="file" id="uraian_tugas" name="uraian_tugas">
					<p class="help-block">
						<font color="red">"Format file PDF/DOCS MAX 2MB"</font>
					</p>
				</div>
			</div>
		</div>
		

		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-uraian" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
	$sumber = @$_FILES['uraian_tugas']['tmp_name'];
	$target = 'uraian_tugas/';
	$nama_file = @$_FILES['uraian_tugas']['name'];
	$pindah = move_uploaded_file($sumber, $target.$nama_file);
	
if (isset ($_POST['Ubah'])){

    if(!empty($sumber)){
        $uraian_tugas= $data_cek['uraian_tugas'];
            if (file_exists("uraian_tugas/$uraian_tugas")){
            unlink("uraian_tugas/$uraian_tugas");}

        $sql_ubah = "UPDATE uraian SET
			nama='".$_POST['nama']."',
			jabatan='".$_POST['jabatan']."',
			kelas_jabatan='".$_POST['kelas_jabatan']."',
			uraian_tugas='".$nama_file."'		
            WHERE nip='".$_POST['nip']."'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);

    }elseif(empty($sumber)){
		$sql_ubah = "UPDATE tb_pegawai SET
		nama='".$_POST['nama']."',
		jabatan='".$_POST['jabatan']."',
		kelas_jabatan='".$_POST['kelas_jabatan']."',	
		WHERE nip='".$_POST['nip']."'";
	$query_ubah = mysqli_query($koneksi, $sql_ubah);
        }

    if ($query_ubah) {
        echo "<script>
        Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-uraian';
            }
        })</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-uraian';
            }
        })</script>";
    }
}

