<?php
error_reporting(0)
require_once 'koneksi/init.php';
require_once 'koneksi/session.php';
require_once 'koneksi/koneksi.php';

$id=$_POST['id']; 
$nama=$_POST['nama'];
$tgl=$_POST['tgl'];
$alamat=$_POST['alamat'];




	$query = "UPDATE anggota SET nama='$nama', tgl_lhr='$tgl', alamat='$alamat', telpon='$telpon', status='$status',  amanah='$jabatan',  keterangan='$keterangan',  jns_klmn='$kelamin',  email='$email' WHERE id='$id'";
	$sql = mysqli_query($link, $query);
	
	//jika query update sukses
	if($sql){
		
		header ('location: pengurusdankader.php');		//Pesan jika proses simpan sukses
		
	}else{
		
		echo 'Gagal menyimpan data' ;		//Pesan jika proses simpan gagal
		
		
	}
 

 


?>