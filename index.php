<?php
if (isset($_SESSION['sukses'])) {
  echo "<script>alert('" . $_SESSION['sukses'] . "');</script>";
  unset($_SESSION['sukses']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Login Sistem Informasi Kearsipan Digital</title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <link rel="icon" href="assets/img/icon.ico" type="image/x-icon" />

  <!-- Fonts and icons -->
  <script src="assets/js/plugin/webfont/webfont.min.js"></script>
  <script>
    WebFont.load({
      google: {
        "families": ["Lato:300,400,700,900"]
      },
      custom: {
        "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
        urls: ['assets/css/fonts.min.css']
      },
      active: function() {
        sessionStorage.fonts = true;
      }
    });
  </script>
  <script>
    addEventListener("load", function() {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>

  <!-- CSS Files -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/atlantis.css">
</head>

<body class="login">
  <div class="wrapper wrapper-login wrapper-login-full p-0">
    <div class="login-aside w-50 d-flex flex-column align-items-center justify-content-center text-center bg-secondary-gradient">
      <h1 class="title fw-bold text-white mb-3">SIKD Apps</h1>
      <p class="subtitle text-white op-7">Sistem Informasi Kearsipan Digital SMA Negeri 2 Banjar</p>
    </div>
    <div class="login-aside w-50 d-flex align-items-center justify-content-center bg-white">
      <div class="container container-login container-transparent animated fadeIn">
        <h3 class="text-center">Login SIKD Apps</h3>
        <p class="text-left"><small>Masukkan NIP (Pegawai ASN) atau NIK (Pegawai Non ASN) dan Password untuk dapat mengakses Aplikasi</small></p>
        <?php
        // Periksa apakah ada alert yang dikirim dari proses login
        if (isset($_GET['alert'])) {
          $alert = $_GET['alert'];
          if ($alert == 'gagal') {
            echo '<div class="alert alert-danger" role="alert">Data yang anda masukan tidak sesuai!</div>';
          }
        }
        ?>
        <form action="validasi.php" method="post">
          <div class="login-form">
            <div class="form-group">
              <label for="username" class="placeholder"><b>NIP / NIK</b></label>
              <input id="username" name="username" placeholder="NIP / NIK" type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="password" class="placeholder"><b>Password</b></label>
              <a href="reset.php" class="link float-right">Forget Password ?</a>
              <div class="position-relative">
                <input id="password" name="password" placeholder="**********" type="password" class="form-control" required>
                <div class="show-password">
                  <i class="icon-eye"></i>
                </div>
              </div>
            </div>
            <div class="form-group form-action-d-flex mb-3">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="rememberme">
                <label class="custom-control-label m-0" for="rememberme">Remember Me</label>
              </div>
              <button type="submit" class="btn btn-secondary col-md-5 float-right mt-3 mt-sm-0 fw-bold">Sign In</button>
            </div>
            <div class="login-account">
              <span class="msg">Login sebagai Administrator atau Validator ?</span><br>
              <a href="#" id="show-signup" class="link">Klik Disini</a>
            </div>
            <br>
            <div class="singin-option pt-40">
              <p class="text-sm text-medium text-center text-gray">
                Copyright ©
                <script>
                  document.write(new Date().getFullYear());
                </script> SMA Negeri 2 Banjar. All Right Reserved <br> Build Version 24.7.2
              </p>
            </div>
          </div>
        </form>
      </div>
      <div class="container container-signup container-transparent animated fadeIn">
        <h3 class="text-center">Login Aplikasi</h3>
        <form action="cek_ops.php" method="post">
          <div class="login-form">
            <div class="form-group">
              <label for="username" class="placeholder"><b>Email</b></label>
              <input id="username" name="username" placeholder="Email" type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="akses" class="placeholder"><b>Level Akses</b></label>
              <select class="form-control" name="akses" required="required">
                <option value="petugas"> Petugas </option>
                <option value="admin"> Administrator </option>
              </select>
            </div>
            <div class="form-group">
              <label for="password" class="placeholder"><b>Password:</b></label>
              <div class="position-relative">
                <input id="password" name="password" placeholder="**********" type="password" class="form-control" required>
                <div class="show-password">
                  <i class="icon-eye"></i>
                </div>
              </div>
            </div>
            <div class="form-group form-action-d-flex mb-3">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="rememberme">
                <label class="custom-control-label m-0" for="rememberme">Remember Me</label>
              </div>
              <button type="submit" class="btn btn-secondary col-md-5 float-right mt-3 mt-sm-0 fw-bold">Sign In</button>
            </div>
            <div class="login-account">
              <span class="msg">Login sebagai Administrator atau Validator ?</span><br>
              <a href="index.php" class="link">Klik Disini</a>
            </div>
            <br>
            <div class="singin-option pt-40">
              <p class="text-sm text-medium text-center text-gray">
                Copyright ©
                <script>
                  document.write(new Date().getFullYear());
                </script> SMA Negeri 2 Banjar. All Right Reserved <br> Build Version 24.7.2
              </p>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="assets/js/core/jquery.3.2.1.min.js"></script>
  <script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/atlantis.min.js"></script>
</body>

</html>