<?php

require_once 'koneksi/init.php';
require_once 'koneksi/koneksi.php';
require_once 'koneksi/session.php';

$email =$_SESSION['email'];
$waktu =$_SESSION['waktu'];




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
													 
													 echo "$hari, $tanggal $jam";
													 //$waktu = ('$hari, $tanggal $jam') ;

												global $link;

												$_SESSION['email'] = $email;
												//header ('location:index.php'); 
												
												$query = "UPDATE catatanlogin SET waktulogout='$hari, $tanggal $jam' WHERE waktulogin='$waktu' ";
												// UPDATE admin SET nama='$namaadmin'
												$sql = mysqli_query($link, $query);
												
												if($sql)
												{
														
														session_destroy();

														header ('location: login.php');
														
												}
												else
												{
														
														echo 'Gagal menyimpan data' ;		//Pesan jika proses simpan gagal
														
														
												}







?>