<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tb_pegawai WHERE nip='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Ubah Data</h3>
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
				<label class="col-sm-2 col-form-label">NIK</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nik" name="nik" value="<?php echo $data_cek['nik']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NPWP</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="npwp" name="npwp" value="<?php echo $data_cek['npwp']; ?>"
					/>
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
				<label class="col-sm-2 col-form-label">Pangkat/Golongan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="golongan" name="golongan" value="<?php echo $data_cek['golongan']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal Lahir</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo $data_cek['tanggal_lahir']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tempat Lahir</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?php echo $data_cek['tempat_lahir']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Bagian</label>
				<div class="col-sm-4">
					<select name="bagian" id="bagian" class="form-control">
						<option value="">-- Pilih --</option>
						<?php
                //cek data yg dipilih sebelumnya
                if ($data_cek['bagian'] == "Umum") echo "<option value='Umum' selected>Umum</option>";
                else echo "<option value='Pegawai'>Umum</option>";

                if ($data_cek['bagian'] == "Adpem") echo "<option value='Adpem' selected>Adpem</option>";
                else echo "<option value='Adpem'>Adpem</option>";

				if ($data_cek['bagian'] == "Organisasi") echo "<option value='Organisasi' selected>Organisasi</option>";
                else echo "<option value='Organisasi'>Organisasi</option>";

				if ($data_cek['bagian'] == "Program & Keuangan") echo "<option value='Program & Keuangan' selected>Program & Keuangan</option>";
                else echo "<option value='Program & Keuangan'>Program & Keuangan</option>";

				if ($data_cek['bagian'] == "Ekbang") echo "<option value='Ekbang' selected>Ekbang</option>";
                else echo "<option value='Ekbang'>Ekbang</option>";

				if ($data_cek['bagian'] == "Kesra") echo "<option value='Kesra' selected>Kesra</option>";
                else echo "<option value='Kesra'>Kesra</option>";

				if ($data_cek['bagian'] == "Barjas") echo "<option value='Barjas' selected>Barjas</option>";
                else echo "<option value='Barjas'>Barjas</option>";

				if ($data_cek['bagian'] == "Pemerintahan") echo "<option value='Pemerintahan' selected>Pemerintahan</option>";
                else echo "<option value='Pemerintahan'>Pemerintahan</option>";

				if ($data_cek['bagian'] == "Hukum") echo "<option value='Hukum' selected>Hukum</option>";
                else echo "<option value='Hukum'>Hukum</option>";
            			?>
					</select>
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
				<label class="col-sm-2 col-form-label">Status</label>
				<div class="col-sm-4">
					<select name="status" id="status" class="form-control">
						<option value="">-- Pilih --</option>
						<?php
                //cek data yg dipilih sebelumnya
                if ($data_cek['status'] == "PNS") echo "<option value='PNS' selected>PNS</option>";
                else echo "<option value='Pegawai'>PNS</option>";

                if ($data_cek['status'] == "Honorer TKK") echo "<option value='Honorer TKK' selected>Honorer TKK</option>";
                else echo "<option value='Honorer TKK'>Honorer TKK</option>";

                if ($data_cek['status'] == "Honorer THL") echo "<option value='Honorer THL' selected>Honorer THL</option>";
                else echo "<option value='Honorer THL'>Honorer THL</option>";

                 if ($data_cek['status'] == "Honorer OB") echo "<option value='Honorer OB' selected>Honorer OB</option>";
                else echo "<option value='Honorer OB'>Honorer OB</option>";

                 if ($data_cek['status'] == "Honorer Pamdal") echo "<option value='Honorer Pamdal' selected>Honorer Pamdal</option>";
                else echo "<option value='Honorer Pamdal'>Honorer Pamdal</option>";

                 if ($data_cek['status'] == "Honorer PRT") echo "<option value='Honorer PRT' selected>Honorer PRT</option>";
                else echo "<option value='Honorer PRT'>Honorer PRT</option>";
            			?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">TMT</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tmt" name="tmt" value="<?php echo $data_cek['tmt']; ?>"
					/>
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">No Hp</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="no_hp" name="no_hp" value="<?php echo $data_cek['no_hp']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Pendidikan</label>
				<div class="col-sm-4">
					<select name="pendidikan" id="pendidikan" class="form-control">
						<option value="">-- Pilih --</option>
						<?php
                //cek data yg dipilih sebelumnya
                if ($data_cek['pendidikan'] == "SD Sederajat") echo "<option value='SD Sederajat' selected>SD Sederajat</option>";
                else echo "<option value='SD Sederajat'>SD Sederajat</option>";

                if ($data_cek['pendidikan'] == "SMP Sederajat") echo "<option value='SMP Sederajat' selected>SMP Sederajat</option>";
                else echo "<option value='SMP Sederajat'>SMP Sederajat</option>";

                if ($data_cek['pendidikan'] == "SMA Sederajat") echo "<option value='SMA Sederajat' selected>SMA Sederajat</option>";
                else echo "<option value='SMA Sederajat'>SMA Sederajat</option>";

                 if ($data_cek['pendidikan'] == "S1") echo "<option value='S1' selected>S1</option>";
                else echo "<option value='S1'>S1</option>";

                 if ($data_cek['pendidikan'] == "S2") echo "<option value='S2' selected>S2</option>";
                else echo "<option value='S2'>S2</option>";

                 if ($data_cek['pendidikan'] == "S3") echo "<option value='S3' selected>S3</option>";
                else echo "<option value='S3'>S3</option>";
            			?>
					</select>
				</div>
			</div>



			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Email</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="email" name="email" value="<?php echo $data_cek['email']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alamat</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $data_cek['alamat']; ?>"
					/>
				</div>
			</div>


			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Foto Pegawai</label>
				<div class="col-sm-6">
					<img src="foto/<?php echo $data_cek['foto']; ?>" width="160px" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Ubah Foto</label>
				<div class="col-sm-6">
					<input type="file" id="foto" name="foto">
					<p class="help-block">
						<font color="red">"Format file Jpg/Png"</font>
					</p>
				</div>
			</div>
		</div>

		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-pegawai" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
	$sumber = @$_FILES['foto']['tmp_name'];
	$target = 'foto/';
	$nama_file = @$_FILES['foto']['name'];
	$pindah = move_uploaded_file($sumber, $target.$nama_file);

	
