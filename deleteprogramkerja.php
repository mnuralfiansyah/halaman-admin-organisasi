<?php
$id=$_GET['id'];
require_once 'koneksi/init.php';
require_once 'koneksi/session.php';
require_once 'koneksi/koneksi.php';

	  $id = mysqli_real_escape_string($link, $id);
	  
	  $query ="DELETE FROM proker WHERE id='$id'";
	  $sql = mysqli_query ($link, $query);

	  if($sql)
	  {
		header ('location:programkerja.php?eror=Berhasil');		//Pesan jika proses simpan sukses
	  }
	  else
	  {
		header ('location:pogramkerja.php?eror=Gagal Menghapus');	//Pesan jika proses simpan gagal
	  }
?>	 	  