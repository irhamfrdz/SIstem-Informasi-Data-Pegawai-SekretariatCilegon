
<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data Uraian</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NIP</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nip" name="nip" placeholder="NIP" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Pegawai</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Pegawai" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jabatan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan" required>
				</div>
			</div>

				<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kelas Jabatan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="kelas_jabatan" name="kelas_jabatan" placeholder="Kelas Jabatan" required>
				</div>
			</div>

		<div class="form-group row">
				<label class="col-sm-2 col-form-label">Uraian Tugas</label>
				<div class="col-sm-6">
					<input type="file" id="uraian_tugas" name="uraian_tugas">
					<p class="help-block">
						<font color="red">"Format file PDF/DOCS MAX 2MB"</font>
					</p>
				</div>
			</div>

		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-pegawai" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
	$sumber = @$_FILES['uraian_tugas']['tmp_name'];
	$target = 'uraian_tugas/';
	$nama_file = @$_FILES['uraian_tugas']['name'];
	$pindah = move_uploaded_file($sumber, $target.$nama_file);

      if (isset ($_POST['Simpan'])){

		if(!empty($sumber)){
        $sql_simpan = "INSERT INTO uraian (nip, nama, jabatan, kelas_jabatan, uraian_tugas) VALUES (
            '".$_POST['nip']."',
			'".$_POST['nama']."',
			'".$_POST['jabatan']."',
			'".$_POST['kelas_jabatan']."',
            '".$nama_file."')";
        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

   if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-uraian';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=add-uraian';
          }
      })</script>";
	}
	}elseif(empty($sumber)){
		echo "<script>
		Swal.fire({title: 'Gagal, FIle Wajib Diisi',text: '',icon: 'error',confirmButtonText: 'OK'
		}).then((result) => {
			if (result.value) {
				window.location = 'index.php?page=add-uraian';
			}
		})</script>";
	}
	}
     //selesai proses simpan data