<?php
	include "../inc/koneksi.php";
	
	$nip = $_GET['nip'];

	$sql_cek = "SELECT * FROM tb_profil";
	$query_cek = mysqli_query($koneksi, $sql_cek);
	$data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
	{
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>CETAK DATA PEGAWAI</title>
</head>

<body>
	<center>

		<h2>
			<?php echo $data_cek['nama_profil']; ?>
		</h2>
		<h3>
			<?php echo $data_cek['alamat']; ?>
			<hr / size="2px" color="black">

			<?php
			}

			$sql_tampil = "select * from tb_pegawai where nip='$nip'";
			$query_tampil = mysqli_query($koneksi, $sql_tampil);
			$no=1;
			while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
		?>
	</center>

	<center>
		<h4>
			<u>DATA PEGAWAI</u>
		</h4>
	</center>

	<table border="1" cellspacing="0" style="width: 90%" align="center">
		<tbody>
			<tr>
				<td>NIP</td>
				<td>:</td>
				<td>
					<?php echo $data['nip']; ?>
				</td>
				<td rowspan="6" align="center">
					<img src="../foto/<?php echo $data['foto']; ?>" width="150px" />
				</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>
					<?php echo $data['nama']; ?>
				</td>
			</tr>

			<tr>
				<td>NIK</td>
				<td>:</td>
				<td>
					<?php echo $data['nik']; ?>
				</td>
			</tr>

			<tr>
				<td>NPWP</td>
				<td>:</td>
				<td>
					<?php echo $data['npwp']; ?>
				</td>
			</tr>

			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td>
					<?php echo $data['tanggal_lahir']; ?>
				</td>
			</tr>

			<tr>
				<td>Tempat Lahir</td>
				<td>:</td>
				<td>
					<?php echo $data['tempat_lahir']; ?>
				</td>
			</tr>

			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td>
					<?php echo $data['alamat']; ?>
				</td>
			</tr>

			<tr>
				<td>No HP</td>
				<td>:</td>
				<td>
					<?php echo $data['no_hp']; ?>
				</td>
			</tr>

			<tr>
				<td>Pendidikan</td>
				<td>:</td>
				<td>
					<?php echo $data['pendidikan']; ?>
				</td>
			</tr>

			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
					<?php echo $data['email']; ?>
				</td>
			</tr>

			<tr>
				<td>Bagian</td>
				<td>:</td>
				<td>
					<?php echo $data['bagian']; ?>
				</td>
			</tr>

			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>
					<?php echo $data['nama']; ?>
				</td>
			</tr>

			<tr>
				<td>Status</td>
				<td>:</td>
				<td>
					<?php echo $data['status']; ?>
				</td>
			</tr>

			<tr>
				<td>Golongan</td>
				<td>:</td>
				<td>
					<?php echo $data['golongan']; ?>
				</td>
			</tr>

			<tr>
				<td>TMT</td>
				<td>:</td>
				<td>
					<?php echo $data['tmt']; ?>
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td>
					<?php echo $data['alamat']; ?>
				</td>
			</tr>

			<tr>
				<td>Jabatan</td>
				<td>:</td>
				<td>
					<?php echo $data['jabatan']; ?>
				</td>
			</tr>

			<?php } ?>
		</tbody>
	</table>


	<script>
		window.print();
	</script>

</body>

</html>