<?php
require_once 'koneksi/init.php';
require_once 'koneksi/session.php';
require_once 'koneksi/dokumentasi.php';



	  $query ="SELECT  sum(pemasukan) from keuangan";
	  $sql = mysqli_query ($link, $query);
	  $data =  mysqli_fetch_array($sql);
	  $masuk=$data[0];


	  $query1 ="SELECT  sum(pengeluaran) from keuangan";
	  $sql1 = mysqli_query ($link, $query1);
	  $data =  mysqli_fetch_array($sql1);
	  $keluar=$data[0];
	  $saldo = $masuk - $keluar;



	  

	  $query ="SELECT count(*) as total FROM anggota 	WHERE status='kader'";
	  $sql = mysqli_query ($link, $query);
	  $data =  mysqli_fetch_array($sql);
      $jumlahkader=$data['total'];

	  

	  
	  
	  $query ="SELECT count(*) as total FROM anggota 	WHERE status='pengurus'";
	  $sql = mysqli_query ($link, $query);
	  $data =  mysqli_fetch_array($sql);
      $jumlahpengurus=$data['total'];
	  
	  
	  $query ="SELECT count(*) as total FROM dokumentasi";
	  $sql = mysqli_query ($link, $query);
	  $data =  mysqli_fetch_array($sql);
	  $jumlahdokumentasi=$data['total'];
	  
	  $query ="SELECT count(*) as total FROM proker";
	  $sql = mysqli_query ($link, $query);
	  $data =  mysqli_fetch_array($sql);
	  $jumlahproker=$data['total'];	  
?>
