<?php
error_reporting(0);

require_once 'koneksi/session.php';
require_once 'koneksi/koneksi.php';

$namaadmin=$_POST['nama'];
$jabatanadmin=$_POST['jabatan'];
$emailadmin=$_POST['email'];
//$foto=$_POST['foto']; echo "$foto";


?> 

<?php

	global $link;
	
	$query = "INSERT INTO admin VALUES ('','$namaadmin','$passwordadmin','$emailadmin','$jabatanadmin','$fotoadmin')";
	$sql = mysqli_query($link, $query);
	
	//jika query update sukses
	if($sql)
	{
		global $link;
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

		
		$query1="INSERT INTO aktifitasadmin VALUES ('','$email','Telah menambah $emailadmin dengan nama $namaadmin pada $hari, $tanggal $jam dengan Jabatan $jabatanadmin')";
		$sql1= mysqli_query($link, $query1);
																										
		if($sql1)
		{
			//header ('location:user.php');		//Pesan jika proses simpan sukses
			echo "$email ini email <br> $emailadmin ini emailadmin <br> $";
		}
		else
		{
			echo "gagal admin";
		}
	}
	else
	{
		echo 'Gagal menyimpan data' ;		//Pesan jika proses simpan gagal	
	}
 

 


?>