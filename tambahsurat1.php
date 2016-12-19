<?php
require_once 'koneksi/sesion.php';
require_once 'koneksi/session.php';
require_once 'koneksi/koneksi.php';

if ((!empty($_POST['jenis'])) and (!empty($_POST['tanggal'])) and (!empty($_POST['nomor'])) and (!empty($_POST['perihal'])))
{	
	$jenis=$_POST['jenis'];
	$tanggal=$_POST['tanggal'];
	$no=$_POST['nomor'];
	$perihal=$_POST['perihal'];


	$sql="INSERT INTO surat VALUES ('','$tanggal','$no','$jenis','$perihal')";
	$sql= mysqli_query($link, $sql);
	if ($sql)
	{
		require_once 'koneksi/hari.php';
		$day = $hari.', '.$tanggal.' '.$bulan.' '.$tahun.' '.$jam ;
		$aktifitas="Telah Menambahkan Data Surat pada ".$day;
			
		$query="INSERT INTO aktifitasadmin VALUES ('','$email','$aktifitas')";
		$query= mysqli_query ($link, $query);
		
		if ($query)
		{
			header ('location:surat.php?eror=Berhasil');
		}
		else
		{
			header ('location:surat.php?eror=Gagal');
		}
	}
	else
	{
		header ('location:surat.php?eror=Gagal Memasukkan Data');
	}
}
else
{
		header ('location:surat.php?eror=Harus Disi Semua');
}	
?>