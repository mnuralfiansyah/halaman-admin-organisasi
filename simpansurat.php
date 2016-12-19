<?php
error_reporting(0);
require_once 'koneksi/session.php';
require_once 'koneksi/koneksi.php';

$id=$_POST['id']; 
$tanggal=$_POST['tanggal']; 
$no=$_POST['no']; 
$jenis=$_POST['jenis']; 
$perihal=$_POST['perihal']; 




	$query = "UPDATE surat SET tanggal='$tanggal', no='$no', jenis='$jenis', perihal='$perihal' WHERE id='$id'";
	$query = mysqli_query($link, $query);
	
	//jika query update sukses
	if($query)
	{
			
		require_once 'koneksi/hari.php';
		$day = $hari.', '.$tanggal.' '.$bulan.' '.$tahun.' '.$jam ;
		$aktifitas="Telah Mengedit Data Surat pada ".$day;
			
		$sql="INSERT INTO aktifitasadmin VALUES ('','$email','$aktifitas')";
		$sql= mysqli_query ($link, $sql);
		
		if ($sql)
		{
					header ('location: surat.php?eror=Berhasil');		//Pesan jika proses simpan sukses
		}
		else
		{
					header ('location: editsurat.php?eror=Gagal&id=$id');		//Pesan jika proses simpan sukses
		}
		

		
	}
	else
	{
		
				header ('location: editsurat.php?eror=Gagal sekali&id=$id');		//Pesan jika proses simpan sukses
		
	}
 //*/

 


?>