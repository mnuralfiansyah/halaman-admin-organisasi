<?php
$id=$_GET['id'];
?>


<?php
require_once 'koneksi/init.php';
require_once 'koneksi/session.php';


if(!$_SESSION['email']){
header("location: login.php");
}

?>

<?php

 
	  global $link;
	  
	  $id = mysqli_real_escape_string($link, $id);
	  
	  $query ="SELECT * FROM anggota WHERE id='$id'";
	  $sql = mysqli_query ($link, $query);

	  
	  while ($data =  mysqli_fetch_array($sql))
	  {
		  $nama=$data['nama'];
		  $tgl=$data['tgl_lhr'];
		  $alamat=$data['alamat'];
		  $telpon=$data['telpon'];
		  $status=$data['status'];		  
		  $jabatan=$data['amanah'];
		  $keterangan=$data['keterangan'];
		  $kelamin=$data['jns_klmn'];
		  $email=$data['email'];
		  $foto=$data['foto'];
	
	  }
?>	 	  

 
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Edit Anggota Halaman Admin Organisasi</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <!-- Google Fonts -->
    <link href="css1/css.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Preloader Css -->
    <link href="plugins/material-design-preloader/md-preloader.css" rel="stylesheet" />

    <!-- Sweet Alert Css -->
    <link href="plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="md-preloader pl-size-md">
                <svg viewbox="0 0 75 75">
                    <circle cx="37.5" cy="37.5" r="33.5" class="pl-red" stroke-width="4" />
                </svg>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.php">Halaman Admin Organisasi</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
           <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <a href="profil/<?php echo "$fotoprofil"; ?>">
						<img src="profil/<?php echo "$fotoprofil"; ?>" width="60" height="60" alt="User" />
					</a>	
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo "$nama";?></div>
                    <div class="email"><?php echo "$email";?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
           <!-- Menu -->
           <div class="menu">
                <ul class="list">
                    
                        <a href="index.php">
                            <i class="material-icons">home</i>
                            <span>Dashboard</span>
                        </a>
                    
                    <li class="active">
						<a href="pengurusdankader.php">  <!-- ini dimulainya menu bertingkat 1 -->
                            <i class="material-icons">person</i>
                            <span>Data Pengurus dan Kader</span>
                        </a>
					</li>
					<li>
						<a href="surat.php">  <!-- ini dimulainya menu bertingkat 3 -->
								<i class="material-icons">mail</i>
                            <span class="active">Surat Masuk Dan Keluar</span>
						</a>
					</li>
					<li>
						<a href="programkerja.php">  <!-- ini dimulainya menu bertingkat 2 -->
								<i class="material-icons">bookmark</i>
                            <span>Program Kerja</span>
                        </a>
					</li>	
					<li>
						<a href="dokumentasi.php">  <!-- ini dimulainya menu bertingkat 3 -->
								<i class="material-icons">camera</i>
                            <span class="active">Dokumentasi</span>
						</a>
					</li>
					
					<a href="keuangan.php">  <!-- ini dimulainya menu bertingkat 4 -->
                            <i class="material-icons">$</i>
                            <span>Keuangan</span>
                    </a>
					


<?php // 

if ($jabatan=='Administrator')

{
?>
					<a href="user.php">  <!-- ini dimulainya menu bertingkat 5 -->
                            <i class="material-icons">person</i>
                            <span>User</span>
                    </a>
<?php					
}	
?>					
					<a href="logout.php">  <!-- ini dimulainya menu bertingkat 6 -->
                            <i class="material-icons">input</i>
                            <span>Logout</span>
                    </a>
				</ul>	
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2016 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.3
                </div>
            </div>
            <!-- #Footer -->
        </aside>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
            </div>
            <!-- Horizontal Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Edit Anggota
                            </h2>
                        </div>
                        <div class="body">
                            <form class="form-horizontal" method="POST" action="simpananggota.php">
							
							
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Nama</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="nama" id="email_address_2" class="form-control" value="<?php echo "$nama";?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Tanggal Lahir</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="tgl" id="email_address_2" class="form-control" value="<?php echo "$tgl"; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Alamat</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="alamat" id="email_address_2" class="form-control" value="<?php  echo "$alamat"; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Telpon</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="telpon" id="email_address_2" class="form-control" value="<?php echo "$telpon";?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
									<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
										<label for="email_address_2">Status</label>
									</div>
												<div class="body">
													<div class="demo-radio-button">
														<input name="status" value="pengurus" type="radio" id="radio_1" <?php if ($status=='pengurus') { echo "checked"; }?> />
														<label for="radio_1">Pengurus</label>
														<input name="status" value="kader"type="radio" id="radio_2" <?php if ($status=='kader') { echo "checked"; }?>/>
														<label for="radio_2">Kader</label>
													</div>
												</div>	
								</div>	
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Jabatan</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="jabatan" id="email_address_2" class="form-control" value="<?php echo "$jabatan";?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Keterangan</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="keterangan" id="email_address_2" class="form-control" value="<?php echo "$keterangan";?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<div class="row clearfix">
									<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
										<label for="email_address_2">Jenis Kelamin</label>
									</div>
												<div class="body">
													<div class="demo-radio-button">
														<input name="kelamin" value="laki-laki" type="radio" id="radio_3" <?php if ($kelamin=='laki-laki') { echo "checked"; }?> />
														<label for="radio_3">Laki-Laki</label>
														<input name="kelamin" value="perempuan" type="radio" id="radio_4" <?php if ($kelamin=='perempuan') { echo "checked"; }?>  />
														<label for="radio_4">Perempuan</label>
													</div>
												</div>	
								</div>	
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Email</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="email" id="email_address_2" class="form-control" value="<?php echo "$email";?>">
                                            </div>
                                        </div>
                                    </div>
									<div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="hide">
                                            <div class="hide">
                                                <input type="text" name="id" id="email_address_2" class="form-control" value="<?php echo "$id";?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                         <button type="submit" class="btn btn-primary m-t-15 waves-effect">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Horizontal Layout -->
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Jquery Validation Plugin Css -->
    <script src="plugins/jquery-validation/jquery.validate.js"></script>

    <!-- JQuery Steps Plugin Js -->
    <script src="plugins/jquery-steps/jquery.steps.js"></script>

    <!-- Sweet Alert Plugin Js -->
    <script src="plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/forms/form-validation.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>