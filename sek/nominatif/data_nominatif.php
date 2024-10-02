<?php

        $sql_cek = "SELECT * FROM tb_profil";
        $query_cek = mysqli_query($koneksi, $sql_cek);
		$data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
		{

		
?>

<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-flag"></i> Profil Instansi</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama OPD</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="nama_profil" name="nama_profil" value="<?php echo $data_cek['nama_profil']; ?>"
					 readonly/>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alamat</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $data_cek['alamat']; ?>"
					 readonly/>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Instansi</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="bidang" name="bidang" value="<?php echo $data_cek['bidang']; ?>"
					 readonly/>
				</div>
			</div>

		</div>
	</form>
</div>

<?php
		}
	$sql = $koneksi->query("SELECT count(nip) as lokal from tb_pegawai");
	while ($data= $sql->fetch_assoc()) {
	
		$lokal=$data['lokal'];
	}
?>

<?php
	$sql = $koneksi->query("SELECT count(nip) as umum from tb_pegawai where bagian='Umum'");
	while ($data= $sql->fetch_assoc()) {
	
		$umum=$data['umum'];
	}
?>

<?php
	$sql = $koneksi->query("SELECT count(nip) as adpem from tb_pegawai where bagian='Adpem'");
	while ($data= $sql->fetch_assoc()) {
	
		$adpem=$data['adpem'];
	}
?>

<?php
	$sql = $koneksi->query("SELECT count(id_pengguna) as boyong from tb_pengguna");
	while ($data= $sql->fetch_assoc()) {
	
		$boyong=$data['boyong'];
	}
?>

<?php
	$sql = $koneksi->query("SELECT count(nip) as Organisasi from tb_pegawai where bagian='Organisasi'");
	while ($data= $sql->fetch_assoc()) {
	
		$Organisasi=$data['Organisasi'];
	}
?>

<?php
	$sql = $koneksi->query("SELECT count(nip) as Program from tb_pegawai where bagian='Program & Keuangan'");
	while ($data= $sql->fetch_assoc()) {
	
		$Program=$data['Program'];
	}
?>

<?php
	$sql = $koneksi->query("SELECT count(nip) as Ekbang from tb_pegawai where bagian='Ekbang'");
	while ($data= $sql->fetch_assoc()) {
	
		$Ekbang=$data['Ekbang'];
	}
?>

<?php
	$sql = $koneksi->query("SELECT count(nip) as Kesra from tb_pegawai where bagian='Kesra'");
	while ($data= $sql->fetch_assoc()) {
	
		$Kesra=$data['Kesra'];
	}
?>

<?php
	$sql = $koneksi->query("SELECT count(nip) as Barjas from tb_pegawai where bagian='Barjas'");
	while ($data= $sql->fetch_assoc()) {
	
		$Barjas=$data['Barjas'];
	}
?>

<?php
	$sql = $koneksi->query("SELECT count(nip) as Pemerintahan from tb_pegawai where bagian='Pemerintahan'");
	while ($data= $sql->fetch_assoc()) {
	
		$Pemerintahan=$data['Pemerintahan'];
	}
?>

<?php
	$sql = $koneksi->query("SELECT count(nip) as Hukum from tb_pegawai where bagian='Hukum'");
	while ($data= $sql->fetch_assoc()) {
	
		$Hukum=$data['Hukum'];
	}
	?>

<!-- bagian Umum -->
<div class="row">
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-primary">
			<div class="inner">
				<h3>
					<?php echo $umum;  ?>
				</h3>

				<p>Bagian Umum</p>
			</div>
			<div class="icon">
				<i class="ion ion-person-add"></i>
			</div>
			<a href="index.php?page=data-umum-sek" class="small-box-footer">Selengkapnya
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>

	<!-- Bagian Adpem -->
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-warning">
			<div class="inner">
				<h3>
					<?php echo $adpem;  ?>
				</h3>

				<p>Bagian Adpem</p>
			</div>
			<div class="icon">
				<i class="ion ion-person-add"></i>
			</div>
			<a href="index.php?page=data-adpem-sek" class="small-box-footer">Selengkapnya
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	

	<!-- Bagian Organisasi -->
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-danger">
			<div class="inner">
				<h3>
					<?php echo $Organisasi;  ?>
				</h3>

				<p>Bagian Organisasi</p>
			</div>
			<div class="icon">
				<i class="ion ion-person-add"></i>
			</div>
			<a href="index.php?page=data-organisasi-sek" class="small-box-footer">Selengkapnya
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<!-- Bagian Program & Keuangan -->
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-success">
			<div class="inner">
				<h3>
					<?php echo $Program;  ?>
				</h3>

				<p>Bagian Program & Keuangan</p>
			</div>
			<div class="icon">
				<i class="ion ion-person-add"></i>
			</div>
			<a href="index.php?page=data-program-sek" class="small-box-footer">Selengkapnya
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>

	<!-- Bagian Ekbang -->
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-primary">
			<div class="inner">
				<h3>
					<?php echo $Ekbang;  ?>
				</h3>

				<p>Bagian Ekbang</p>
			</div>
			<div class="icon">
				<i class="ion ion-person-add"></i>
			</div>
			<a href="index.php?page=data-ekbang-sek" class="small-box-footer">Selengkapnya
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>

	<!-- Bagian Kesra -->
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-warning">
			<div class="inner">
				<h3>
					<?php echo $Kesra;  ?>
				</h3>

				<p>Bagian Kesra</p>
			</div>
			<div class="icon">
				<i class="ion ion-person-add"></i>
			</div>
			<a href="index.php?page=data-kesra-sek" class="small-box-footer">Selengkapnya
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>

	<!-- Bagian Barjas -->
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-danger">
			<div class="inner">
				<h3>
					<?php echo $Barjas;  ?>
				</h3>

				<p>Bagian Barjas</p>
			</div>
			<div class="icon">
				<i class="ion ion-person-add"></i>
			</div>
			<a href="index.php?page=data-barjas-sek" class="small-box-footer">Selengkapnya
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>

	<!-- Bagian Pemerintahan -->
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-success">
			<div class="inner">
				<h3>
					<?php echo $Pemerintahan;  ?>
				</h3>

				<p>Bagian Pemerintahan</p>
			</div>
			<div class="icon">
				<i class="ion ion-person-add"></i>
			</div>
			<a href="index.php?page=data-pemerintahan-sek" class="small-box-footer">Selengkapnya
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	
	<!-- Bagian Hukum -->
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-secondary">
			<div class="inner">
				<h3>
					<?php echo $Hukum;  ?>
				</h3>

				<p>Bagian Hukum</p>
			</div>
			<div class="icon">
				<i class="ion ion-person-add"></i>
			</div>
			<a href="index.php?page=data-hukum-sek" class="small-box-footer">Selengkapnya
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>