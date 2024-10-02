<?php
include "inc/koneksi.php";

if (isset($_POST['btnLogin'])) {
  //anti inject sql
  $username = mysqli_real_escape_string($koneksi, $_POST['username']);
  $password = mysqli_real_escape_string($koneksi, $_POST['password']);

  //query login
  $sql_login = "SELECT * FROM tb_pengguna WHERE BINARY username='$username' AND password='$password'";
  $query_login = mysqli_query($koneksi, $sql_login);
  $data_login = mysqli_fetch_array($query_login, MYSQLI_BOTH);
  $jumlah_login = mysqli_num_rows($query_login);


  if ($jumlah_login == 1) {
    session_start();
    $_SESSION["ses_id"] = $data_login["id_pengguna"];
    $_SESSION["ses_nama"] = $data_login["nama_pengguna"];
    $_SESSION["ses_username"] = $data_login["username"];
    $_SESSION["ses_password"] = $data_login["password"];
    $_SESSION["ses_level"] = $data_login["level"];

    $alert = "<script>
    Swal.fire({title: 'Login Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
    }).then((result) => {if (result.value)
      {window.location = 'index.php';}
    })</script>";
  } else {
    $alert = "<script>
    Swal.fire({title: 'Login Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
    }).then((result) => {if (result.value)
      {window.location = 'login.php';}
    })</script>";
  }
}
?>

<style>
  @import url(https://fonts.googleapis.com/css?family=Exo:100,200,400);
  @import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

  body {
    margin: 0;
    padding: 0;
    background: #fff;

    color: #fff;
    font-family: Arial;
    font-size: 12px;
  }

  .body {
    position: fixed;
    top: -20px;
    left: -20px;
    right: -40px;
    bottom: -40px;
    width: auto;
    height: auto;
    background-image: url(kantor.jpeg);
    background-size: cover;
    filter: blur(5px);
    z-index: 0;
  }

  .grad {
    position: absolute;
    top: -20px;
    left: -20px;
    right: -40px;
    bottom: -40px;
    width: auto;
    height: auto;
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(0, 0, 0, 0)), color-stop(100%, rgba(0, 0, 0, 0.65)));
    /* Chrome,Safari4+ */
    z-index: 1;
    opacity: 0.7;
  }

  .header {
    position: absolute;
    top: calc(50% - 35px);
    left: calc(45% - 255px);
    z-index: 2;
  }

  .header div {
    float: left;
    color: #fff;
    font-family: "Exo", sans-serif;
    font-size: 75px;
    font-weight: 200;
  }

  .header div span {
    color: #5379fa !important;
  }

  .login {
    position: fixed;
    top: 50%;
    left: 65%;
    height: 150px;
    width: 350px;
    padding: 10px;
    z-index: 2;
  }

  .login input[type="text"] {
    width: 250px;
    height: 30px;
    background: transparent;
    border: 1px solid rgba(255, 255, 255, 0.6);
    border-radius: 2px;
    color: #fff;
    font-family: "Exo", sans-serif;
    font-size: 16px;
    font-weight: 400;
    padding: 4px;
  }

  .login input[type="password"] {
    width: 250px;
    height: 30px;
    background: transparent;
    border: 1px solid rgba(255, 255, 255, 0.6);
    border-radius: 2px;
    color: #fff;
    font-family: "Exo", sans-serif;
    font-size: 16px;
    font-weight: 400;
    padding: 4px;
    margin-top: 10px;
  }

  .login button[type="submit"] {
    width: 260px;
    height: 35px;
    background: #fff;
    border: 1px solid #fff;
    cursor: pointer;
    border-radius: 2px;
    color: #a18d6c;
    font-family: "Exo", sans-serif;
    font-size: 16px;
    font-weight: 400;
    padding: 6px;
    margin-top: 10px;
  }

  .login input[type="button"]:hover {
    opacity: 0.8;
  }

  .login input[type="button"]:active {
    opacity: 0.6;
  }

  .login input[type="text"]:focus {
    outline: none;
    border: 1px solid rgba(255, 255, 255, 0.9);
  }

  .login input[type="password"]:focus {
    outline: none;
    border: 1px solid rgba(255, 255, 255, 0.9);
  }

  .login input[type="button"]:focus {
    outline: none;
  }

  ::-webkit-input-placeholder {
    color: rgba(255, 255, 255, 0.6);
  }

  ::-moz-input-placeholder {
    color: rgba(255, 255, 255, 0.6);
  }

  .header {
    position: absolute;
    top: calc(35% - 35px);
    left: 300px;
    z-index: 2;
  }

  .logo {
    position: absolute;
    left: 10%;
    top: 30%;
  }

  .bawah {
    width: 250px;
    height: 30px;
    background: transparent;
    border-radius: 2px;
    color: #fff;
    font-family: "Exo", sans-serif;
    font-size: 16px;
    font-weight: 400;
    padding: 4px;
    margin-top: 10px;
  }

  .bawah {
    position: fixed;
    top: calc(45% - 35px);
    left: 300px;
    z-index: 2;
  }

  .setda {
    position: fixed;
    right: 100px  ;
    top: 35px;
    width: 300px;

  }
</style>

<div class="body"></div>
<div class="grad"></div>
<div class="header">
  <div>SKETSA<span></span></div>
</div>
<div class="bawah">
  <p>Sistem Informasi Kepegawaian
    Sekretariat Daerah

  </p>
</div>
<br />
<div class="logo">
  <img src="logo.png" width="150px">
</div>
<div class="setda">
  <img src="setda.png" width="150px">
</div>
<div class="setda">
  <img src="setda.png" width="150px">
</div>
<form action="" method="post">
  <div class="login">
    <input type="text" placeholder="username" name="username" required /><br />
    <input type="password" placeholder="password" name="password" required /><br />
    <button type="submit" name="btnLogin" title="Masuk Sistem">
      <b>Login</b>
    </button>
  </div>
</form>

<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- Alert -->
<script src="plugins/alert.js"></script>

<?php
if (isset($alert)) {
  echo $alert;
}
?>