if (isset ($_POST['Ubah'])){

    if(!empty($sumber)){
        $foto= $data_cek['foto'];
            if (file_exists("foto/$foto")){
            unlink("foto/$foto");}

        $sql_ubah = "UPDATE tb_pegawai SET
        	nik='".$_POST['nik']."',
        	npwp='".$_POST['npwp']."',
			nama='".$_POST['nama']."',
			golongan='".$_POST['golongan']."',
			bagian='".$_POST['bagian']."',
			alamat='".$_POST['alamat']."',
			tanggal_lahir='".$_POST['tanggal_lahir']."',
			tempat_lahir='".$_POST['tempat_lahir']."',
			no_hp='".$_POST['no_hp']."',
			email='".$_POST['email']."',
			status='".$_POST['status']."',
			tmt='".$_POST['tmt']."',
			pendidikan='".$_POST['pendidikan']."',
			perkerjaan='".$_POST['pekerjaan']."',
			jabatan='".$_POST['jabatan']."',
			foto='".$nama_file."'		
            WHERE nip='".$_POST['nip']."'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);

    }elseif(empty($sumber)){
		$sql_ubah = "UPDATE tb_pegawai SET
		nik='".$_POST['nik']."',
		npwp='".$_POST['npwp']."',
		nama='".$_POST['nama']."',
		golongan='".$_POST['golongan']."',
		bagian='".$_POST['bagian']."',
		alamat='".$_POST['alamat']."',
		tanggal_lahir='".$_POST['tanggal_lahir']."',
		tempat_lahir='".$_POST['tempat_lahir']."',
		no_hp='".$_POST['no_hp']."',
		email='".$_POST['email']."',
		pendidikan='".$_POST['pendidikan']."',
		tmt='".$_POST['tmt']."',
		status='".$_POST['status']."',
		jabatan='".$_POST['jabatan']."'		
		WHERE nip='".$_POST['nip']."'";
	$query_ubah = mysqli_query($koneksi, $sql_ubah);
        }

    if ($query_ubah) {
        echo "<script>
        Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-pegawai';
            }
        })</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-pegawai';
            }
        })</script>";
    }
}

