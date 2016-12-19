<?php
error_reporting(0);
require_once 'koneksi/keuangan.php';
require_once 'koneksi/koneksi.php';
require_once 'koneksi/session.php';
require_once 'koneksi/dokumentasi.php';
//require_once 'eror.php';




	

	if ((!empty($_POST['nama'])) or (!empty($_POST['email'])) or (!empty($_POST['password'])) or (!empty($_POST['passwordbaru'])) or (!empty($_POST['passwordulang'])))
	{
		if (!empty($_POST['img'])) { $img=$_POST['img'];}
		if (!empty($_POST['nama'])) {$nama=$_POST['nama'];}
		if (!empty($_POST['email'])) {$email=$_POST['email'];}	
		if (!empty($_POST['passwordlama'])) {$passwordlama=$_POST['passwordlama'];}	
		if (!empty($_POST['passwordbaru'])) {$passwordbaru=$_POST['passwordbaru'];}	
		if (!empty($_POST['passwordulang'])) {$passwordulang=$_POST['passwordulang'];}		
		
			if (!empty($_FILES['img']['name']))
			{
				$file_max_weight = 20000; //limit the maximum size of file allowed (20Mb)
				$ok_ext = array('jpg','png','gif','jpeg','JPG','JPEG','PNG'); // allow only these types of files
				$destination = 'profil/'; // where our files will be stored

				// PHP sets a global variable $_FILES['file'] which containes all information on the file
				// The $_FILES['file'] is also an array, so to have the file name we're supposed to write $_FILES['file']['name']
				// To shorten that I added the following line. With that I could just do $file['name']
				$file = $_FILES['img'];


				$filename = explode(".", $file["name"]); 


				$file_name = $file['name']; // file original name

				$file_name_no_ext = isset($filename[0]) ? $filename[0] : null; // File name without the extension

				$file_extension = $filename[count($filename)-1];

				$file_weight = $file['size'];

				$file_type = $file['type'];



				// If there is no error
				if( $file['error'] == 0 )
				{
					// check if the extension is accepted
					if( in_array($file_extension, $ok_ext))
					{	

						// check if the size is not beyond expected size

								// rename the file
								$fileNewName = md5( $file_name_no_ext[0].microtime() ).'.'.$file_extension ;


								// and move it to the destination folder
								if( move_uploaded_file($file['tmp_name'], $destination.$fileNewName) )
								{
									//jika bisa upload foto
									
									$sql="UPDATE admin SET foto='$fileNewName' where id_admin='$id_admin'";
									$sql=mysqli_query($link, $sql);
									if ($sql)
									{
										if ((!empty($passwordbaru)) && (!empty($passwordulang)) && (!empty($passwordlama)))
										{
												//if (disini ngecek password yg lama )
												//{
													if ($passwordbaru==$passwordulang)
													{
														$query="UPDATE admin SET nama='$nama', password='$passwordbaru', email='$email' where id_admin='$id_admin'";
														$query=mysqli_query($link, $query);
														if ($query)
														{
															header ('location:profil.php?eror=Berhasil');
														}
														else
														{
															header ('location:profil.php?eror=Gagal upadte Data');
														}
													}
													else
													{
														header ('location:profil.php?eror=pasword tidak sama tapi foto berhasil diganti');
													}
													//$query="UPDATE admin SET nama='$nama',  where id_admin='$id_admin'"
													//header ('location:profil.php');
												//}
												//else
												//{
													//header ('location:profil.php?eror=pasword tidak lama salah');
												//}
										}
										else if ((!empty($passwordbaru)) or (!empty($passwordulang)) or (!empty($passwordlama)))
										{
											header ('location:profil.php?eror=passwordnya harus diisi semua tapi foto berhasil di update');
										}
										else
										{
											$query="UPDATE admin SET nama='$nama', email='$email' where id_admin='$id_admin'";
											$query=mysqli_query($link, $query);
											if ($query)
											{
												header ('location:profil.php?eror=Berhasil');
											}
											else
											{
												header ('location:profil.php?eror=Gagal upadte Data');
											}
										}
												
									}
									else
									{
										header ('location:profil.php?eror=gagal upload foto ke database');
									}
								}
								else
								{
										header ('location:profil.php?eror=gagal upload foto');
								}
					}
				}
			}
			else
			{
				//
				if ((!empty($passwordbaru)) && (!empty($passwordulang)) && (!empty($passwordlama)))
				{
					//if (disini ngecek password yg lama )
												//{
					if ($passwordbaru==$passwordulang)
					{
						$query="UPDATE admin SET nama='$nama', password='$passwordbaru', email='$email' where id_admin='$id_admin'";
						$query=mysqli_query($link, $query);
						if ($query)
						{
							header ('location:profil.php?eror=Berhasil');
						}
						else
						{
							header ('location:profil.php?eror=Gagal upadte Data');
						}
					}
					else
					{
						header ('location:profil.php?eror=pasword tidak sama');
					}
													//$query="UPDATE admin SET nama='$nama',  where id_admin='$id_admin'"
													//header ('location:profil.php');
												//}
												//else
												//{
													//header ('location:profil.php?eror=pasword tidak lama salah');
												//}
				}
				else if ((!empty($passwordbaru)) or (!empty($passwordulang)) or (!empty($passwordlama)))
				{
						header ('location:profil.php?eror=passwordnya harus diisi semua');
				}
				else
				{
						$query="UPDATE admin SET nama='$nama', email='$email' where id_admin='$id_admin'";
						$query=mysqli_query($link, $query);
						if ($query)
						{
							header ('location:profil.php?eror=Berhasil');
						}
						else
						{
							header ('location:profil.php?eror=Gagal upadte Data');
						}
				}
				
				//
			}
	}	//*/
