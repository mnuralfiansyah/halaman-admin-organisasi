 <?php
error_reporting(0);
require_once 'koneksi/session.php';
require_once 'koneksi/dokumentasi.php';
require_once 'koneksi/koneksi.php';

if ($jabatan!='Administrator')
{
	header ('location:index.php');
}
	

$eror=$_POST['eror'];
$buton=$_POST['buton'];


global $link;
								  
$query ="SELECT * FROM admin WHERE email='$emailsession'";
$sql = mysqli_query ($link, $query);
$data =  mysqli_fetch_array($sql);
	$idadmin=$data['id_admin'];
	$namaadmin=$data['nama'];
	$emailadmin=$data['email'];
	$jabatanadmin=$data['jabatan'];
	$foto1=$data['foto'];
?>

 <!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>User Halaman Admin Organisasi</title>
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
	<link href="plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />

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
						<img src="profil/<?php echo "$fotoprofil"; ?>" width="25%"  alt="User" />
					</a>	
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo "$nama"; ?></div> 
                    <div class="email"><?php echo "$email"; ?></div>
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
					
					<a href="keuangan.php">  <!-- ini dimulainya menu bertingkat 4 -->
                            <i class="material-icons">$</i>
                            <span>Keuangan</span>
                    </a>
					<li class="active">
					<a href="user.php">  <!-- ini dimulainya menu bertingkat 5 -->
                            <i class="material-icons">person</i>
                            <span>User</span>
                    </a>	
					</li>
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
                                <li><a href="javascript:void(0);"><i class="material-icons">person</i>User</a></li>
                            </ol>
				<h2>As'salamualaikum <?php echo "$namaadmin";?></h2>
            </div>
			
			<?php
if ($eror!='')
{
	if ($buton==1)
	{
?>		
	<div class="alert alert-success">

<?php	
	}
	else
	{
?>		
	<div class="alert alert-danger">

<?php		
	}
?>	
				<span><?php echo "$eror";?></span></div>

<?php	
}														
?>				
			<!-- Hover Rows -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				

				
				
                    <div class="card">
                        <div class="header">
                            <ul class="header-dropdown m-r--5"></ul>
<?php if ($jabatan=='Administrator')
{ ?>					<div>			
							<table width="100%">
								<tr>
									<td width="10%" align="left"><a href="aktifitasadmin.php"  ><button  type="button" class="btn bg-cyan waves-effect"><i class="material-icons">mail</i><br>Aktifitas User</button></a></td>
									<td width="10%" align="left"><a href="catatanlogin.php"  ><button  type="button" class="btn bg-cyan waves-effect"><i class="material-icons">mail</i><br>Catatan Login</button></a></td>
									<td align="right"><a href="tambahadmin.php"  ><button  type="button" class="btn bg-cyan waves-effect"><i class="material-icons">add_person</i><br>Tambah Anggota</button></a></td>
								</tr>
							</table>
						</div>	
<?php	} ?>	
			
							
                        </div>
						
	
						
						
                        <div class="body table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
										<th>Amanah</th>
										<th> </th>
										<!--<th>Status</th>-->
                                    </tr>
                                </thead>
                                <tbody>
                                    
<?php 
require_once 'koneksi/koneksi.php';
								
global $link;
								  
$query ="SELECT * FROM admin";
$sql = mysqli_query ($link, $query);
								  
$i=0;
								  
while ($data =  mysqli_fetch_array($sql))

{
	$i++;
	$idadmin=$data['id_admin'];
	$namaadmin=$data['nama'];
	$emailadmin=$data['email'];
	$jabatanadmin=$data['jabatan'];
	
	
?> 									
									<tr>
                                        <th><?php echo "$i"; ?></th>
                                        <td><?php echo "$namaadmin"; ?></td>
                                        <td><?php echo "$emailadmin"; ?></td>
										<td><?php echo "$jabatanadmin"; ?></td>
										<td>
											<a href="deleteadmin.php?id=<?php echo "$idadmin"; ?>"><button type="button" class="btn btn-danger waves-effect">Hapus</button></a>
											<a href="aktifitasadmin.php?id=<?php echo "$idadmin"; ?>"><button type="button" class="btn btn-success waves-effect">Aktifitas</button></a>
				
										
<?php
}										

?>									
									
									
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            <!-- #END# Hover Rows -->
            </div>
			
			
            <div class="row clearfix">
				<div class="row clearfix"></div>
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

    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>
	<script src="js/pages/forms/basic-form-elements.js"></script>
	<script src="plugins/momentjs/moment.js"></script>
	<script src="plugins/autosize/autosize.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>
