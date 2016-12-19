<?php
require_once 'koneksi/sesion.php';
require_once 'koneksi/session.php';
require_once 'koneksi/koneksi.php';


if (!empty($_POST['nama']))
{	
	$nama=$_POST['nama'];
	$tujuan=$_POST['tujuan'];
	$jenis=$_POST['jenis'];
	
	$sql="INSERT INTO proker VALUES ('','$nama','$tujuan','$jenis')";
	$sql= mysqli_query($link, $sql);
	
	if ($sql)
	{
		require_once 'koneksi/hari.php';
		$day = $hari.', '.$tanggal.' '.$bulan.' '.$tahun.' '.$jam ;
		$aktifitas="Telah Menambahkan Data Program Kerja pada ".$day;
		
		$query="INSERT INTO aktifitasadmin VALUES ('','$email','$aktifitas')";
		$query= mysqli_query ($link, $query);
		if ($query)
		{
			header ('location:programkerja.php?eror=Berhasil');
		}
		else
		{
			header ('location:tambahprogramkerja.php?eror=Gagal');
		}
	}
	else
	{
		header ('location:tambahprogramkerja.php?eror=Gagal Input Data');
	}

	
}
else
{
	header ('location:tambahprogramkerja.php?eror=Harus Disi Semua');
}	 //*/
?>