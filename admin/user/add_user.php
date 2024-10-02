
<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data Pengguna</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">ID Pengguna</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="id_pengguna" name="id_pengguna" placeholder="ID Pengguna" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Pengguna</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nama_pengguna" name="nama_pengguna" placeholder="Nama Pengguna" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Username</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
				</div>
			</div>

				<div class="form-group row">
				<label class="col-sm-2 col-form-label">Password</label>
				<div class="col-sm-5">
					<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
				</div>
			</div>

				<div class="form-group row">
				<label class="col-sm-2 col-form-label">Level</label>
				<div class="col-sm-5">
					<select name="level" id="level" class="form-control">
						<option>- Pilih -</option>
						<option >Administrator</option>
						<option >Pengguna</option>
					</select>
				</div>
			</div>

		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-pengguna" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php

      if (isset ($_POST['Simpan'])){
        $sql_simpan = "INSERT INTO tb_pengguna (id_pengguna, nama_pengguna, username, password, level) VALUES (
            '".$_POST['id_pengguna']."',
			'".$_POST['nama_pengguna']."',
			'".$_POST['username']."',
				'".$_POST['password']."',
			'".$_POST['level']."')";
        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

   if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-user';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=add-user';
          }
      })</script>";
	}
	}