?>
<!--

-->

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Dashboard Halaman Admin Organisasi</title>
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
						<img src="profil/<?php echo "$fotoprofil"; ?>" width="60" height="60" alt="<?php echo "$fotoprofil"; ?>" />
					</a>	
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $nama;?></div> 
                    <div class="email"><?php echo $email;?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="profil.php"><i class="material-icons">person</i>Profile</a></li>
                            <li><a href="logout.php"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="active">
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
        <!-- Right Sidebar -->
    </section>
    <section class="content">
		<center><h2>Halaman Profil</h2></center>
        <center><?php echo $nama;?></center>
		<center><h2><?php require_once 'eror.php';?></h2></center>
		<form action="profil.php" method="post" enctype="multipart/form-data" >
			<table border="0" width="75%" align="center">
				<tr>
					<td align="left" ><img align="center" width="85%" src="profil/<?php echo $fotoprofil; ?>" ><br><input type="file" name="img" /></td>
				</tr>
				<tr align="left">
					<td width="20%" align="left">Nama </td>
					<td width="5%" align="left"> : </td>
					<td width="75%"><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
				</tr><br>
				<tr align="left">
					<td width="20%" align="left">Email </td>
					<td width="5%" align="left"> : </td>
					<td width="75%"><input type="text" name="email" value="<?php echo $email; ?>"></td>
				</tr><br>
				<tr align="left">
					<td width="20%" align="left">password Lama </td>
					<td width="5%" align="left"> : </td>
					<td width="75%"><input type="password" name="passwordlama"></td>
				</tr><br>
				<tr align="left">
					<td width="20%" align="left">password Baru </td>
					<td width="5%" align="left"> : </td>
					<td width="75%"><input type="password" name="passwordbaru"></td>
				</tr><br>
				<tr align="left">
					<td width="20%" align="left">Ulangi Password  </td>
					<td width="5%" align="left"> : </td>
					<td width="75%"><input type="password" name="passwordulang"></td>
				</tr><br>
				<tr align="left">
					<td width="20%" align="left">Jabatan </td>
					<td width="5%" align="left"> : </td>
					<td width="75%"><input type="text" name="jabatan" disabled value="<?php echo $jabatan; ?>"></td>
				</tr><br>
				<tr align="left">
					<td colspan="3" align="left"><Input type="submit" value="Ubah Data"></td>
				</tr><tr></tr>
			</table>
		</form>

		
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

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>
	