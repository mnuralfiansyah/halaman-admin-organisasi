 <?php
 
 
//Fungsi untuk meng-upload gambar
function UploadImage($img_name){
header("Content-type: image/jpeg");

//direktori gambar
$vdir_upload = "gambar/";
$vfile_upload = $vdir_upload . $img_name;

//Simpan gambar dalam ukuran sebenarnya
move_uploaded_file($_FILES["img"]["tmp_name"], $vfile_upload);

//identitas file asli
$im_src = imagecreatefromjpeg($vfile_upload);
$src_width = imageSX($im_src);
$src_height = imageSY($im_src);



//Simpan dalam versi medium 320 pixel
//set ukuran gambar hasil perubahan
$dst_width = 720;
$dst_height = 540;

//proses perubahan ukuran
$im = imagecreatetruecolor($dst_width,$dst_height);
imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);

//Simpan gambar
$tanggal = date('dmyhms');
imagejpeg($im,$vdir_upload . "$tanggal");

imagedestroy($im_src);
imagedestroy($im);
}
//Upload Gambar
UploadImage($_FILES["img"]["name"]);

 
 
 
 require_once "koneksi/init.php";
 require_once "koneksi/koneksi.php";
 require_once "koneksi/session.php"; 
 if(!$_SESSION['email'])
{
	header("location: login.php");
}

$email=$_SESSION['email'];


  global $link;
 

	 $emailadmin=$_POST['email'];
	 $passwordadmin=$_POST['password'];
	 $namaadmin=$_POST['nama'];
	 $emailadmin=$_POST['email'];
	 $jabatanadmin=$_POST['jabatan'];
	 $fotoadmin=$_FILES['img']['name'];
	 
	 if (!empty(trim($emailadmin)) && !empty(trim($passwordadmin)))
	 {
											
										  
										  $emailadmin = mysqli_real_escape_string ($link, $emailadmin);
										  
										  $query ="SELECT * FROM admin WHERE email='$emailadmin'";
										  
										  if ($result = mysqli_query($link, $query))
										  {
															  if (mysqli_num_rows($result)==0) 
															  {
																 

																		
																		 
																		 //mencegah sql ijection
																		 $emailadmin= mysqli_real_escape_string ($link, $emailadmin);
																		 $passwordadmin= mysqli_real_escape_string ($link, $passwordadmin);
																		 
																		 $passwordadmin = password_hash ($passwordadmin, PASSWORD_DEFAULT); 
																		 $tanggal = date('dmyhms');
																		 
																		 $query = "INSERT INTO admin (id_admin, nama, password, email, jabatan, foto, fotoasli) VALUES ('','$namaadmin', '$passwordadmin', '$emailadmin','$jabatanadmin','$tanggal.jpg','$fotoadmin')";
																		 
																		 
																		 $sql = mysqli_query ($link, $query);
																					
																					if($sql)																					
																							 {
																								

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

														
																									$query1="INSERT INTO aktifitasadmin VALUES ('','$email','Telah menambah $emailadmin dengan nama $namaadmin dengan Jabatan $jabatanadmin pada $hari, $tanggal $jam ')";
																									$sql1= mysqli_query($link, $query1);
																									
																										if($sql1)
																										{
																											header ('location: user.php');
																										}

													
																								//
																								 
																							 } 
																							 
																							 else
																							 {
																								 
																								 echo "gagal memasukkan ke query";
																								 
																							 }
																		 
																  
															  }  
															  
															  else
																  
															  {
																  echo "Sudah Ada";
																	  
															  }
											  
											  
											  
											  
										  }	  
											  else
										  {
											 echo "gagal 3";
										  }
	 }else
	 {
		 echo "tidak boleh kosong";
	 }
 
  
 
 ?>