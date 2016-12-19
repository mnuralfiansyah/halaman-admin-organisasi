<?php
error_reporting(0);
require_once 'koneksi/init.php';
require_once 'koneksi/session.php';
require_once 'koneksi/koneksi.php';


$nama=$_POST['nama']; echo "$nama";
$tgl=$_POST['tgl']; echo "$tgl";
$alamat=$_POST['alamat']; echo "$alamat";
$telpon=$_POST['telpon']; echo "$telpon";
$status=$_POST['status']; echo "$status";
$jabatan=$_POST['jabatan']; echo "$jabatan";
$keterangan=$_POST['keterangan']; echo "$keterangan";
$kelamin=$_POST['kelamin']; echo " $kelamin";
$email=$_POST['email']; echo "$email";
//$foto=$_POST['foto']; echo "$foto";

if ((empty($nama)) && (empty($tgl)) && (empty($alamat)) && (empty($telpon)) && (empty($status)) && (empty($jabatan)) && (empty($email)))
{
		header ('location: tambahanggota.php?eror=Harus Diisi Semua');
}
else
{


	 global $link;
	
	$query = "INSERT INTO anggota VALUES ('','$nama','$tgl','$alamat','$telpon','$status','$jabatan','$keterangan','$kelamin','$email','$foto')";
	$sql = mysqli_query($link, $query);
	
	//jika query update sukses
	if($sql){
		
		header ('location:pengurusdankader.php');		//Pesan jika proses simpan sukses
		
	}else{
		
		echo 'Gagal menyimpan data' ;		//Pesan jika proses simpan gagal
		
		
	}
}

 //*/ 


?>