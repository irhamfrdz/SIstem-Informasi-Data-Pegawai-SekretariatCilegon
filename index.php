<?php
    //Mulai Sesion
    session_start();
    if (isset($_SESSION["ses_username"])==""){
	header("location: login.php");
    
    }else{
      $data_id = $_SESSION["ses_id"];
      $data_nama = $_SESSION["ses_nama"];
      $data_user = $_SESSION["ses_username"];
	  $data_level = $_SESSION["ses_level"];
    }

    //KONEKSI DB
	include "inc/koneksi.php";
	
	$sql = $koneksi->query("SELECT * from tb_profil");
	while ($data= $sql->fetch_assoc()) {
	
	$nama=$data['nama_profil'];
	}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sketsa</title>
	<link rel="icon" href="dist/img/logo.png">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="dist/css/adminlte.min.css">
	<!-- Select2 -->
	<link rel="stylesheet" href="plugins/select2/css/select2.min.css">
	<link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<!-- Alert -->
	<script src="plugins/alert.js"></script>
</head>

<body class="hold-transition sidebar-mini">
	<!-- Site wrapper -->
	<div class="wrapper">
		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-blue navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#">
						<i class="fas fa-bars text-white"></i>
					</a>
				</li>

			</ul>

			<!-- SEARCH FORM -->
			<ul class="navbar-nav ml-auto">

				<li class="nav-item d-none d-sm-inline-block">
					<a href="index.php" class="nav-link">
						<font color="white">
							<b>
								<?php echo $nama; ?>
							</b>
						</font>
					</a>
				</li>
			</ul>

		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="index.php" class="brand-link">
				<img src="logo.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
				<span class="brand-text"> SKETSA</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user (optional) -->
				<div class="user-panel mt-2 pb-2 mb-2 d-flex">
					<div class="image">
						<img src="dist/img/user.png" class="img-circle elevation-1" alt="User Image">
					</div>
					<div class="info">
						<a href="index.php" class="d-block">
							<?php echo $data_nama; ?>
						</a>
						<span class="badge badge-success">
							<?php echo $data_level; ?>
						</span>
					</div>
				</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

						<!-- Level  -->
						<?php
						if ($data_level=="Administrator"){
						?>
						<li class="nav-item">
							<a href="index.php" class="nav-link">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>
									Dashboard
								</p>
							</a>
						</li>


						<li class="nav-item">
							<a href="?page=data-pegawai" class="nav-link">
								<i class="nav-icon far fa fa-users"></i>
								<p>
									Data Utama
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="?page=data-uraian" class="nav-link">
								<i class="nav-icon far fa fa-users"></i>
								<p>
									Uraian Tugas
								</p>
							</a>
						</li>

							<li class="nav-item">
							<a href="?page=data-user" class="nav-link">
								<i class="nav-icon far fa fa-users"></i>
								<p>
									Kelola Pengguna
								</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="?page=data-nominatif" class="nav-link">
								<i class="nav-icon far fa fa-users"></i>
								<p>
									Nominatif Bagian
								</p>
							</a>
						</li>


						<li class="nav-header">Setting</li>
						<li class="nav-item">
							<a href="?page=data-profil" class="nav-link">
								<i class="nav-icon far fa fa-flag"></i>
								<p>
									Profil Instansi
								</p>
							</a>
						</li>


						<?php
          				} elseif($data_level=="Pengguna"){
          				?>

						<li class="nav-item">
							<a href="index.php" class="nav-link">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>
									Dashboard
								</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="?page=data-pegawai-sek" class="nav-link">
								<i class="nav-icon far fa fa-users"></i>
								<p>
									Data Utama
								</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="?page=data-uraian-sek" class="nav-link">
								<i class="nav-icon far fa fa-users"></i>
								<p>
									Data Uraian Tugas
								</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="?page=data-nominatif-sek" class="nav-link">
								<i class="nav-icon far fa fa-users"></i>
								<p>
									Nominatif Bagian
								</p>
							</a>
						</li>



						<li class="nav-header">Setting</li>

						<?php
							}
						?>

						<li class="nav-item">
							<a onclick="return confirm('Apakah anda yakin akan keluar ?')" href="logout.php" class="nav-link">
								<i class="nav-icon far fa-circle text-danger"></i>
								<p>
									Logout
								</p>
							</a>
						</li>

				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
			</section>

			<!-- Main content -->
			<section class="content">
				<!-- /. WEB DINAMIS DISINI ############################################################################### -->
				<div class="container-fluid">

					<?php 
      if(isset($_GET['page'])){
          $hal = $_GET['page'];
  
          switch ($hal) {
              //Klik Halaman Home Pengguna
              	case 'admin':
                  include "home/admin.php";
                  break;
				case 'sekretaris':
                  include "home/sekretaris.php";
				  break;


				//Asrama
				case 'data-pegawai':
					include "admin/pegawai/data_pegawai.php";
					break;
				case 'add-pegawai':
					include "admin/pegawai/add_pegawai.php";
					break;
				case 'edit-pegawai':
					include "admin/pegawai/edit_pegawai.php";
					break;
				case 'del-pegawai':
					include "admin/pegawai/del_pegawai.php";
					break;
				case 'view-pegawai':
					include "admin/pegawai/view_pegawai.php";
					break;

				//Profil
				case 'data-profil':
					include "admin/profil/data_profil.php";
					break;
				case 'edit-profil':
					include "admin/profil/edit_profil.php";
					break;

				//Uraian
				case 'data-uraian':
					include "admin/uraian/data_uraian.php";
					break;
				case 'add-uraian':
					include "admin/uraian/add_uraian.php";
					break;
				case 'del-uraian':
					include "admin/uraian/del_uraian.php";
					break;
				case 'edit-uraian':
					include "admin/uraian/edit_uraian.php";
					break;
				case 'view-uraian':
					include "admin/uraian/view_uraian.php";
					break;

							//user
				case 'data-user':
					include "admin/user/data_user.php";
					break;
				case 'add-user':
					include "admin/user/add_user.php";
					break;
				case 'del-user':
					include "admin/user/del_user.php";
					break;
				case 'edit-user':
					include "admin/user/edit_user.php";
					break;



				//Data pegawai Sekertaris
				case 'data-pegawai-sek':
					include "sek/pegawai/data_pegawai.php";
					break;

					//Data Uraian Sekertaris
				case 'data-uraian-sek':
					include "sek/uraian/data_uraian.php";
					break;


				//Data nominatif
				case 'data-nominatif':
					include "admin/nominatif/data_nominatif.php";
					break;

				case 'data-nominatif-sek':
					include "sek/nominatif/data_nominatif.php";
					break;
					
				

				//Data Selengkapnya
				case 'data-umum':
					include "admin/selengkapnya/data_umum.php";
					break;

				case 'data-adpem':
					include "admin/selengkapnya/data_adpem.php";
					break;
				
				case 'data-organisasi':
					include "admin/selengkapnya/data_organisasi.php";
					break;
				
				case 'data-program':
					include "admin/selengkapnya/data_program.php";
					break;

				case 'data-ekbang':
					include "admin/selengkapnya/data_ekbang.php";
					break;
				
				case 'data-kesra':
					include "admin/selengkapnya/data_kesra.php";
					break;

				case 'data-barjas':
					include "admin/selengkapnya/data_barjas.php";
					break;

				case 'data-pemerintahan':
					include "admin/selengkapnya/data_pemerintahan.php";
					break;

				case 'data-hukum':
					include "admin/selengkapnya/data_hukum.php";
					break;

				case 'data-pns':
					include "admin/selengkapnya/data_pns.php";
					break;

				case 'data-tkk':
					include "admin/selengkapnya/data_tkk.php";
					break;
				
				case 'data-thl':
					include "admin/selengkapnya/data_thl.php";
					break;
				
				case 'data-ob':
					include "admin/selengkapnya/data_ob.php";
					break;
				
				case 'data-pamdal':
					include "admin/selengkapnya/data_pamdal.php";
					break;

				case 'data-prt':
					include "admin/selengkapnya/data_prt.php";
					break;

				//Data Selengkapnya pengguna
				case 'data-umum-sek':
					include "sek/selengkapnya/data_umum_sek.php";
					break;

				case 'data-adpem-sek':
					include "sek/selengkapnya/data_adpem_sek.php";
					break;
				
				case 'data-organisasi-sek':
					include "sek/selengkapnya/data_organisasi_sek.php";
					break;
				
				case 'data-program-sek':
					include "sek/selengkapnya/data_program_sek.php";
					break;

				case 'data-ekbang-sek':
					include "sek/selengkapnya/data_ekbang_sek.php";
					break;
				
				case 'data-kesra-sek':
					include "sek/selengkapnya/data_kesra_sek.php";
					break;

				case 'data-barjas-sek':
					include "sek/selengkapnya/data_barjas_sek.php";
					break;

				case 'data-pemerintahan-sek':
					include "sek/selengkapnya/data_pemerintahan_sek.php";
					break;

				case 'data-hukum-sek':
					include "sek/selengkapnya/data_hukum_sek.php";
					break;

				case 'data-pns-sek':
					include "sek/selengkapnya/data_pns.php";
					break;

				case 'data-tkk-sek':
					include "sek/selengkapnya/data_tkk.php";
					break;

				case 'data-thl-sek':
					include "sek/selengkapnya/data_thl.php";
					break;

				case 'data-prt-sek':
					include "sek/selengkapnya/data_prt.php";
					break;

				case 'data-ob-sek':
					include "sek/selengkapnya/data_ob.php";
					break;

				case 'data-pamdal-sek':
					include "sek/selengkapnya/data_pamdal.php";
					break;



				

		

				
				
				







			
              //default
              default:
                  echo "<center><h1> ERROR !</h1></center>";
                  break;    
          }
      }else{
        // Auto Halaman Home Pengguna
          if($data_level=="Administrator"){
              include "home/admin.php";
              }
          elseif($data_level=="Pengguna"){
              include "home/sekretaris.php";
              }
          }
    ?>

				</div>
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<footer class="main-footer">
			<div class="float-right d-none d-sm-block">
				Copyright &copy;
				<a target="_blank" href="#">
					<strong> Sekertariat Daerah Cilegon</strong>
				</a>
				All rights reserved.
			</div>
			<b>Created 2022</b>
		</footer>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<!-- jQuery -->
	<script src="plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- Select2 -->
	<script src="plugins/select2/js/select2.full.min.js"></script>
	<!-- DataTables -->
	<script src="plugins/datatables/jquery.dataTables.js"></script>
	<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
	<!-- AdminLTE App -->
	<script src="dist/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="dist/js/demo.js"></script>
	<!-- page script -->
	<script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
	<script>
		$(function() {
			$("#example1").DataTable();
			$('#example2').DataTable({
				paging: true,
				lengthChange: false,
				searching: false,
				ordering: true,
				info: true,
				autoWidth: false,
			});
		});
	</script>

	<script>
		$(function() {
			//Initialize Select2 Elements
			$('.select2').select2()

			//Initialize Select2 Elements
			$('.select2bs4').select2({
				theme: 'bootstrap4'
			})
		})
	</script>

</body>

</html>