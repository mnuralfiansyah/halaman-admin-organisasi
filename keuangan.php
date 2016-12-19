<?php
require_once 'koneksi/init.php';
require_once 'koneksi/session.php';
require_once 'koneksi/keuangan.php';
require_once 'koneksi/hari.php';
error_reporting(0);
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Keuangan Halaman Admin Organisasi</title>
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
                    <a href="profil/<?php echo "$fotoprofil"; ?>">
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
					<li class="active">
						<a href="keuangan.php">  <!-- ini dimulainya menu bertingkat 4 -->
								<i class="material-icons">$</i>
								<span>Keuangan</span>
						</a>
					</li>	
					


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
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
				<ol class="breadcrumb breadcrumb-col-pink">
                    <li><a href="javascript:void(0);"><i class="material-icons">$</i> <nsbp>Keuangan</a></li>
                </ol>				
            </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
<?php if (($jabatan=='Administrator') or ($jabatan=='Bendahara'))
		{ ?>								
							
                            <div align="right">
								<a href="tambahkeuangan.php"  ><button  type="button" class="btn bg-cyan waves-effect"><i class="material-icons">$</i><br>Tambah Pemasukan/Pemasukan</button></a>
							</div>
<?php	} ?>	 					
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
										<th>Tanggal</th>
                                        <th>Pemasukan</th>
                                        <th>Pengeluaran</th>
                                        <th>Keterangan</th>	
<?php if (($jabatan=='Administrator') or ($jabatan=='Bendahara'))
		{ ?>								
										<th></th>
<?php	} ?>										
                                    </tr>
                                </thead>
								<tbody>
								
<?php

$query2 ="SELECT * FROM keuangan order by id desc";
	  $sql2 = mysqli_query ($link, $query2);
	  $i=0;
	  
	  while ($data2 =  mysqli_fetch_array($sql2))

{
	$i++;
	$id=$data2[0];
	$tanggal=$data2[1];
	$pemasukan=$data2[2];
	$pengeluaran=$data2[3];
	$keterangan=$data2[4];	

	
?>								
								
                                    <tr>
                                        <td align="left" width="5%"><?php echo "$i."; ?></td>
										<td align="left" width="5%"><?php echo "$tanggal."; ?></td>
										<td align="right" width="15%"><?php if ($pemasukan!=0){ echo "Rp. " .number_format($pemasukan,2,",",".") ;} else {echo "-";}?></td>
										<td align="right" width="15%"><?php if ($pengeluaran!=0){ echo "Rp." .number_format($pengeluaran,2,",",".") ;} else {echo "-";}?></td>
										<td align="left" width="60%"> <?php echo "$keterangan";?></td>
<?php if (($jabatan=='Administrator') or ($jabatan=='Bendahara'))
		{ ?>								
										<td width="5%">Edit</td>
<?php	} ?>										
                                    </tr>
									
                           
								
<?php
}
?>							
							</tbody>
							<tr>
								<td colspan="4" align="center">Saldo Kas Bulan <?php echo "$bulan";?></td>
								<td align="right"><?php echo "Rp." .number_format($saldo,2,",","."); ?></td>
<?php if (($jabatan=='Administrator') or ($jabatan=='Bendahara'))
		{ 								
						echo	"<td></td>";
		}
?>		
							</tr>
                            </table>
                        </div>
                    </div>
                </div>
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