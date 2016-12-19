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
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Dokuemntasi Halaman Admin Organisasi</title>

	<!-- Google Fonts -->
    <link href="css1/css.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Light Gallery Plugin Css -->
    <link href="plugins/light-gallery/css/lightgallery.css" rel="stylesheet">

    <!-- Preloader Css -->
    <link href="plugins/material-design-preloader/md-preloader.css" rel="stylesheet" />

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
					<li class="active">
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
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
				<ol class="breadcrumb breadcrumb-col-pink">
                      <li><a href="javascript:void(0);"><i class="material-icons">camera</i> Dokumentasi</a></li>
                </ol>			
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Gallery</h2>
							<div>
								<table width="100%">
									<tr>
										<td align="right"><a href="tambahfoto.php"><button  type="button" class="btn bg-cyan waves-effect"><i class="material-icons">photo</i><br>Tambah Foto</button></a></td>
									</tr>
							</table>
							</div>
                        </div>
                        <div class="body">
							<div id="aniimated-thumbnials" class="list-unstyled row clearfix">
							<?php

								require_once 'koneksi/koneksi.php';
								
								  global $link;
								  
								  $query ="SELECT foto FROM foto order by id desc limit 20";
								  $sql = mysqli_query ($link, $query);
								  
								  $i=0;
								  
								  while ($data =  mysqli_fetch_array($sql))

								{
									
									$foto=$data[0];

									
									if ($foto!="")
									{
									
										?>
																<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
																	<a href="gambar/<?php echo "$foto";?>">
																		<img style="width:100%; height:150px;" src="gambar/<?php echo "$foto";?>">
																	</a>
																</div>
										<?php
									}
								}								
							?>
							
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<video width="100%" controls poster="profil/ff9267d98db981ffe9a26ffff2d81cf6.jpg" >
								<source src="video/---jangan cuma koding - YouTube.mp4" type="video/mp4">
								browser anda ttidak di dukung
							</video>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<video width="100%" controls poster="profil/ff9267d98db981ffe9a26ffff2d81cf6.jpg" >
								<source src="video/---jangan cuma koding - YouTube.mp4" type="video/mp4">
								browser anda ttidak di dukung
							</video>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<video width="100%" controls poster="profil/ff9267d98db981ffe9a26ffff2d81cf6.jpg" >
								<source src="video/---jangan cuma koding - YouTube.mp4" type="video/mp4">
								browser anda ttidak di dukung
							</video>
						</div>
								
								
                            </div>							
                        </div>
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

    <!-- Light Gallery Plugin Js -->
    <script src="plugins/light-gallery/js/lightgallery-all.js"></script>

    <!-- Custom Js -->
    <script src="js/pages/medias/image-gallery.js"></script>
    <script src="js/admin.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>