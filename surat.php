<?php
error_reporting(0);
require_once 'koneksi/init.php';
require_once 'koneksi/session.php';
require_once 'koneksi/dokumentasi.php';
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Surat Halaman Admin Organisasi</title>
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

    <!-- Preloader Css -->
    <link href="plugins/material-design-preloader/md-preloader.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
	
	<!-- JQuery DataTable Css -->
    <link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
	
	
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="md-preloader pl-size-md">
                <svg viewbox="0 0 75 75">
                    <circle cx="37.5" cy="37.5" r="33.5" class="pl-red" stroke-width="10" />
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
                    <a href="prfil/<?php echo "$fotoprofil"; ?>">
						<img src="profil/<?php echo "$fotoprofil"; ?>" width="60" height="60" alt="User" />
					</a>	
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $nama;?></div> 
                    <div class="email"><?php echo $email;?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li><a href="logout.php"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
			<!-- user info-->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li>
                        <a href="index.php">
                            <i class="material-icons">home</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
						<a href="pengurusdankader.php">  <!-- ini dimulainya menu bertingkat 1 -->
                            <i class="material-icons">person</i>
                            <span>Data Pengurus dan Kader</span>
                        </a>
					</li>
					<li class="active">
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
                    &copy; 2016 <a href="javascript:void(0);">Material Design</a>.
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
				<ol class="breadcrumb breadcrumb-col-pink">
                    <li><a href="javascript:void(0);"><i class="material-icons">mail</i> <nsbp>Data Surat Masuk dan Keluar</a></li>
                 </ol>
			</div>
			
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data Surat Masuk dan Keluar
                            </h2>
<?php if ($jabatan=='Administrator')
		{ ?>								
							
                            <div align="right">
								<a href="tambahsurat.php"  ><button  type="button" class="btn bg-cyan waves-effect"><i class="material-icons">mail</i><br>Tambah Surat Masuk / Keluar</button></a>
							</div>
<?php	} ?>	 					
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr align="center">
                                        <th>No</th>
                                        <th>Tanggal Surat Masuk</th>
                                        <th>No Surat</th>
										<th>Dari</th>
                                        <th>Perihal</th>
<?php if (($jabatan=='Administrator') || ($jabatan=='super admin'))
		{ ?>										
										<th></th>
										<th></th>
										
<?php 	} ?>											
                                    </tr>
                                </thead>
								<tbody>
								
<?php

require_once 'koneksi/init.php';

	  global $link;
	  
	  $query ="SELECT * FROM surat";
	  $sql = mysqli_query ($link, $query);
	  $i=0;
	  
	  while ($data =  mysqli_fetch_array($sql))

{
	
	$i++;
	$id=$data['id'];
	$tanggal=$data['tanggal'];
	$no=$data['no'];
	$jenis=$data['jenis'];
	$perihal=$data['perihal'];	
?>								
								
                                    <tr>
                                        <td align="left"><?php echo "$i."; ?></td>
                                        <td><?php echo "$tanggal"; ?></td>
                                        <td><?php echo "$no"; ?></td>
                                        <td><?php echo "$jenis"; ?></td>
										<td><?php echo "$perihal"; ?></td>
<?php if (($jabatan=='Administrator') || ($jabatan=='super admin'))
		{ ?>
										<td>
											<a href="editsurat.php?id=<?php echo "$id";?>"><button type="button" class="btn bg-blue waves-effect"><i class="material-icons">edit</i></button></a>
										</td>
										<td>
											<a href="deletesurat.php?id=<?php echo "$id";?>"><button type="button" class="btn bg-red waves-effect"><i class="material-icons">delete</i></button></a>
										</td>
											
<?php	}
		 ?>
                                    </tr>
									
                                
								
<?php
}
?>								
							</tbody>
                            </table>
                        </div>
                    </div>
                </div>

            <!-- #END# Basic Examples -->

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

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>