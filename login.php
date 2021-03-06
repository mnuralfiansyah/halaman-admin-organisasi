<?php
require_once 'koneksi/init.php';
error_reporting(0);
session_start();
if(!empty($_SESSION['email']))
{
	header("location: index.php");
}

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Login Halaman Admin Organisasi</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="css1/css.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="login-page">
<?php include 'eror.php';?>
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">Admin<b>BSB</b></a>
            <small>Login Halaman Admin Organisasi</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" action="login2.php" method="POST">
                    <div class="msg">Sign in to start your session</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="email" placeholder="email@email.com" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="********" required>
							<input type="hidden" name="waktu" value="<?php
													
													
													
													 $hari = date('l');
 
													 if ($hari=='Monday')
													 {
														 $hari = "Senin";
													 }
													 else if ($hari=='Tuesday')
													 {
														 $hari = "Selasa";
													 }
													 else if ($hari=='Wednesday')
													 {
														 $hari = "Rabu";
													 }
													 else if ($hari=='Thursday')
													 {
														 $hari = "Kamis";
													 }
													 else if ($hari=='friday')
													 {
														 $hari = "Jum'at";
													 }
													 else if ($hari=='Saturday')
													 {
														 $hari = "Sabtu";
													 }
													 else if ($hari=='Sunday')
													 {
														 $hari = "Minggu";
													 }
													 $tanggal = date('d/m/Y');
													 $jam= date('h:i:s');
													
													echo "$hari, $tanggal $jam";
													
													?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit" value="submit" Onclick="login">LOGIN</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/examples/sign-in.js"></script>
</body>

</html>
