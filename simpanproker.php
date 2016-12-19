<?php
error_reporting(0);
require_once 'koneksi/session.php';
require_once 'koneksi/koneksi.php';

$id=$_POST['id']; 
$nama=$_POST['nama']; 
$tujuan=$_POST['tujuan']; 
$jenis=$_POST['jenis']; 




	$query = "UPDATE proker SET nama='$nama', tujuan='$tujuan', jenis='$jenis' WHERE id='$id'";
	$query = mysqli_query($link, $query);
	
	//jika query update sukses
	if($query)
	{
			
		require_once 'koneksi/hari.php';
		$day = $hari.', '.$tanggal.' '.$bulan.' '.$tahun.' '.$jam ;
		$aktifitas="Telah Mengedit Data Proker pada ".$day;
			
		$sql="INSERT INTO aktifitasadmin VALUES ('','$email','$aktifitas')";
		$sql= mysqli_query ($link, $sql);
		
		if ($sql)
		{
					header ('location: programkerja.php?eror=Berhasil');		//Pesan jika proses simpan sukses
		}
		else
		{
					header ('location: editprogramkerja.php?eror=Gagal&id=$id');		//Pesan jika proses simpan sukses
		}
		

		
	}
	else
	{
		
				header ('location: editprogramkerja.php?eror=Gagal sekali&id=$id');		//Pesan jika proses simpan sukses
		
	}
 //*/

 


?>